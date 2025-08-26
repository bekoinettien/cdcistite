@extends('admin.layout.dashboard')
@section('content') 
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/images1.jpeg')}}" alt="" class="w-100" style="height: 380px; margin-top: 20px;">
        </div>
        <div class="col-sm-6">
                <h1>Ajouter Une image en Carrousel</h1>
    <form action="{{ route('Create.Accueil') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
         <div class="mb-3">
            <label for="libelle" class="form-label">Image</label>
            <input type="file" class="form-control" id="libelle" name="image" accept="image/*" >
        </div>
         <div class="mb-3">
            <label for="title" class="form-label">Nom Image</label>
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