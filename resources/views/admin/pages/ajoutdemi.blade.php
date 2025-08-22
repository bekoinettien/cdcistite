@extends('layouts.head')
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/images10.jpeg')}}" alt="" class="w-100 h-100">
        </div>
        <div class="col-sm-6">
             <h1>Ajouter un Demi-Gros</h1>
    <form action="{{ route('create.Demi') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
         <div class="mb-3">
            <label for="libelle" class="form-label">Image</label>
            <input type="file" class="form-control" id="libelle" name="image" accept="image/*" >
        </div>
         <div class="mb-3">
            <label for="name" class="form-label">Nom du Gros</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
         <div class="mb-3">
            <label for="location" class="form-label">Emplacement du Gros</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
        </div>

    </div>
   
</div>

    
@endsection