<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FastRecipe</title>
        <link rel='stylesheet' href='/css/app.css'>
    </head>
    <body>
        @include('inc.navbar')

        <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    @yield('content')
                </div>
                
            </div>
        </div>

        <script src='/js/app.js'></script>
        <footer id="footer" class="text-center">
            <div class="container">
                <p class="text-muted">Copyright 2020 &copy; FastRecipe</p>
            </div>
            
        </footer>
    </body>
</html>

