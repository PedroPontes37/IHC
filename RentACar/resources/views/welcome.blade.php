@extends('layouts.layout')

@section('content')
    <div class="welcome">
        <div class="title">
            <h1 id="textTitle">VEM DESCOBRIR A MADEIRA <br> NOS AJUDAMOS</h1>

        </div>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">

                <img src="/img/carros/carro.jpg" style="width:500px height:100px">

            </div>

            <div class="mySlides fade">

                <img src="/img/carros/carro2.jpg" style="width:500px height:100px">

            </div>

            <div class="mySlides fade">

                <img src="/img/carros/carro3.jpg" style="width:500px height:100px">

            </div>


        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        @if (auth()->user())
            <div class="buttonHome">
                {{-- <button class="button"><a href="{{ route('carros.index') }}" class="button">Faz o teu Aluguer</a></button> --}}
                <button class="button"><a href="/datas" class="button">Faz o teu Aluguer</a></button>

            </div>
        @endif
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 5 seconds
        }
    </script>
@endsection
