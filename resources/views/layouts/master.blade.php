<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Easy BMI Calculator')</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='/css/bmi.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

<header>
    <a href='/'><img src='/images/bmicalc.jpg' id='logo' alt='BMI Calculator Logo'></a>
    @include('modules.nav')
</header>

<section id='main'>
    @yield('content')
</section>

<footer>
    <a href='https://github.com/anup24/p3'><i class='fa fa-github'></i> View on Github</a>
</footer>

@stack('body')

</body>
</html>