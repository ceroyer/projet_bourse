@extends( 'layoutheaderfooter' )
@section('title')
Espace administrateur
@endsection
@section('additional_css')
  <link rel="stylesheet" type="text/css" href="{{ url( '/assets/css/bo.css' ) }}">
  <style type="text/css">*{color: black; } .modal-header,.modal-body>p{color:black;}</style>
  <!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
@endsection
@section('content')
<div id="recherche">
  <input type="texte" placeholder="Rechercher un utilisateur" class="form-label">
  <button>Rechercher</button>
</div>
<h2>Les administrateurs</h2>
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
                  <input type="text" class="userIDSuppr" name="id" value="{{ $user['id'] }}" hidden>
                  <td><button class="btn btn-secondary suppr" type="button" data-toggle="modal" data-target="#myModal" data-pseudo="{{ $user['pseudo'] }}" data-id="{{ $user['id'] }}"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>

                  <div id="myModal" class="modal fade">

                    <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Confirmation</h4>
                          </div>

                          <div class="modal-body">
                              <p>Voulez vous vraiment supprimer <span class="userIDSuppr"></span> </p>
                               <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                         </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                              <button type="submit" class="btn btn-primary">Supprimer</button>
                          </div>
                      </div>
                  </div>
                  </div>
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
@endsection

@section('additional_js')

<script type="text/javascript">
$('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var pseudo = button.data('pseudo');
  var id = button.data('id');
  var modal = $(this);
  $(".userIDSuppr").html(pseudo);
  $(".userIDSuppr").val(id);
});

</script>

@endsection
