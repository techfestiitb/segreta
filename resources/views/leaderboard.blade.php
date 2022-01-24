<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segreta | Techfest
    </title>
    @include('layouts.meta')


        <link rel="stylesheet"  href="https://techfest.org/segreta/css/app.css"><style>
        html,body{height: 100%;width: 100%;}.h-smart{height: calc(100% - 2rem) !important;
                                }@media(min-width:576px){
                                .h-sm-100{ height: 100%;}
                                }.w-min-25{min-width:25%;
                                }.np{ white-space:nowrap;
                                }.o-auto{overflow: auto;}



        .span-scale{font-size: 0.8em;}.text-special,
        .text-special * { color: #000000 !important;
        text-decoration:
        none !important;
        }</style></head>
        <body><main class="h-100 o-auto h-smart">
        <nav class = " navbar zi-10 navbar-expand
        navbar-dark  bg-dark " > <a href="/segreta"
        class="navbar-brand">Segreta</a><div
        class= "collapse
        navbar-collapse"
        id="navbarColr">


                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link text-danger" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
            </nav>
    <div class="container pt-5">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Name</th>
                <th scope="col">Level</th>
            </tr>
            </thead>
            <tbody>
            @foreach($top as $k=>$player)
            <tr>
                <th>{{$k+1}}</th>
                <th scope="row">{{$player->name}}</th>
                <td>{{$player->level}}</td>
            </tr>
            @endforeach
            <tr class="thead-light">
                <th>{{ (array_search(auth()->user()->id, $positions)+1)}}</th>
                <th>{{auth()->user()->name}}</th>
                <th>{{auth()->user()->level}}</th>
            </tr>
            </tbody>
        </table>
    </div>
</main>
@include("layouts.footer")
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>