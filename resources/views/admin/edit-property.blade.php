@extends('layouts.dashboard-admin')
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, bienvenue !</h4>
                    <span>Modifier Propriété</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Modifier Propriété</a></li>
                </ol>
            </div>
        </div>
        <form action="{{url('/dashboard-admin/properties/'.$property->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
         @csrf
            <div class="row d-flex justify-content-center">
                
                <div class="col-xl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Modifier Une Propriété</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Designation* :</label>
                                                <input type="text"  class="form-control input-default @error('designation') is-invalid @enderror" value=" {{$property->designation}} "name="designation" placeholder="designation" required>
                                                    @error('designation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Adresse* :</label>
                                                <input type="text"  class="form-control input-default @error('address') is-invalid @enderror" value=" {{$property->addresse}} " name="address"  placeholder="address" required >
                                                    @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                            </div>
                                    </div>
                                    
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Type* :</label>
                                            <input type="text"  class="form-control input-default @error('type') is-invalid @enderror" value=" {{$property->type}}  "name="type" required >
                                                @error('type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>objectif de financement* :</label>
                                            <input type="text"  class="form-control input-default @error('obj_financement') is-invalid @enderror" value=" {{$property->obj_financement}}  "name="obj_financement" required >
                                                @error('obj_financement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Valorisation* :</label>
                                            <input type="text"  class="form-control input-default @error('valuation') is-invalid @enderror" value="{{$property->valuation}} " name="valuation"  placeholder="0" required >
                                                @error('valuation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Rentabilité* :</label>
                                            <input type="text"  class="form-control input-default @error('profitability') is-invalid @enderror" value="{{$property->profitability}} " name="profitability"  placeholder="0%" required >
                                                @error('profitability')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Objectif de revenus reversés* :</label>
                                            <input type="text"  class="form-control input-default @error('obj_revenu') is-invalid @enderror" value="{{$property->obj_revenu}} " name="obj_revenu"  placeholder="0%" required >
                                                @error('obj_revenu')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Max ethix* :</label>
                                            <input type="text"  class="form-control input-default @error('max_ethix') is-invalid @enderror" value="{{$property->max_ethix}} " name="max_ethix"   required >
                                                @error('max_ethix')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Métrage* :</label>
                                            <input type="text"  class="form-control input-default @error('footage') is-invalid @enderror" value="{{$property->footage}} " name="footage"  required >
                                                @error('footage')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nombre de chambre(optionnel) :</label>
                                            <input type="text"  class="form-control input-default @error('nbr_bedroom') is-invalid @enderror" value="{{$property->nbr_bedroom}} " name="nbr_bedroom"   >
                                                @error('nbr_bedroom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nombre de salle de bain(optionnel) :</label>
                                            <input type="text"  class="form-control input-default @error('nbr_bathroom') is-invalid @enderror" value="{{$property->nbr_bathroom}} " name="nbr_bathroom"   required >
                                                @error('nbr_bathroom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Photos * : </h4>
                            </div>
                            <div class="card-body">
                                    <div class="basic-form custom_file_input">
                                            <div class="input-group mb-3">
                                                    <input type="file"  name="photos[]" accept="image/*" multiple >
                                            </div>
                                    </div>
                                    @foreach ($property->images as $image)
                                    <img src="{{asset('storage/images/properties/'.$image->link)}}" width="243px " height="126px">
                                    @endforeach
                            </div>
                        </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Description * : </h4>
                        </div>
                        <div class="card-body">
                            <textarea class="summernote" class="form-control input-default @error('description') is-invalid @enderror"  name="description"  required>{{$property->description}}</textarea>
                            @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
            </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <button type="submit"  class="btn btn-primary mt-3" >Enregistrer </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
    </div>
</div>   
    
@endsection