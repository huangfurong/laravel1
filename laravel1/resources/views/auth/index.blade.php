@extends('personal')

@section('content')

    <article class="format-image group">
        <h2 class="post-title pad">
            You are logged in!
        </h2>
        <div class="post-inner">
            <div class="post-deco">
                <div class="hex hex-small">
                    <div class="hex-inner"><i class="fa"></i></div>
                    <div class="corner-1"></div>
                    <div class="corner-2"></div>
                </div>
            </div>
            <div class="post-content pad">
                <div class="entry custome" align="center">
                    Welcome {{ \Auth::user()->name }}
                </div>
               <p align="center">Your email is {{ \Auth::user()->email }}</p>
            </div>
        </div>
    </article>
@endsection