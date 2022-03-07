<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Prision System</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Roboto', sans-serif;
    }
    .hero {
        width: 100vw;
        height: 100vh;
        background: linear-gradient(90deg, #10b981 0%, #6266f0 100%);
        height: 80px;
        padding-bottom: 20px;
    }
    .navbar .brand {
        color: #3d5a80;
    }
    .brand h2 {
        color: white;
        padding-top: 15px;
    }
    .navbar {
        display: flex;
        padding: 0px 30px;
    }
    .navbar .menu {
        grid-column: 6 / 9;
        display: flex;
        margin-top: 12px;
    }
    .menu li {
        list-style: none;
    }
    .menu li a {
        text-decoration: none;
        margin-right: 3em;
        front-size: 1.3em;
        color: red;
        front-weight: 200px;
        padding: 10px 20px;
        margin-top: 10px;
    }
    .menu li a:hover {
        background-color: #ee6c4d;
        color: black;
        transition: all .05s;
    }
    .bar-menu1 {
        display: none;
    }
    /*MAIN SECCION  */
    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 0px;
        padding-bottom: 100px;
        text-align: center;
    }
    h1 {
        front-size: 5em;
    }
    .button {
        cursor: pointer;
        color: white;
        box-shadow: 0px 3px 14px -8px rgba(0, 0, 0, 0.78);
    }
    .button:hover {
        box-shadow: none;
    }
    .btn-solicitar-Servicio {
        background: linear-gradient(90deg, #10b981 0%, #6266f0 100%);
    }
    .read-more-button {
        padding: 8px 40px;
        front-size: 1.2em;
        border-radius: 20px;
        border: none;
    }
    .main img {
        margin-top: 3em;
    }
    .contenido {
        background-color: #ffffff;
        width: auto;
        height: 350px;
        padding-top: 50px;
    }
    .card {
        padding-top: 30px;
        margin-top: 20px;
    }
    .card1 h5 {
        font-size: 50px;
        padding-left: 40px;
        flex-direction: row-reverse;
    }
    .card-body {
        display: flex;
    }
    .card-body p {
        width: 500px;
        margin-right: 150px;
        padding-left: 30px;
    }
    .card-body img {
        margin-top: 0px;
        margin-left: 30px;
    }
    .card-text p {
        front-size: center;
    }
    .contenido_vision {
        background-color: #ffffff;
        width: auto;
        height: 520px;
    }
    .card-body2 {
        display: flex;
    }
    .card2 h5 {
        text-align: right;
        font-size: 50px;
        padding-right: 100px;
        padding-top: 50px;
    }
    .card-body2 p {
        width: 500px;
        margin-left: 220px;
        text-align: left;
    }
    .card-body2 img {
        margin-top: 0px;
        margin-left: 40px;
    }
    .menu-li {
        margin-left: 20px;
        color: white;
        text-decoration: none;
    }
    .logo {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .image {
        background-image: url('https://i.ibb.co/DV690Y1/handcuffs-on-laptop-keyboard-in-studio-on-white-background.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        position: absolute;
        opacity: 0.4;
        min-width: 100%;
        min-height: 400px;
    }
    .text {
        position: relative;
        top: 120px;
        text-align: center;
        align-items: center;
    }
    .header {
        min-width: 100%;
        min-height: 400px;
    }
    /* CSS CARROUSEL  */
    span{
        margin: auto;
    font-size: 2rem;
    color: whitesmoke;
    }
    .container {
        position: relative;
        width: 320px;
        margin: 100px auto 0 auto;
        perspective: 1000px;
        height: 300px;
    }
    .carousel {
        position: absolute;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        animation: rotate360 60s infinite forwards linear;
    }
    .carousel__face {
        position: absolute;
        width: 300px;
        height: 187px;
        top: 20px;
        left: 10px;
        right: 10px;
        background-size: cover;
        box-shadow: inset 0 0 0 2000px rgba(118, 118, 118, 0.5);
        display: flex;
    }
    span {
        margin: auto;
        font-size: 2rem;
    }
    .carousel__face:nth-child(1) {
        background-image: url("https://images.unsplash.com/photo-1613050920698-11821489ede4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80");
        transform: rotateY(0deg) translateZ(430px);
    }
    .carousel__face:nth-child(2) {
        background-image: url("https://images.unsplash.com/photo-1543536833-6d65fcc64f66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1206&q=80");
        transform: rotateY(40deg) translateZ(430px);
    }
    .carousel__face:nth-child(3) {
        background-image: url("https://images.unsplash.com/photo-1568266365034-be6f85c74758?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80");
        transform: rotateY(80deg) translateZ(430px);
    }
    .carousel__face:nth-child(4) {
        background-image: url("https://images.unsplash.com/photo-1613050920698-11821489ede4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80");
        transform: rotateY(120deg) translateZ(430px);
    }
    .carousel__face:nth-child(5) {
        background-image: url("https://media.istockphoto.com/photos/man-in-prison-hands-of-behind-hold-steel-cage-jail-bars-offender-in-picture-id980041056?b=1&k=20&m=980041056&s=170667a&w=0&h=KzhJdTthr484PumAYFQDbO1b3qHN8d_6u_-iqVaj8x4=");
        transform: rotateY(160deg) translateZ(430px);
    }
    .carousel__face:nth-child(6) {
        background-image: url("https://media.istockphoto.com/photos/security-man-looking-at-moscow-kremlin-and-st-basils-cathedral-picture-id1303166941?b=1&k=20&m=1303166941&s=170667a&w=0&h=Cl8BCjSqy8BQC_mbQNLKplVudjmBAp_35K9jQrMNOQs=");
        transform: rotateY(200deg) translateZ(430px);
    }
    .carousel__face:nth-child(7) {
        background-image: url("https://media.istockphoto.com/photos/handcuffs-white-background-picture-id693904998?b=1&k=20&m=693904998&s=170667a&w=0&h=qZmS4cdNrzp9KyZpEblOO6kVB76MnWpxLo6MfeRj2Y8=");
        transform: rotateY(240deg) translateZ(430px);
    }
    .carousel__face:nth-child(8) {
        background-image: url("https://media.istockphoto.com/photos/man-in-jail-behind-the-prision-bars-picture-id1216244420?b=1&k=20&m=1216244420&s=170667a&w=0&h=qTx2rJu1P8e6U3GvV7RjvHh4nMYq56qDcWtn7LUVl7g=");
        transform: rotateY(280deg) translateZ(430px);
    }
    .carousel__face:nth-child(9) {
        background-image: url("https://images.unsplash.com/photo-1546450334-5a84ac3a1f0e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80");
        transform: rotateY(320deg) translateZ(430px);
    }
    @keyframes rotate360 {
        from {
            transform: rotateY(0deg);
        }
        to {
            transform: rotateY(-360deg);
        }
    }
</style>

<body>

    <div class="hero" id="home">
        <header>

            <nav class="navbar">
                <div class="brand">
                    <div class="logo">
                        <a href="{{ route('home') }}" class="inline-flex">
                            <img src="https://i.ibb.co/xscfT1k/image-removebg-preview-1.png"
                                alt="image-removebg-preview-1" border="0" style="max-height: 60px;"> </a>

                        <h2>Prision System</h2>
                    </div>


                </div>


                <div>

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block dark:bg-mix-900">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="menu-li">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="menu-li">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="menu-li">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
                <div class="bar-menu1">

                    <img src="img/menu.png" id="menu-bar" width="30px" height="30px">

                </div>


            </nav>
        </header>
    </div>



    <div class="header">
        <x-info />


    </div>
    <div style="text-align: center" id="about-us">
        <h1 class="text-3xl font-extrabold">Sobre nosotros</h1>
        <div>
            {{-- <x-carrousel/> --}}
    
            <p>Somos un sistema Ecuatorino, creado para brindar servicio de forma ordenada el sistema penitenciario</p>
            
        </div>
    </div>
    <x-carrousel/>
    <div>
        <h1></h1>
    </div>






    <script>
        function myFunction() {
            var elmnt = document.getElementById("about-us");
            elmnt.scrollIntoView();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>