@extends('admin.layout.dashboard')
@section('content') 
<section>
        <div class="row container-fluid">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 col-lg-6 col-12" style="background-color:rgb(26, 22, 134); padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 20px;">
                    <h1 style="color: white; font-size: 24px;">Modification d'utilisateur</h1>
                    <form action="{{ route('updateUser', $user->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}" style="display: none">
                        <div>
                            <input type="text" name="id" class="form-control" value="{{$user->id}}" style="display: none">
                        </div>
                            <div class="mb-3">
                            <label for="name" class="form-label" style="color: white; font-size: 20px;">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="fonction" class="form-label" style="color: white; font-size: 20px;">Fonction</label>
                            <input type="text" class="form-control" id="fonction" name="fonction" value="{{ $user->fonction }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="role" class="form-label" style="color: white; font-size: 20px;">Rôle</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ $user->role }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: white; font-size: 20px;">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: white; font-size: 20px;">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </form>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </section>
@endsection