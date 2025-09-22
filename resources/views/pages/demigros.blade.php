@extends('layouts.head')
@section('content')

<section class="sectiongros1 ">
  <div>
    <img src="{{ asset('images/images18.jpeg') }}" alt="..." class="d-block w-100 imagegros">
    <div class="carousel-caption text1gros">
      <h2 class="animated-textgros">Bienvenue dans la section Demi-Gros</h2>
      <p>Découvrez nos offres en gros adaptées à vos besoins.</p>
    </div>
  </div>
</section>
<br>
<br>
<section class="section-gros">
    <div class="container">
        <div class="titregros text-center">
            <h2> Nos Site <span>Demi-Gros</span></h2>
        </div>
        <br>
         
        <div class="row">
            @foreach($demi as $index => $dem)
            <div class="col-sm-6 col-md-4 col-lg-4 " >
                 <div class="box-service" style="padding: 3% ; margin-bottom: 60px;">
                    <div>
                        <!-- Image -->
                        <img src="/storage/demi/{{ basename($dem->image) }}" class="img-image mb-3">    
                    </div>
                    <p class="details">
                      <i class="fa-solid fa-store me-2 icon-details"></i> {{ $dem->name }}
                    </p>
                        <p class="details">
                            <i class="fa-solid fa-location-dot me-2 icon-details"></i> {{ $dem->location }}
                        </p>
                        {{-- <p class="details">
                            <i class="fa-solid fa-info-circle me-2 icon-details"></i> {{ $dem->description }}
                        </p> --}}
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</section>

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