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
    <a href="/listepromotions" class="btn btn-success mod" style="margin: 5px;">Ajouter une promotions</a></br>
    </div>
</section>

<section class="service_section layout_padding">
    <div class="container">
      <div class="titre">
        <h2> Nos site <span>Gros</span></h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Ancien Prix</th>
            <th>Nouveau Prix</th>
            <th>Date de création</th>
            <th>Date de fin</th>
            <th>Actions</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach($promotions as $index => $promotion)
          <tr>
            <td><img src="/storage/promotions/{{ basename($promotion->image) }}" style="max-width: 50px; height: 50px; padding-top:10px"></td>
            <td>{{ $promotion->title }}</td>
            <td>{{ $promotion->description }}</td>
            <td>{{ $promotion->discountend }}F</td>
            <td>{{ $promotion->discountstart }}F</td>
            <td>{{ $promotion->start_date }}</td>
            <td>{{ $promotion->end_date }}</td>
            <td>
              <a href="/promotion/edit/{{ $promotion->id }}" class="btn btn-success mod" style="margin-bottom: 5px;">MODIFIER</a></br>
              <a href="/promotion/delete/{{ $promotion->id }}" 
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
