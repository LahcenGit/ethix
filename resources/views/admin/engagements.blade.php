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
                        <h4 class="card-title">La tables des engagements</h4>
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
                                            <td>
                                                <form action="{{url('dashboard-admin/engagements/'.$engagement->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                <div class="d-flex">
                                                    <a href="{{url('dashboard-admin/engagementprint/'.$engagement->id)}}" class="btn btn-warning shadow btn-xs sharp mr-1" ><i class="fas fa-file-pdf"></i></a>
                                                    <a href="{{url('dashboard-admin/engagements/'.$engagement->id.'/edit')}}" class="btn btn-primary shadow btn-xs sharp mr-1" ><i class="fa fa-pencil"></i></a>
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
@endsection
