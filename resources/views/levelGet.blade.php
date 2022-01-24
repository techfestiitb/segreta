<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Level {{$level->level}} | Segreta | Techfest</title>
    <link rel="stylesheet" href="https://techfest.org/segreta/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('layouts.meta')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Krub');
        *{
            font-family: 'Krub', sans-serif;
        }
        html,body{
            height: 100%;
            width: 100%;
            overflow:hidden;
        }
        .main-image{
            transition: all 0.1s;
            max-width: 500px;
        }
        @media(max-width:700px){
            .main-image{
                max-width:80vw;
            }
        }
        .zi-10{
            z-index: 10;
        }

        .overflow-hidden{
            overflow: hidden;
        }
        .overflow-auto{
            overflow: auto;
        }
        .normal-container{
            max-width: 500px;
            margin:auto;
        }
    </style>
    <script src="{{mix('js/app.js')}}"></script>
    @if(session()->has('error'))
        <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
        <script src="{{asset('js/iziToast.min.js')}}"></script>
    @endif
    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "a5f3d20c-79a4-40e2-b85b-4336d5f708a0",
            });
        });
    </script>

        @if(auth()->user()->dark_mode == 1)
            <style>
                .dark_mode{
                    background-color: #000000d6;
                }
            </style>
    @endif

</head>
{{--the answer of 21st question is : 3jan--}}

<body>

<main class="d-flex flex-column h-100 w-100 dark_mode">
   @include('layouts.header')
    <div class="container mt-3 text-center h-100 overflow-auto mb-3">
        <div class="img-container overflow-hidden">
            {!! $level->image !!}
        </div>
        @if(auth()->user()->dark_mode == 1)
            @if(auth()->user()->level == 20)
                            <p style="color: white">When will you use dark mode</p>
            @endif
        @endif

        <div class="normal-container">
            <form action="{{url()->current()}}" method="POST">
                @csrf
                <div class="input-group mb-3 mt-3">
                    <input class="form-control" placeholder="Your Answer" aria-label="Your Answer" aria-describedby="basic-addon1" type="text" name="answer"/>
                </div>
                <div class="input-group">
                    <input class="form-control bg-dark text-white" type="submit" value="Check"/>
                </div>
            </form>
            <div class="mt-3 w-100 d-flex">
{{--                <a class="badge badge-pill badge-success p-3 mr-auto text-white" href="{!! $level->extra !!}" download="image.jpg" target="_blank">--}}
{{--                    <i class="fa fa-download"></i><span>&nbsp;Download Image</span>--}}
{{--                </a>--}}
{{--                <span class="badge badge-pill rotate-left p-3 badge-primary ml-5">--}}
{{--                    <i class="fa fa-rotate-left"></i>--}}
{{--                </span>--}}
{{--                <span class="badge badge-pill rotate-right p-3 badge-primary ml-1">--}}
{{--                    <i class="fa fa-rotate-right"> </i>--}}
{{--                </span>--}}
            </div>
            <div class="content"></div>
        </div>
    </div>
    <div class="mb-5 mt-5"></div>
    @include("layouts.footer")
</main>
<script src="{{asset('js/app.js')}}"></script>
<script>
    let rotation = 0;
    let rotateImg = function () {
        $('.main-image').css('transform', `rotate(${rotation}deg)`);
    };
    $('.rotate-left').click(function(){
        rotation-=90;
        rotateImg();
    });
    $('.rotate-right').click(function(){
        rotation+=90;
        console.log('yo');
        rotateImg();
    });
    @if(session()->has('error'))
    $(document).ready(function(){
        iziToast.error({'message':'Sorry {{session('error')}} is not the correct answer',position:'topLeft',target:'.content'});
    });
    @endif
</script>
</body>
</html>