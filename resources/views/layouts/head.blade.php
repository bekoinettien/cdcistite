<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/magasin.css')}}">

    <!-- Leaflet CSS -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <title>CDCI</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: rgba(255, 255, 255, 0)">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Cdci" class="logo" style="height: 75px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active textmenu" aria-current="page" href="/">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link textmenu" href="/about">A Propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link textmenu" href="/listegros">GROS</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle textmenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 DETAILS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/listedemi">DEMI-GROS</a></li>
                <li><a class="dropdown-item" href="/listeking">KING-CASH</a></li>
              </ul>
            </li>
           
            <li class="nav-item">
             <a class="nav-link textmenu" href="listeactualite">ACTUALITÉS</a>
            </li>

            <li class="nav-item">
             <a class="nav-link textmenu" href="contacts">CONTACTS</a>
            </li>
      
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
          </form>
        </div>
     </div>
    </nav>
@yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>