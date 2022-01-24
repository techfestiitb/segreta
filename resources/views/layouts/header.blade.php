<nav class="navbar navbar-expand navbar-dark bg-dark zi-10">
    <a class="navbar-brand" href="http://techfest.org/segreta/">Segreta</a>
    <a class="navbar-brand" href="javascript:void(null)"></a>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
            @if(auth()->check())
                @if(auth()->user()->dark_mode == 0)
                    <li class="nav-item"><a class="nav-link " href="http://techfest.org/segreta/dark_mode/{{auth()->user()->id}}">Dark Mode</a></li>
                @endif
                    @if(auth()->user()->dark_mode == 1)
                        <li class="nav-item"><a class="nav-link " href="http://techfest.org/segreta/disable_dark_mode/{{auth()->user()->id}}">Disable Dark Mode</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link text-danger" href="{{route('logout')}}">Logout</a></li>

            @endif
        </ul>
    </div>
</nav>