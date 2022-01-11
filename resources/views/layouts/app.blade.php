<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Guardianship Transfer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('layouts/css/styles.css') }}">
</head>
<body>

    <!-- Navbar Page -->
    <nav class="navbar-page">
        <a href="{{ route('auth.index') }}" class="brand">
            <ion-icon name="diamond-outline"></ion-icon>
        </a>

        <ul>
            <li> <a href="{{ route('auth.index') }}"> Home </a> </li>
            <li> <a href="{{ route('auth.index') }}"> Sobre </a> </li>
            <li> <a href="{{ route('auth.index') }}"> Serviços </a> </li>
        </ul>
    </nav>
    <!-- Document body --->
    @yield('content')

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>