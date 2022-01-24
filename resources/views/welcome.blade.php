<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segreta | Techfest</title>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');</script>
{{--    <meta name="theme-color" content="#000000d6" />--}}

@if(isset($user1))

        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:description" content="With 2 days of fierce competition, I ended up on the level {{$user1->level}}, Segreta by Techfest, IIT Bombay! #Segreta #Techfest #Achiever">
        <meta property="og:title" content="{{$user1->name}} was on level {{$user1->level}}">
        <meta property="og:site_name" content="Techfest">
        <meta property="og:image" content="http://techfest.org/odrb6utl1e/segreta.png">
        <meta property="og:see_also" content="http://m.techfest.org">
        <link rel="icon" href="http://techfest.org/favicon.png">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
        <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');</script>

    @else
        @include('layouts.meta')
    @endif
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        html,body{
            height: 100%;
            width: 100%;
            
        }
        .h-smart{
            height: calc(100% - 2rem) !important;
        }
        @media(min-width: 576px){
            .h-sm-100{
                height: 100%;
            }
        }
        .sponsor{
            position: fixed;
            top:10px;
            right: 10px;
        }
        .w-min-25{
            min-width: 25%;
        }
        .nowrap{
            white-space: nowrap;
        }
        .o-auto{
            overflow: auto;
        }
        .span-scale{
            font-size: 0.8em;
        }
        .text-special,.text-special *{
            color: #000000 !important;
            text-decoration: none !important;
        }
    </style>



{{--    @if(auth()->user()->dark_mode == 1)--}}
{{--        <style>--}}
{{--            .dark_mode{--}}
{{--                background-color: #000000d6;--}}
{{--            }--}}
{{--        </style>--}}
{{--    @endif--}}
</head>
<body>
<div class="sponsor">
{{--    <img src="http://techfest.org/segreta/sponsor.png" alt="sponsor" style="width: 150px">--}}
</div>
<main class="h-100 o-auto h-smart">
    <div class="container h-100">
        <div class="d-flex flex-column pr-md-5 h-sm-100 justify-content-center dark_mode">
            <a href="http://techfest.org" target="_blank" class="display-3 pt-5 nowrap text-special"><span class="span-scale"><span> Techfest </span><span class="h2 d-none d-sm-inline-block">2019-20</span></span></a>
            <div class="display-4 text-black-50"><div class="span-scale">presents</div></div>
            <h1 class="display-2"><div class="span-scale">SEGRETA</div></h1>
            <div class="display-4 text-black-50"><div class="span-scale">Game Ended</div></div>

        @if(Auth::check())
            @else
            <div>
                <a href="{{route('login')}}" class="btn btn-outline-primary w-min-25 m-2">Login</a>
                <a href="http://techfest.org/" class="btn btn-outline-success w-min-25 m-2" target="_blank">
                    Visit Techfest
                </a>
            </div>
            @endif
            @if(auth()->check())
                <div>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=techfest.org/segreta/share/{{auth()->user()->id}}/{{urlencode(auth()->user()->name)}}" class="btn btn-primary w-min-25 m-2" target="_blank">
                        Share on Facebook
                    </a>
                    <a href="http://techfest.org/" class="btn btn-success w-min-25 m-2" target="_blank">
                        Explore More on Official Website
                    </a>
                </div>
{{--                {{auth()->user()->id}}--}}
            @endif

            @if(auth()->check())
                <p class="pl-2">Hey Cryptic Hunters! Segreta is now over, hope you have enjoyed it!  <br>
{{--                    Do share now and tag <a href="https://www.facebook.com/iitbombaytechfest/" target="_blank">Techfest IIT Bombay</a>, we may still have some mystery left for you 😉</p>--}}
            @else
                <p class="pl-2">Hey Cryptic Hunters! Segreta is now over, hope you have enjoyed it!</p>
            @endif
        </div>
    </div>
</main>
@if(session()->has('admin'))
    <script>
        let p = 'https://www.facebook.com/sharer/sharer.php?u='+encodeURI(k);
        $('.share').attr('href',p);
        if($('#name').val()!=='') $('.nodisp').fadeIn();
        else $('.nodisp').fadeOut();
    </script>
@endif
@include("layouts.footer")
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>