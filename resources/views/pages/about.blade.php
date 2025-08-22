@extends('layouts.head')
@section('content')
    {{-- DEBUT DE LA SECTION 1 --}}
    <section class="section1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                {{-- Slide 1 --}}
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('images/images6.jpeg')}}" class="d-block w-100 imageprincipale" alt="...">
                    <div class="carousel-caption  text1">
                        <h2 class="animated-text">Bienvenue sur notre site</h2>
                        <p>Nous sommes ravis de vous accueillir sur notre plateforme. Explorez nos produits et services.</p>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('images/images5.jpeg')}}" class="d-block w-100 imageprincipale" alt="...">
                    <div class="carousel-caption  text1">
                        <h2 class="animated-text">Nos Produits</h2>
                        <p>Découvrez une large gamme de produits adaptés à vos besoins.</p>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="carousel-item">
                    <img src="{{asset('images/images19.jpeg')}}" class="d-block w-100 imageprincipale" alt="...">
                    <div class="carousel-caption text1">
                        <h2 class="animated-text">Nos Services</h2>
                        <p>Un accompagnement personnalisé pour vous offrir la meilleure expérience.</p>
                    </div>
                </div>

            </div>

            {{-- Controls --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- FIN DE LA SECTION 1 --}}
        <br>
        <br>
        

    {{-- DEBUT DE LA SECTION 2 --}}
    <section class="section2 "> 
        <div class="row container-fluid">
            <div class="col-sm-6 col-12 col-lg-6 col-md-6">
                <img src="{{asset('images/images13.jpeg')}}" alt="" class="img-fluid imagesection2">
            </div>
            <div class="col-sm-6 col-12 col-lg-6 col-md-6">
                <h1 class="titresection2">LA CDCI</h1>
                <p class="textsection2">Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Saepe repellendus illum veritatis
                     mollitia ea natus pariatur qui aperiam nostrum 
                     architecto minus ullam quae veniam possimus magni, 
                     ratione eos expedita similique!</p>
            </div>
        </div>
    </section>
    {{-- FIN DE LA SECTION 2 --}}
    <br>
    <br>
    {{-- DEBUT DE LA SECTION 3 --}}
    <section class="section3 ">
        <div class="row container-fluid">
            <div class="col-sm-6 col-12 col-lg-6 col-md-6">
                <h1 class="titresection2">NOS SERVICES</h1>
                <p class="textsection2">Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Saepe repellendus illum veritatis
                     mollitia ea natus pariatur qui aperiam nostrum 
                     architecto minus ullam quae veniam possimus magni, 
                     ratione eos expedita similique!</p>
            </div>
            <div class="col-sm-6 col-12 col-lg-6 col-md-6">
                <img src="{{asset('images/images15.jpeg')}}" alt="" class="img-fluid imagesection3">
            </div>
        </div>
    </section>
    {{-- FIN DE LA SECTION 3 --}}
    <br>
    <br>
    {{-- DEBUT DE LA SECTION 4 --}}
    <section class="section4">
        <div class="row container-fluid">
            <div class="col-sm-6">
                <i class="fa-regular fa-house"></i>
            </div>
        </div>
    </section>
    {{-- FIN DE LA SECTION 4 --}}
@endsection

