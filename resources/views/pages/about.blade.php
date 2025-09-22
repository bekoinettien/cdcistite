@extends('layouts.head')
@section('content')
<!-- 🔹 Loader -->
    <div id="loader">
        <div class="spinner"></div>
    </div>
    {{-- DEBUT DE LA SECTION 1 --}}
    <section class="section1">
        {{-- <div id="carouselExample" class="carousel slide" data-bs-ride="carousel"> --}}
        <div class="carousel-inner">
        @foreach ($about as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="/storage/about/{{ basename($item->image) }}" 
                     class="d-block w-100 imageprincipaleabout" 
                     alt="{{ $item->title }}">
                <div class="text-about">
                    <h2 class="animated-text-about">{{ $item->title }}</h2>
                    <p class="animated-text-about">{{ $item->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Boutons précédent et suivant -->
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button> --}}
    {{-- </div> --}}

    </section>
    {{-- FIN DE LA SECTION 1 --}}
        <br>
        <br>
        

    {{-- DEBUT DE LA SECTION 2 --}}
    @foreach($aboutsections as $index => $section)
    <section class="section{{ $index+2 }}">
        <div class="row container">
            
            {{-- Si c'est une section paire → image à gauche, sinon image à droite --}}
            @if($index % 2 == 0)
                <div class="col-sm-6 col-12 col-lg-6 col-md-6 ">
                    <img src="{{ asset('storage/'.$section->image) }}" 
                         alt="" 
                         class="img-fluid imagesection{{ $index+2 }}">
                </div>
                <div class="col-sm-6 col-12 col-lg-6 col-md-6 ">
                    <h1 class="titresection2">{{ $section->title }}</h1>
                    <p class="textsection2">{{ $section->description }}</p>
                </div>
            @else
                <div class="col-sm-6 col-12 col-lg-6 col-md-6 ">
                    <h1 class="titresection2" style="color: white">{{ $section->title }}</h1>
                    <p class="textsection2" style="color: white">{{ $section->description }}</p>
                </div>
                <div class="col-sm-6 col-12 col-lg-6 col-md-6 ">
                    <img src="{{ asset('storage/'.$section->image) }}" 
                         alt="" 
                         class="img-fluid imagesection{{ $index+2 }}">
                </div>
            @endif

        </div>
    </section>
    <br><br>
@endforeach

@endsection

