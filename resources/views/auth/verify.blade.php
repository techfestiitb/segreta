<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segreta | Techfest 2018-19</title>
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

<main class="h-100 o-auto h-smart">
    <div class="container h-100">
        <div class="d-flex flex-column pr-md-5 h-sm-100 justify-content-center">
            <a href="https://techfest.org" target="_blank" class="display-3 pt-5 nowrap text-special"><span class="span-scale"><span> Techfest </span><span class="h2 d-none d-sm-inline-block"></span></span></a>
            <div class="display-4 text-black-50"><div class="span-scale">presents</div></div>
            <h1 class="display-2"><div class="span-scale">SEGRETA</div></h1>
            <h3>@if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
            </h3>
            <h3>
                {{ __('Before proceeding, please check your email for a verification link.') }} <br>
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </h3>
        </div>
    </div>
</main>
@include("layouts.footer")
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>