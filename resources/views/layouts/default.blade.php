<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>


    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>