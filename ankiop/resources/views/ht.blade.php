<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('giachoi')</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        @section('content')
            @for($i = giachoi; $i < 10; $i++)
  in ra giá trị  {{ $giachoi }} <br/>
@endfor
        @show
    </div>
</body>
</html>

