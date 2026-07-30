<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="container">

            <a href="{{route('livros.index')}}">Biblioteca</a>

        </div>
    </nav>

    <main>

        <div class="container">
            @yield('content')
        </div>

    </main>

    <footer class="footer">
        <div class="container">

            <p>Desenvolvido por Cauã Lopes</p>

        </div>
    </footer>

</body>

</html>
