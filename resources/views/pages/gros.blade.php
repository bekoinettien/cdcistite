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

        @foreach($gros as $index => $gro)
        <div class="row box-service mb-4" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">

            <div class="col-sm-6 col-md-6 col-lg-4 " >
                <div  style="padding: 5% ; margin-bottom: 20px;">
                    <div>
                        <!-- Image -->
                        <img src="/storage/gros/{{ basename($gro->image) }}" class="img-image mb-3">    
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-8" style="background-color: rgba(153, 155, 155, 0.221)">
                    <p class="details">
                      <i class="fa-solid fa-store me-2 icon-details"></i> {{ $gro->name }}
                    </p>
                        <p class="details">
                            <i class="fa-solid fa-location-dot me-2 icon-details"></i> {{ $gro->location }}
                        </p>
                        <p class="details">
                            <i class="fa-solid fa-info-circle me-2 icon-details"></i> {{ $gro->description }}
                        </p>
            </div>  
        </div>
        @endforeach

        
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