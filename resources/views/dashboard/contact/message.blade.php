@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Message') }}</th>
                                <th scope="col">{{ __('Delete') }}</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if (!empty($content[0]))
                                        @foreach ($content as $i => $slides)
                                        <?php 
                                                $string = $slides;
                                                $pairs = explode('#x#', $string);
                                                $slide = [];
                                                foreach ($pairs as $pair) {
                                                    list($key, $value) = explode('=#=', $pair);
                                                    $slide[$key] = $value;
                                                }
                                        ?>
                                <tr>
                                    <td>{{$slide['name']}}</td>
                                    <td>{{$slide['email']}}</td>
                                    <td>{{$slide['message']}}</td>
                                    <td>
                                        <a style="border-radius: 40%; font-size: 14px;" 
                                        href="{{route('dashboard.contact.contact.allmessage.delete', $i)}}" 
                                        class="btn btn-danger delete-confirm">{{ __('Delete') }}</a>
                                    </td>
                                </tr>

                            @endforeach
                            @else

                            <tr>
                                <td colspan="5" >{{ __('No Messages ...................') }}</td>
                            </tr>

                        @endif
                    </tbody>
                </table>
        </div>
    </div>
@endsection