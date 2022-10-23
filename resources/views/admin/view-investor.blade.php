@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, bienvenue !</h4>
                    <span>Ajouter Propriété</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajouter Propriété</a></li>
                </ol>
            </div>
        </div>
        <form action="{{url('/dashboard-admin/users/'.$user->user->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
         @csrf
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-col-3">
                                <h5>Pays de résidence : <b style="color: #4DAA7F;"> {{$user->country_of_residence}}</b></h5>
                            </div>
                            <div class="form-col-3">
                                <h5>Adresse : <b style="color: #4DAA7F;"> {{$user->address}}</b></h5>
                            </div>
                            <div class="form-col-3">
                                <h5>Numéro de département : <b style="color: #4DAA7F;"> {{$user->num_department}}</b></h5>
                            </div>
                            <div class="form-col-3">
                                <h5>Code Postal : <b style="color: #4DAA7F;"> {{$user->code_postal}}</b></h5>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-col-3">
                                <h5>Pays de naissance : <b style="color: #4DAA7F;"> {{$user->country_of_birth}}</b></h5>
                            </div>
                            <div class="form-col-3">
                                <h5>Ville de naissance : <b style="color: #4DAA7F;"> {{$user->cite_of_birth}}</b></h5>
                            </div>
                            <div class="form-col-3">
                                <h5>Date de naissance : <b style="color: #4DAA7F;"> {{$user->date_of_birth}}</b></h5>
                            </div>
                            <div class="form-col-3">
                                <h5>Genre : <b style="color: #4DAA7F;"> {{$user->genre}}</b></h5>
                            </div>
                        </div>
                        <div class="form-row">
                            @foreach($documents as $document)
                            <div class="form-col-4">
                            <a href="{{url('downolad-file/'.$document->link)}}"> <i class="fa-solid fa-file-pdf"></i></a>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4 mt-3">
                            <label>Statut :</label>
                                <select  class="form-control " name="status"  class="selectpicker " data-live-search="true">
                                    <option value="0" @if($user->user->status == 0) selected @endif >Nouveau</option>
                                    <option value="1" @if($user->user->status == 1) selected @endif>Email Validé</option>
                                    <option value="2" @if($user->user->status == 2) selected @endif>Documents Envoyés</option>
                                    <option value="3" @if($user->user->status == 3) selected @endif>En Attente de Validation</option>
                                    <option value="4" @if($user->user->status == 4) selected @endif>Validé</option>
                                    <option value="5" @if($user->user->status == 5) selected @endif>Bloqué</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection