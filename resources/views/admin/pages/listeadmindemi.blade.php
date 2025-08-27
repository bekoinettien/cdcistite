@extends('admin.layout.dashboard')


@section('content')

<style>
    
    .secttion-1 .titre-service h1{
       align-items: center;
       margin-left: 20px
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    .btn-container {
        display: flex;
        justify-content: center; /* Center align the buttons */
    }
  </style>

<section class="secttion-1">
    <div class="btn-container">
    <a href="/demi" class="btn btn-success mod" style="margin: 5px;">Ajouter un demi gros</a></br>
    </div>
</section>

<section class="service_section layout_padding">
    <div class="container">
      <div class="titre">
        <h2> Nos sites <span>Demi Gros</span></h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Localisation</th>
            <th>Description</th>
            <th>Date de création</th>
            <th>Actions</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach($demi as $index => $dem)
          <tr>
            <td><img src="/storage/demi/{{ basename($dem->image) }}" style="max-width: 50px; height: 50px; padding-top:10px"></td>
            <td>{{ $dem->name }}</td>
            <td>{{ $dem->location }}</td>
            <td>{{ $dem->description }}</td>
            <td>{{ $dem->created_at }}</td>
            <td>
              <a href="/demi/edit/{{ $dem->id }}" class="btn btn-success mod" style="margin-bottom: 5px;">MODIFIER</a></br>
              <a href="/demi/delete/{{ $dem->id }}" 
                class="btn btn-danger" 
                onclick="return confirm('⚠️ Voulez-vous vraiment supprimer cet utilisateur ?');">
                SUPPRIMER
              </a>
            </td>
            
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
</section>

</body>
@endsection
