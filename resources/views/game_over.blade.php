<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segreta | Techfest 2018-19</title>
    @include('layouts.meta')
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
</head>
<body>
<div class="sponsor">
    <img src="https://techfest.org/segreta/sponsor.png" alt="sponsor" style="width: 150px">
</div>
<main class="h-100 o-auto h-smart">
    <div class="container h-100">
        <div class="d-flex flex-column pr-md-5 h-sm-100 justify-content-center">
            <a href="https://techfest.org" target="_blank" class="display-3 pt-5 nowrap text-special"><span class="span-scale"><span> Techfest </span><span class="h2 d-none d-sm-inline-block">2018-19</span></span></a>
            <div class="display-4 text-black-50"><div class="span-scale">presents</div></div>
            <h1 class="display-2"><div class="span-scale">SEGRETA</div></h1>
            <p class="pl-2">Welcome aboard, time to turn ON the Sherlock inside you. Register and get started to the stand a chance to win prizes worth INR 40,000. Read the rules and visit the Forum regularly for hints and important information.</p>
        </div>
    </div>
</main>
@include("layouts.footer")
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>