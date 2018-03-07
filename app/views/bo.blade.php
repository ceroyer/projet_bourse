@extends( 'layout' )
@section('title')
Espace administrateur
@endsection
@section('content')
@section('additional_css')
  <link rel="stylesheet" type="text/css" href="{{ url( '/assets/css/admin.css' ) }}">
  <!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
@endsection
<section class="gestion">
  <h2>Les administrateurs</h2>
  <div id="recherche">
    <input type="texte" placeholder="Rechercher un utilisateur" class="form-label">
    <button>Rechercher</button>
  </div>
    <table class="table">
      <thead>
        <tr>
          <th>Pseudo</th>
          <th>Email</th>
          <th>Supprimer</th>
          <th>Dégrader</th>
      </thead>
      <tbody>
      @foreach ($users as $user)
        @if ($user['role'] === "admin")
        <tr>
            <td>{{ $user['pseudo'] }}</td>
            <td>{{ $user['email'] }}</td>
          <form action="{{url('/bo/delete')}}" method="POST">
            <input type="text" name="id" value="{{ $user['id'] }}" hidden>
            <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
          </form>
          @if($_SESSION['id']!=$user['id'])
          <form action="{{url('/bo/downgrade')}}" method="POST">
            <input type="text" name="id" value="{{ $user['id'] }}" hidden>
            <td><button class="btn btn-secondary" type="submit"><i class="fa fa-angle-double-down"></i>
            </button></td>
          </form>
          @endif
              <td></td>
        </tr>
        @endif
      @endforeach
      </tbody>
    </table>

      <h2>Les utilisateurs</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Supprimer</th>
            <th>Promouvoir</th>
            <th>Mode Vacances</th>
        </thead>
        <tbody>
        @foreach ($users as $user)

          @if ($user['role'] === "user")

          <tr>
              <td>{{ $user['pseudo'] }}</td>
              <td>{{ $user['email'] }}</td>
            <form action="{{url('/bo/delete')}}" method="POST">
              <input type="text" name="id" value="{{ $user['id'] }}" hidden>
              <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
            </form>

            <form action="{{url('/bo/upgrade')}}" method="POST">
            <input type="text" name="id" value="{{ $user['id'] }}" hidden>
            <td><button type="submit" class="btn btn-primary"><i class="fa fa-diamond" aria-hidden="true"></i></button></td>
            </form>

            @if($user['active']==0)<!-- Si l'utilisateur est activé affichage du mode vacances  -->
            <form action="{{url('/bo/deactivaded')}}" method="POST">
              <input type="text" name="id" value="{{ $user['id'] }}" hidden>
              <td><button type="submit" class="btn btn-danger"><i class="fa fa-plane"></i>
              </button></td>
            </form>
            @else
            <form action="{{url('/bo/reactivaded')}}" method="POST">
              <input type="text" name="id" value="{{ $user['id'] }}" hidden>
              <td><button type="submit" class="btn btn-success"><i class="fa fa-coffee"></i>
              </button></td>
            </form>
            @endif
          </tr>
          @endif
        @endforeach
        </tbody>
      </table>
  </section>
@endsection
