<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        @section('content')
            @for($i = giachoi; $i < 10; $i++)
    {{ $giachoi }} <br/>
@endfor
        @show
    </div>
</body>
</html>

