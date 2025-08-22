@extends('layouts.head')
@section('content')
    {{-- DEBUT DE LA SECTION 1 --}}
    <section class="section1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                {{-- Slide 1 --}}
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('images/images7.jpeg')}}" class="d-block w-100 imageprincipale" alt="...">
                    <div class="carousel-caption  text1">
                        <h2 class="animated-text">Bienvenue sur notre site</h2>
                        <p>Nous sommes ravis de vous accueillir sur notre plateforme. Explorez nos produits et services.</p>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('images/images12.jpeg')}}" class="d-block w-100 imageprincipale" alt="...">
                    <div class="carousel-caption  text1">
                        <h2 class="animated-text">Nos Produits</h2>
                        <p>Découvrez une large gamme de produits adaptés à vos besoins.</p>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="carousel-item">
                    <img src="{{asset('images/images14.jpeg')}}" class="d-block w-100 imageprincipale" alt="...">
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
    <section class="section_3" >
        <div>
            <h1 style="text-align: center; font-weight: bold; font-size: 36px; color: rgb(255, 116, 2);">NOS CHIFFRES</h1>        
        </div>
        <br>
        <div class="row container-fluid section3 ">
            <div class="col-sm-2">
                <div style="text-align: center">
                    
                    <i class="fa-solid fa-store" ></i>
                    <br>
                    <br>
                     <h2 style="text-align: center; font-weight: bold; font-size: 35px; color: rgb(255, 255, 255);">{{ $gros }}+</h2>
                    <p style="text-align: center; color: rgb(255, 255, 255);">Site de Gros</p>
                </div>
               
            </div>
            <div class="col-sm-2">
                <div style="text-align: center">

                    <i class="fa-solid fa-cash-register" ></i>
                    <br>
                    <br>
                     <h2 style="text-align: center; font-weight: bold; font-size: 35px; color: rgb(255, 255, 255);">{{ $demi + $king }}+</h2>
                    <p style="text-align: center; color: rgb(255, 255, 255);">Site de Details</p>
                </div>
            </div>
            <div class="col-sm-2">
                <div style="text-align: center">

                    <i class="fa-solid fa-location-dot" ></i>
                    <br>
                    <br>
                     <h2 style="text-align: center; font-weight: bold; font-size: 35px; color: rgb(255, 255, 255);">{{$gros + $demi + $king }}+</h2>
                    <p style="text-align: center; color: rgb(255, 255, 255);">Point de Vente</p>
                </div>
            </div>
            <div class="col-sm-2">
                <div style="text-align: center">

                    <i class="fa-solid fa-handshake"></i>
                    <br>
                    <br>
                     <h2 style="text-align: center; font-weight: bold; font-size: 35px; color: rgb(255, 255, 255);">300+</h2>
                    <p style="text-align: center; color: rgb(255, 255, 255);">Partenaires</p>
                </div>
            </div>
              <div class="col-sm-2">
                <div style="text-align: center">

                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <br>
                    <br>
                     <h2 style="text-align: center; font-weight: bold; font-size: 35px; color: rgb(255, 255, 255);">110Mrd+</h2>
                    <p style="text-align: center; color: rgb(255, 255, 255);">Chiffres d'affaires</p>
                </div>
               
            </div>
            <div class="col-sm-2">
                <div style="text-align: center">

                    <i class="fa-solid fa-people-group"></i>
                    <br>
                    <br>
                     <h2 style="text-align: center; font-weight: bold; font-size: 35px; color: rgb(255, 255, 255);">2M+</h2>
                    <p style="text-align: center; color: rgb(255, 255, 255);">Employées</p>
                </div>
            </div>
            
           
        </div>
    </section>
    {{-- FIN DE LA SECTION 3 --}}
    <br>
    <br>
    {{-- DEBUT DE LA SECTION 4 --}}
    <section class="section_4 container">
        <div>
            <h1 style="text-align: center; font-weight: bold; font-size: 36px; color: rgb(255, 116, 2);">ACTUALITÉS</h1>
            <p style="text-align: center; font-size: 14px;">Découvrez les dernières nouvelles et mises à jour.</p>
            <br>
        </div>
        <div class="row">
            @foreach ($actualites as $item)
                <div class="col-md-4 accueilactu " style="padding-bottom: 20px;">
                    <div class="box-service" >
                        <img src="/storage/actualite/{{ basename($item->image) }}" class="img-fluid w-100" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title " style="text-align: center; font-weight: bold; font-size: 25px;">{{ $item->location }}</h5>
                            <br>
                            <p class="card-text">{{ $item->description }}</p>
                            <p style="text-align: center; color: rgb(233, 22, 22); font-size: 18px;"><small>Date de pub : {{ $item->created_at->format('d/m/Y') }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12 text-center">
                <a href="{{ route('listeactualite.store', $item->id) }}" class="btn btn-primary">Voir Plus</a>
            </div>
        </div>
    </section>
    {{-- FIN DE LA SECTION 4 --}}
        <br>
        <br>
    <section class="section_5">
            <h1 style="text-align: center; font-weight: bold; font-size: 36px; color: rgb(255, 116, 2);">CONTACTEZ-NOUS</h1>
            <p style="text-align: center; font-size: 14px;">Nous serions ravis de vous entendre.</p>
            <br>    
    </section>
    
@endsection
