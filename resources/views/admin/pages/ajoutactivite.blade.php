@extends('admin.layout.dashboard')
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/logo1.png')}}" alt="" class="w-100" style="height: 380px; margin-top: 20px;">
        </div>
        <div class="col-sm-6">
             <h1>Ajouter une Activité</h1>
    <form action="{{ route('create.Activites') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
         <div class="mb-3">
            <label for="libelle" class="form-label">Image</label>
            <input type="file" class="form-control" id="libelle" name="image" accept="image/*" >
        </div>
         <div class="mb-3">
            <label for="location" class="form-label">Titre </label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        
        <div class="text-center">
           <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
        </div>

    </div>
   
</div>

    
@endsection