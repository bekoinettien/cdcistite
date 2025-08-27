@extends('admin.layout.dashboard')
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/logo1.png')}}" alt="" class="w-100" style="height: 380px; margin-top: 20px;">
        </div>
        <div class="col-sm-6">
             <h1>Ajouter une Promotion</h1>
    <form action="{{ route('create.Promotion') }}" method="POST" enctype="multipart/form-data">
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
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="discountend" class="form-label">Ancien Prix</label>
                    <input type="number" step="0.01" class="form-control" id="discountend" name="discountend" required >
                </div>
                <div class="col-md-6">
                    <label for="discountstart" class="form-label">Nouveau Prix</label>
                    <input type="number" step="0.01" class="form-control" id="discountstart" name="discountstart" required >
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="start_date" class="form-label">Date du debut</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                </div>
                <div class="col-md-6">
                    <label for="end_date" class="form-label">Date de fin</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" required>
                </div>
            </div>
        </div>
        <div class="text-center">
           <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
        </div>

    </div>
   
</div>

    
@endsection