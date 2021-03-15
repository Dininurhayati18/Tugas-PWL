<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <div class="container" style="margin-top:60px;">
        <div class="row">
            <div class="col-sm-4">
                @include('includes.sidebar')
            </div>
            <div class="col-sm-8">
                <div class="container" style="margin-top:10px;">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

    @yield('js')
</body>
</html>