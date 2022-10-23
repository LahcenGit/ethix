@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, Bienvenue!</h4>
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
                                    <td><span class="badge badge-primary">Nouveau</span></td>
                                    @elseif($user->status == 1)
                                    <td><span class="badge badge-info">Email Validé</span></td>
                                    @elseif($user->status == 2)
                                    <td><span class="badge badge-secondary">Documents envoyés</span></td>
                                    @elseif($user->status == 3)
                                    <td><span class="badge badge-warning">En attente de validation</span></td>
                                    @elseif($user->status == 4)
                                    <td><span class="badge badge-success">Validé</span></td>
                                    @else
                                    <td><span class="badge badge-danger">Bloqué</span></td>
                                    @endif
                                    <td>
                                        <form action="{{url('dashboard-admin/users/'.$user->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        <div class="d-flex">
                                        <a href="{{url('dashboard-admin/view-investor/'.$user->id)}}" type="button" class="btn btn-success shadow btn-xs sharp mr-1 edit-investor"><i class="fa fa-eye"></i></a>
                                        
                                        <button class="btn btn-danger shadow btn-xs sharp "onclick="return confirm('Vous voulez vraiment supprimer?')"><i class="fa fa-trash"></i></button>
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
<div id="modal-show-file">

</div>
@endsection
@push('modal-edit-investor-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$("body").on('click','.edit-investor',function() {
 
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
        $.ajax({
          type:"PUT",  
          url: '/dashboard-admin/users/'+id,
          data:{
            "_token": "{{ csrf_token() }}",
            status:status,
           
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

 @push('modal-show-file-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$("body").on('click','.show-file',function() {
 
  var id = $(this).attr("data-id");
 
  $.ajax({
    url: '/show-file/'+id,
    type: "GET",
    success: function (res) {
       
      $('#modal-show-file').html(res);
      $("#modalShow").modal('show');
    },
  });
  
});
</script>
@endpush