@extends('layouts.head')
@section('content')

<section class="sectiongros1 ">
  <div>
    <img src="{{ asset('images/images11.jpeg') }}" alt="..." class="d-block w-100 imagegros">
    <div class="carousel-caption text1gros">
      <h2 class="animated-textgros">Bienvenue dans la section Des Actualités</h2>
      <p>Découvrez nos offres en gros adaptées à vos besoins.</p>
    </div>
  </div>
</section>
<br>
<br>
<section class="section-gros">
    <div class="container">
        <div class="titregros text-center">
            <h2> Nos <span>Actualités</span></h2>
        </div>
        <br>
        <div class="row">

            @foreach($actualites as $index => $actu)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box-service " style="padding: 5% ; margin-bottom: 20px;">
                    <div class="service-content text-center">
                        <!-- Image -->
                        <img src="/storage/actualite/{{ basename($actu->image) }}" class="img-image mb-3">

                        <!-- Localisation -->
                        <p class="details" style="text-align: center; font-weight: bold; font-size: 25px;">
                            <i class="fa-solid fa-location-dot me-2 icon-details"></i> {{ $actu->location }}
                        </p>

                        <!-- Description -->
                        <p class="details">
                            <i class="fa-solid fa-info-circle me-2 icon-details"></i> {{ $actu->description }}
                        </p>
                        <p>{{ $actu->created_at->format('d/m/Y') }}</p>

                        <!-- Horaire (ouvre modal) -->
                        {{-- <p class="details text-primary" 
                           style="cursor:pointer;"
                           data-bs-toggle="modal" 
                           data-bs-target="#horaireModal{{ $index }}">
                            <i class="fa-solid fa-clock me-2 icon-details"></i> Voir les horaires
                        </p> --}}
                    </div>
                </div>
            </div>

            <!-- Modal -->
            {{-- <div class="modal fade" id="horaireModal{{ $index }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Horaires - {{ $actu->location }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p><i class="fa-solid fa-clock me-2"></i> Ouverture : <b>{{ $actu->heure_ouverture ?? '08:00' }}</b></p>
                            <p><i class="fa-solid fa-clock me-2"></i> Fermeture : <b>{{ $actu->heure_fermeture ?? '18:00' }}</b></p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div> --}}
            @endforeach

        </div>
    </div>
</section>

<br>

@endsection