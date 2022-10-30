@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, Bienvenue!</h4>
                    <span>Versments</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Versments</a></li>
                </ol>
            </div>
        </div>
     

       
        <!-- row -->
        <div class="row ">


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">La table des versements</h4>
                        <button  type="button" class="btn btn-primary mt-3 add-versment" >Ajouter</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Type</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($versments as $versment)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$versment->user->first_name}}</td>
                                            <td>{{$versment->user->last_name}}</td>
                                            @if($versment->type == 1)
                                            <td>Entrer</td>
                                            @else
                                            <td>Sortie</td>
                                            @endif
                                            <td>{{$versment->montant}}</td>
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
<div id="modal-add-versment">

</div>

@endsection
@push('modal-add-versment-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(".add-versment").on('click',function() {
 
  $.ajax({
    url: '/dashboard-admin/add-versment',
    type: "GET",
    success: function (res) {
        
      $('#modal-add-versment').html(res);
      $('#modal-add-versment').find("#user").selectpicker();
      $('#modal-add-versment').find("#type").selectpicker();
      $("#exampleModal").modal('show');
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

  $("#modal-add-versment").on('click','#storeVersment',function(e){
        e.preventDefault();
        let user = $('#user').val();
        let type = $('#type').val();
        let montant = $('#montant').val();
        $.ajax({
          type:"Post",  
          url: '/dashboard-admin/versments',
          data:{
            "_token": "{{ csrf_token() }}",
            user:user,
            type:type,
            montant:montant
           
          },
          success:function(response){
            
            $('#exampleModal').modal('hide'); 
            $('#modal-add-versment').find('#successMsg').show();
            console.log(response);
            location.reload(); 
          },
        
          });
       
   });
</script>   
 @endpush

