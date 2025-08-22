@extends('layouts.head')
@section('content')

<section class="sectiongros1 ">
  <div>
    <img src="{{ asset('images/images4.jpeg') }}" alt="..." class="d-block w-100 imagegros">
    <div class="carousel-caption text1gros">
      <h2 class="animated-textgros">Bienvenue dans la section Gros</h2>
      <p>Découvrez nos offres en gros adaptées à vos besoins.</p>
    </div>
  </div>
</section>
<br>
<br>
<section class="section-gros">
    <div class="container">
        <div class="titregros text-center">
            <h2> Nos Site <span>Gros</span></h2>
        </div>
        <br>
        <div class="row">

            @foreach($gros as $index => $gro)
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="box-service">
                    <div class="service-content text-center">
                        <!-- Image -->
                        <img src="/storage/gros/{{ basename($gro->image) }}" class="img-image mb-3">

                        <!-- Name -->
                        <p class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-store me-2"></i> {{ $gro->name }}
                        </p>

                        <!-- Localisation -->
                        <p class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-location-dot me-2"></i> {{ $gro->location }}
                        </p>

                        

                        <!-- Horaire (ouvre modal) -->
                        <p class="d-flex align-items-center justify-content-center text-primary" 
                           style="cursor:pointer;"
                           data-bs-toggle="modal" 
                           data-bs-target="#horaireModal{{ $index }}">
                            <i class="fa-solid fa-clock me-2"></i> Voir les horaires
                        </p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="horaireModal{{ $index }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Horaires - {{ $gro->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p><i class="fa-solid fa-clock me-2"></i> Ouverture : <b>{{ $gro->heure_ouverture ?? '08:00' }}</b></p>
                            <p><i class="fa-solid fa-clock me-2"></i> Fermeture : <b>{{ $gro->heure_fermeture ?? '18:00' }}</b></p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<br>
<br>
<br>

<section class="map-section container-fluid">
  <div class="text-center">
    <h2>Carte des communes d’Abidjan</h2>
    <div id="map" style="height: 500px; width: 100%;"></div>
  </div>

<script>
    // Initialiser la carte centrée sur Abidjan
    var map = L.map('map').setView([5.348, -4.027], 11);

    // Ajouter fond OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Communes d'Abidjan avec coordonnées approximatives
    var communes = [
        { name: "Yopougon", lat: 5.339, lng: -4.082 },
        { name: "Cocody", lat: 5.354, lng: -3.981 },
        { name: "Treichville", lat: 5.302, lng: -4.012 },
        { name: "Marcory", lat: 5.311, lng: -3.979 },
        { name: "Adjame", lat: 5.359, lng: -4.031 },
        { name: "Plateau", lat: 5.322, lng: -4.020 },
        { name: "Koumassi", lat: 5.289, lng: -3.971 },
        { name: "Port-Bouët", lat: 5.278, lng: -3.944 },
        { name: "Abobo", lat: 5.418, lng: -4.033 }
    ];

    // Ajouter les marqueurs pour chaque commune
    communes.forEach(function(commune) {
        L.marker([commune.lat, commune.lng])
            .addTo(map)
            .bindPopup("<b>" + commune.name + "</b>");
    });

    // Ajuster la carte pour voir toutes les communes
    var group = L.featureGroup(communes.map(c => L.marker([c.lat, c.lng])));
    map.fitBounds(group.getBounds());
</script>

</section>
@endsection