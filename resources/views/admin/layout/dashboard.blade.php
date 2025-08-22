<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div >
        <h1>Dashboard</h1>
        <p>Welcome to the admin dashboard!</p>
    </div>
    <div class="row container-fluid">
        <div class="col-md-3 " style="background-color: brown">
            <a href="{{ route('gros.store') }}">Gros</a>
            <a href="{{ route('demi.store') }}">Demi</a>
            <a href="{{ route('king.store') }}">King</a>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <h1 style="background-color: blue">Nombres de site gros</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad delectus aliquid commodi corrupti fugit. Enim vel nihil provident at quis repudiandae fugit, amet explicabo repellendus fugiat quas velit animi!</p>
                </div>
                <div class="col-md-3">
                    <h1 style="background-color: rgb(255, 68, 0)">Nombres de site demi</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad delectus aliquid commodi corrupti fugit. Enim vel nihil provident at quis repudiandae fugit, amet explicabo repellendus fugiat quas velit animi!</p>        
                </div>
                <div class="col-md-3">
                    <h1 style="background-color: rgb(68, 255, 0)">Nombres de site king</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad delectus aliquid commodi corrupti fugit. Enim vel nihil provident at quis repudiandae fugit, amet explicabo repellendus fugiat quas velit animi!</p>
                </div>
                <div class="col-md-3">
                    <h1 style="background-color: rgb(238, 255, 0)">Liste des actualites</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad delectus aliquid commodi corrupti fugit. Enim vel nihil provident at quis repudiandae fugit, amet explicabo repellendus fugiat quas velit animi!</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>