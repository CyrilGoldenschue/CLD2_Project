<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <script src="https://kit.fontawesome.com/bf0671b196.js" crossorigin="anonymous"></script>



</head>
<body class="antialiased">

<div class="basic_header">
    <div id="menuArea">
        <a href="/" class="logo"><h1>CLD2_Project</h1></a>
        <a href="/galleries" class="menu">Galleries</a>
        <a href="/pictures" class="menu">Picture</a>
    </div>

</div>


@yield('content')


</body>
</html>
