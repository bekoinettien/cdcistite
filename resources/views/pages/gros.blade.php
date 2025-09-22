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
            <div class="col-sm-6 col-md-4 col-lg-4 " >
                 <div class="box-service" style="padding: 3% ; margin-bottom: 60px;">

                    <div>
                        <!-- Image -->
                        <img src="/storage/gros/{{ basename($gro->image) }}" class="img-image">    
                    </div>
                    <div class="infos-gros">
                        <!-- Name -->
                    <p class="details">
                      <i class="fa-solid fa-store me-2 icon-details"></i> {{ $gro->name }}
                    </p>
                        <p class="details">
                            <i class="fa-solid fa-location-dot me-2 icon-details"></i> {{ $gro->location }}
                        </p>
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

   <div id="map"></div>

  <script>
    // Initialiser la carte centrée sur Abidjan
    var map = L.map('map').setView([5.348, -4.027], 11);

    // Ajouter fond OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Icônes de différentes couleurs
    var redIcon = L.icon({
      iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
      shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
      iconSize: [25, 41],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41]
    });

    var greenIcon = L.icon({
      iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
      shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
      iconSize: [25, 41],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41]
    });

    var orangeIcon = L.icon({
      iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png',
      shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
      iconSize: [25, 41],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41]
    });

    // Communes d'Abidjan avec coordonnées et couleur attribuée
    var communes = [
      { name: "Yopougon", lat: 5.339, lng: -4.082, icon: redIcon },
      { name: "Cocody", lat: 5.354, lng: -3.981, icon: greenIcon },
      { name: "Treichville", lat: 5.302, lng: -4.012, icon: orangeIcon },
      { name: "Marcory", lat: 5.311, lng: -3.979, icon: redIcon },
      { name: "Adjame", lat: 5.359, lng: -4.031, icon: greenIcon },
      { name: "Plateau", lat: 5.322, lng: -4.020, icon: orangeIcon },
      { name: "Koumassi", lat: 5.289, lng: -3.971, icon: redIcon },
      { name: "Port-Bouët", lat: 5.278, lng: -3.944, icon: greenIcon },
      { name: "Abobo", lat: 5.418, lng: -4.033, icon: orangeIcon }
    ];

    // Ajouter les marqueurs pour chaque commune
    var markers = communes.map(function(commune) {
      return L.marker([commune.lat, commune.lng], { icon: commune.icon })
              .addTo(map)
              .bindPopup("<b>" + commune.name + "</b>");
    });

    // Ajuster la carte pour voir toutes les communes
    var group = L.featureGroup(markers);
    map.fitBounds(group.getBounds());
  </script>

</section>
@endsection