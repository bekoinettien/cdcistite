@extends('admin.layout.dashboard')
@section('content') 
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/logo1.png')}}" alt="" class="w-100" style="height: 380px; margin-top: 20px;">
        </div>
        <div class="col-sm-6">
                <h1>Modifier une Promotion</h1>
             <form action="{{ route('updatePromotion', $promotions->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{ $promotions->id }}" style="display: none">
        <div>
            <input type="text" name="id" class="form-control" value="{{$promotions->id}}" style="display: none">
        </div>
         <div class="mb-3">
            <label for="libelle" class="form-label">Image</label>
            <input type="file" class="form-control" id="libelle" name="image" accept="image/*" >
                    @if($promotions->image)
                            <div class="mt-2">
                                <p>Image actuelle :</p>
                                <img src="{{ asset('storage/' . $promotions->image) }}" alt="Image du service" style="max-width: 200px; max-height: 200px;">
                            </div>
                    @endif
        </div>
         <div class="mb-3">
            <label for="name" class="form-label">Nom de la Promotion</label>
            <input type="text" class="form-control" id="name" name="title" value="{{ $promotions->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $promotions->description }}</textarea>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="discountend" class="form-label">Ancien Prix</label>
                    <input type="number" step="0.01" class="form-control" id="discountend" name="discountend" value="{{ $promotions->discountend }}" required >
                </div>
                <div class="col-md-6">
                    <label for="discountstart" class="form-label">Nouveau Prix</label>
                    <input type="number" step="0.01" class="form-control" id="discountstart" name="discountstart" value="{{ $promotions->discountstart }}" required >
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="start_date" class="form-label">Date du debut</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $promotions->start_date }}" required>
                </div>
                <div class="col-md-6">
                    <label for="end_date" class="form-label">Date de fin</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $promotions->end_date }}" required>
                </div>
            </div>
        </div>

        <div class="text-center">
           <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
        </div>
    </div>
    
</div>

    
@endsection