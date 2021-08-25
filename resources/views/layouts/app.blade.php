<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Главная')</title>
</head>
<body>
<header>
    @section('header')
        <h2>Родительский хедер</h2>
    @show
</header>
<aside>
    @section('sidebar')
        <h2>Родительская боковая панель.</h2>
    @show
</aside>
<main>

    <h2>Родительский контент.</h2>
    @yield('content')
</main>
<footer>
    @section('footer')
        <h2>Родительский футер</h2>
    @show
</footer>
@includeIf('layouts.footer2', ['startyear' => '2008'])

@for ($i = 0; $i < 10; $i++)
    значение счетчика: {{ $i }} <br>
@endfor

</body>
</html>

