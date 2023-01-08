@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, Bienvenue!</h4>
                    <span>Virements</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Virements</a></li>
                </ol>
            </div>
        </div>



        <!-- row -->
        <div class="row ">


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">La table des virements</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Montant</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($virments as $virment)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$virment->user->first_name}}</td>
                                            <td>{{$virment->user->last_name}}</td>
                                            <td>{{$virment->user->email}}</td>
                                            <td>{{$virment->user->phone}}</td>
                                            <td>{{$virment->amount}} €</td>
                                            @if($virment->status == 0)
                                            <td><span class="badge badge-warning">En attente</span></td>
                                            @else
                                            <td><span class="badge badge-success">Traité</span></td>
                                            @endif

                                            <td>
                                                <div class="d-flex">
                                                <a target="_blank" href="{{asset('storage/images/'.$virment->received)}}" type="button" class="btn btn-success shadow btn-xs sharp mr-1 r"><i class="fa fa-eye"></i></a>
                                                <button class="btn btn-warning shadow btn-xs sharp edit-compte" id = {{ $virment->user->id }} data-id ={{ $virment->id }}><i class="fa fa-pen"></i></button>
                                                </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</div>
</div>
<div id="modal-edit-compte">

</div>

@endsection
@push('modal-edit-compte-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$("body").on('click','.edit-compte',function() {

    var id_user = $(this).attr('id');
    var id_virment = $(this).attr('data-id');
  $.ajax({
    url: '/dashboard-admin/edit-compte/'+id_user+'/'+id_virment,
    type: "GET",
    success: function (res) {

      $('#modal-edit-compte').html(res);
      $('#modal-edit-compte').find("#status").selectpicker();
      $("#modal-edit").modal('show');
    }
  });

});
</script>
@endpush
@push('form-store-versment-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });

  $("#modal-edit-compte").on('click','#editCompte',function(e){
        e.preventDefault();
        let investor = $('#investor').val();
        let status = $('#status').val();
        let amount = $('#amount').val();
        let virment = $('#virment').val();
        $.ajax({
          type:"Post",
          url: '/dashboard-admin/virments',
          data:{
            "_token": "{{ csrf_token() }}",
            investor:investor,
            status:status,
            amount:amount,
            virment:virment,
          },
          success:function(response){
            $('#modat-edit').modal('hide');
            $('#modal-edit-compte').find('#successMsg').show();
            console.log(response);
            location.reload();
          },

          });

   });
</script>
 @endpush

