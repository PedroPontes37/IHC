<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>RentACar</title>
</head>


<header>
    <div class="subHeader">
        <a href="/" id="logo"> <img src="/img/logo.png" style="height:50px"></a>

        @guest
            @if (Route::has('login'))
                <button class="buttonLogin"><a id="Login" href="{{ route('login') }}">{{ __('Login') }}</a></button>
            @endif
        @else
            <button class="buttonLogin"> <a id="Login" href="/perfil">
                    {{ Auth::user()->name }}
                </a></button>

        @endguest
    </div>



</header>

<body>
    <div id="contentArea">
        @yield('content')
    </div>
</body>

<footer class="footerBox">
    <div class="contFooter">
        <div class="contacto">
            <p>CONTACTO</p>
            <p>Tlm.:291 291 291</p>
        </div>
        <div class="contacto">
            <p>LOCALIZAÇÃO</p>
            <p>Funchal,Monte</p>
        </div>
    </div>
</footer>

</html>

<style>
    .footerBox {}

    body {
        background-color: #EFEDFF;
    }

    #logo {
        margin-left: 3%;
    }

    .buttonLogin {
        border: none;
        background-color: #cfe1eb;
        width: 150px;
        height: 30px;
        border-radius: 5px;
        text-decoration: none;
        color: #5e5757;
        text-align: center;
        margin-right: 3%
    }

    #Login {
        text-decoration: none;
        color: black;
    }

    .subHeader {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;

    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 10vh;
        background-color: #07689F;
    }

    footer {

        margin: 0px;
        position: relative;
        bottom: 0;
        width: 100%;
        height: 15vh;
        background-color: #07689F;
    }

    .contFooter {

        display: flex;
        flex-direction: row;
        justify-content: space-evenly;

    }

    .contacto {
        display: flex;
        flex-direction: column;
        align-items: center;

    }
</style>

<script>
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>
