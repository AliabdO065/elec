<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getContent($row)
    {
        $slide = Contact::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }

    public function allmessage()
    {
        $contentAsString = $this->getContent(2);
        $content = explode("#xt#", $contentAsString);
        return view('dashboard.contact.message', compact('content'));
    }

    public function delete($id)
    {
        $allcontent = $this->getContent(2);
        $content = explode("#xt#", $allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);

        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if ($id > 0)
            $old = '#xt#' . 'name=#=' . $slide['name'] . '#x#' . 'email=#=' . $slide['email'] . '#x#' . 'message=#=' . $slide['message'];
        else if (isset($content[1]))
            $old = 'name=#=' . $slide['name'] . '#x#' . 'email=#=' . $slide['email'] . '#x#' . 'message=#=' . $slide['message'] . '#xt#';
        else
            $old = 'name=#=' . $slide['name'] . '#x#' . 'email=#=' . $slide['email'] . '#x#' . 'message=#=' . $slide['message'];
        $newcontent = str_replace($old, '', $allcontent);
        Contact::find(2)->update(['content' => $newcontent]);

        return redirect()->route('dashboard.contact.contact.allmessage');
    }
}
