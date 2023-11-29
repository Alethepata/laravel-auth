<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home portfolio</title>
        <!-- Styles -->
        @vite('resources/js/app.js')
</head>
<body>

    @include('admin.partials.header')

    <div class="main-wrapper d-flex">
        @include('admin.partials.aside')
        <div class="container my-4">
            @yield('content')
        </div>

    </div>

</body>
</html>
