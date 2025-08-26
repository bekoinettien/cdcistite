@extends('admin.layout.dashboard')
@section('content') 
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/images1.jpeg')}}" alt="" class="w-100" style="height: 380px; margin-top: 20px;">
        </div>
        <div class="col-sm-6">
                <h1>Modifier un Gros</h1>
             <form action="{{ route('updateGros', $gros->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{ $gros->id }}" style="display: none">
        <div>
            <input type="text" name="id" class="form-control" value="{{$gros->id}}" style="display: none">
        </div>
         <div class="mb-3">
            <label for="libelle" class="form-label">Image</label>
            <input type="file" class="form-control" id="libelle" name="image" accept="image/*" >
                    @if($gros->image)
                            <div class="mt-2">
                                <p>Image actuelle :</p>
                                <img src="{{ asset('storage/' . $gros->image) }}" alt="Image du service" style="max-width: 200px; max-height: 200px;">
                            </div>
                        @endif
        </div>
         <div class="mb-3">
            <label for="name" class="form-label">Nom du Gros</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $gros->name }}" required>
        </div>
         <div class="mb-3">
            <label for="location" class="form-label">Emplacement du Gros</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $gros->location }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $gros->description }}</textarea>
        </div>
        <div class="text-center">
           <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
        </div>
    </div>
    
</div>

    
@endsection