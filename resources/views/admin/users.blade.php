@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 style="color:#0b9e9a ;">Bonjour, Bienvenue!</h4>
                    <span>Investisseurs</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Investisseur</a></li>
                </ol>
            </div>
        </div>
     

       
        <!-- row -->
        <div class="row ">


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">La tables des investisseurs</h4>
                       
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Phone</th>
                                        <th>Solde</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                            @foreach($users as $user)
                                
                                <tr >
                                   
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->phone}}</td>
                                    @if(!$user->solde)
                                    <td>0</td>
                                    @else
                                    <td>{{$user->solde}}</td>
                                    @endif
                                    @if($user->status == 0)
                                    <td><span class="badge badge-warning">En Attente</span></td>
                                    @else
                                    <td><span class="badge badge-success">Validé</span></td>
                                    @endif
                                    <td>
                                        <form action="" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        <div class="d-flex">
                                        <button id="updateF" data-id="{{$user->id}}" type="button" class="btn btn-primary shadow btn-xs sharp mr-1 edit-investor"style="background-color:  #0b9e9a; border-color:#0b9e9a"><i class="fa fa-pencil"></i></a>
                                            <button class="  btn btn-danger shadow btn-xs sharp" onclick="return confirm('Vous voulez vraiment supprimer?')"><i class="fa fa-trash"></i></button>
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
<div id="modal-edit-investor">

</div>
@endsection
@push('modal-edit-investor-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(".edit-investor").on('click',function() {
 
  var id = $(this).attr("data-id");
 
  $.ajax({
    url: '/dashboard-admin/users/'+id+'/edit',
    type: "GET",
    success: function (res) {
        
      $('#modal-edit-investor').html(res);
      $('#modal-edit-investor').find("#status").selectpicker();
      $("#exampleModal").modal('show');
    }
  });
  
});
</script>
@endpush
@push('form-update-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });

  $("#modal-edit-investor").on('click','#updateF',function(e){
    
       var id = $(this).attr("data-id");
        e.preventDefault();
        let status = $('#status').val();
        let solde = $('#solde').val();
        $.ajax({
          type:"PUT",  
          url: '/dashboard-admin/users/'+id,
          data:{
            "_token": "{{ csrf_token() }}",
            status:status,
            solde:solde,
          },
          success:function(response){
            
            $('#exampleModal2').modal('hide'); 
            $('#modal-edit-investor').find('#successMsg').show();
            console.log(response);
            location.reload(); 
          },
        
          });
       
   });
</script>   
 @endpush