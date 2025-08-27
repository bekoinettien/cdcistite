@extends('layouts.head')
@section('content')
    <section>
        <div class="row container-fluid">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 col-lg-6 col-12" style="background-color:coral; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 20px;">
                <h1 style="color: white; font-size: 24px;">Connexion</h1>
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                        
                    @endif
                <form action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </section>
@endsection