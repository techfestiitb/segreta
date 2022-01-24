<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rules | Segreta | Techfest</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
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
        .img-container{
            max-height: 60vh;
            margin:auto;
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
</head>
<body>
<main class="d-flex flex-column h-100 w-100">
    @include('layouts.header')
    <div class="container mt-3 h-100 overflow-auto mb-3">
        <h1 class="display-4">Rules</h1>
        <h3>Rules related to answering the questions</h3>
        <ul>
            <li>One person can play on only one account. If found playing with multiple accounts, the person will be disqualified automatically</li>
            <li>Brute Forcing the solution using software is not an option. Your IP will be blocked if found doing so.</li>
            <li>Caps and spaces are not allowed. Eg: If your answer is "Hello World", enter "helloworld"  to proceed to the next level. The answers also do not have special characters such as !," etc. but exceptions are (0,1,...9)</li>
            <li>Beware of spelling errors in your answers. Segreta can't auto correct your spellings!</li>
            <li>Do not use admin as your username.</li>
{{--            <li>In case of clash of 2 ranks, the person who has registered first will be given higher priority</li>--}}
        </ul>
        <h3>Rules related to forum</h3>
        <ul>
            <li>Anyone other than moderator is not supposed to give hints on the forum. If found doing so, the person will be disqualified.</li>
            <li>Use of abusive language is strictly prohibited. Using rude language with other players and the moderator will also not be tolerated.</li>
        </ul>
    </div>
    @include('layouts.footer')
</main>

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