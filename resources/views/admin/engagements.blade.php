@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, Bienvenue!</h4>
                    <span>Engagements</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Engagements</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Les engagements</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Propriété</th>
                                        <th>L'investisseur</th>
                                        <th>Montant</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($engagements as $engagement)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                            <td>{{$engagement->property->designation}}</td>
                                            <td>{{$engagement->user->first_name}} {{$engagement->user->last_name}}</td>
                                            <td>{{$engagement->montant}}</td>
                                            <td>{{$engagement->created_at}}</td>
                                            @if($engagement->status == 0)
                                            <td id="td-status-{{$engagement->id}}"><span class="badge badge-warning">En attente </span></td>
                                            @elseif($engagement->status == 1)
                                            <td id="td-status-{{$engagement->id}}"><span class="badge badge-success">Validé</span></td>
                                            @else
                                            <td id="td-status-{{$engagement->id}}"><span class="badge badge-danger">Annuler</span></td>
                                            @endif
                                            <td>
                                                <form action="{{url('dashboard-admin/engagements/'.$engagement->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                <div class="d-flex">
                                                    <a href="{{url('dashboard-admin/engagementprint/'.$engagement->id)}}" class="btn btn-warning shadow btn-xs sharp mr-1" ><i class="fas fa-file-pdf"></i></a>
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1 edit-status" data-id="{{ $engagement->id }}" ><i class="fa fa-pencil"></i></a>
                                                    <button class="  btn btn-danger shadow btn-xs sharp" onclick="return confirm('Vous voulez vraiment supprimer?')"><i class="fa fa-trash"></i></button>
                                                </div>
                                                </form>
                                            </td>
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
<div id="modal-edit-status-section"></div>
@endsection
@push('modal-edit-status-engagement-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$("body").on('click','.edit-status',function() {

  var id = $(this).attr("data-id");

  $.ajax({
    url: '/show-modal-edit-status-engagement/'+id,
    type: "GET",
    success: function (res) {

      $('#modal-edit-status-section').html(res);
      $('#modal-edit-status-section').find("#status").selectpicker();
      $("#modal-edit-status").modal('show');
    }
  });

});
</script>

<script>
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $("#modal-edit-status-section").on('click','#editStatus',function(e){
          e.preventDefault();
          let id = $('#engagement').val();
          let status = $('#status').val();
         $.ajax({
            type:"GET",
            url: '/update-status-engagement/'+id+'/'+status,
            success:function(response){
              $('#modal-edit-status').modal('hide');
              toastr.success("Statut modifié avec succès", "Succès", {
                      timeOut: 5e3,
                      closeButton: !0,
                      debug: !1,
                      newestOnTop: !0,
                      progressBar: !0,
                      positionClass: "toast-top-right",
                      preventDuplicates: !0,
                      onclick: null,
                      showDuration: "300",
                      hideDuration: "1000",
                      extendedTimeOut: "1000",
                      showEasing: "swing",
                      hideEasing: "linear",
                      showMethod: "fadeIn",
                      hideMethod: "fadeOut",
                      tapToDismiss: !1
            });
            if(status == 0){
              $("#td-status-"+id).html('<span class="badge badge-warning">'+'En Attente'+'</span>');
            }
             else if(status == 1){
              $("#td-status-"+id).html('<span class="badge badge-success">'+'Validé'+'</span>');
            }
            else{
                $("#td-status-"+id).html('<span class="badge badge-danger">'+'Annuler'+'</span>');
            }
            },

            });

     });
  </script>
@endpush
