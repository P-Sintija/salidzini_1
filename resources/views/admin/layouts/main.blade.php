<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Salidzini</title>

    <link rel="stylesheet" href="{{ mix("/css/admin/app.css") }}">

</head>
<body data-js-controller="{{ $jsControllerName}}">

<main>
    @yield('content')
</main>

<script src="{{ mix('js/admin/app.js') }}"></script>
</body>
</html>
