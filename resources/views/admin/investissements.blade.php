@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, Bienvenue!</h4>
                    <span>Investissements</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Investissements</a></li>
                </ol>
            </div>
        </div>
     

       
        <!-- row -->
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">La tables des investissments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Propriété</th>
                                        <th>L'investisseur</th>
                                        <th>Nombre d'éthix</th>
                                        <th>Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($investissements as $investissement)
                                        <tr >
                                        <td>{{$loop->iteration}}</td>
                                            <td>{{$investissement->property->designation}}</td>
                                            <td>{{$investissement->user->first_name}} {{$investissement->user->last_name}}</td>
                                            <td>{{$investissement->nbr_ethix}}</td>
                                            <td>{{$investissement->created_at}}</td>
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
