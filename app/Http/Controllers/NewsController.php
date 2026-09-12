<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getContent($row){
        $slide = News::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }

    // comment
    public function comment(Request $request)
    {
        $content = $this->getContent(2);
        if (!empty($content[0]))
            $str = '#xt#'.'author=#='.$request->author.'#x#'.'email=#='.$request->email
            .'#x#'.'url=#='.$request->url.'#x#'.'comment=#='.$request->comment;
        else
            $str ='author=#='.$request->author.'#x#'.'email=#='.$request->email
            .'#x#'.'url=#='.$request->url.'#x#'.'comment=#='.$request->comment;
        $newcontent = $content .$str;
        News::find(2)->update(['content' => $newcontent] );
        return redirect()->route('fronted.news');
    }
}
