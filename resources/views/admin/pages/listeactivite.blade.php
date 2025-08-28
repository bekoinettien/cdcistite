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
    <a href="/listeactivites" class="btn btn-success mod" style="margin: 5px;">Ajouter une activité</a></br>
    </div>
</section>

<section class="service_section layout_padding">
    <div class="container">
      <div class="titre">
        <h2> Nos  <span>Activités</span></h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Actions</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach($activites as $index => $activite)
          <tr>
            <td><img src="/storage/activites/{{ basename($activite->image) }}" style="max-width: 50px; height: 50px; padding-top:10px"></td>
            <td>{{ $activite->title }}</td>
            <td>{{ $activite->description }}</td>
            <td>
              <a href="/activites/edit/{{ $activite->id }}" class="btn btn-success mod" style="margin-bottom: 5px;">MODIFIER</a></br>
              <a href="/activites/delete/{{ $activite->id }}" 
                class="btn btn-danger" 
                onclick="return confirm('⚠️ Voulez-vous vraiment supprimer cette activité ?');">
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
</html>

      </table>
    </div>
</section>

</body>
@endsection
