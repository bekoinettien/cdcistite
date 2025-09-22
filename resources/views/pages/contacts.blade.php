@extends('layouts.head')

@section('content')
<section>
    <div class="row container">
        <div class="col-md-6">
            <h2 style="color:darkblue; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 20px;">Contactez-Nous</h2>
            <p style="text-align: justify;">
                N'hésitez pas à nous contacter pour toute question, suggestion ou demande d'information. Nous sommes là pour vous aider et répondre à vos besoins. Votre satisfaction est notre priorité.
            </p>
            <p style="text-align: justify;">
                Vous pouvez remplir le formulaire de contact ci-contre, et nous vous répondrons dans les plus brefs délais. Merci de votre intérêt pour notre entreprise !
            </p>
            <p style="text-align: justify;">
                Adresse : 123 Rue Exemple, Ville, Pays<br>
                Téléphone : +123 456 7890<br>
                Email : contact@exemple.com
        </div>
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="exampleName" class="form-label" style="color:darkblue; font-weight: bold;">Nom *</label>
                    <input type="text" class="form-control" id="exampleName"  style="background-color: rgba(164, 160, 160, 0.195)" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputphone" class="form-label" style="color:darkblue; font-weight: bold;">Telephone *</label>
                    <input type="text" class="form-control" id="exampleInputphone"  style="background-color: rgba(164, 160, 160, 0.195)" required>
                </div>
                <div class="mb-3">
                    <label for="exampleEmail" class="form-label" style="color:darkblue; font-weight: bold;">Adresse Email *</label>
                    <input type="email" class="form-control" id="exampleEmail" aria-describedby="emailHelp"  style="background-color: rgba(164, 160, 160, 0.195)" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSubject" class="form-label" style="color:darkblue; font-weight: bold;">Object *</label>
                    <input type="text" class="form-control" id="exampleInputSubject"  style="background-color: rgba(164, 160, 160, 0.195)" required>
                </div>
               
                <div class="mb-3">
                    <label for="exampleInputMessage" class="form-label" style="color:darkblue; font-weight: bold;">Message *</label>
                    <textarea class="form-control" id="exampleInputMessage" rows="3" style="background-color: rgba(164, 160, 160, 0.195)" required></textarea>
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection