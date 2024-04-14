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

                <div class="col-xl-12 col-lg-12">
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
                                    <div class="form-group col-md-4">
                                        <label>Valeur d'ethix* :</label>
                                        <input type="text"  class="form-control input-default @error('ethix_value') is-invalid @enderror" value=" {{$property->ethix_value}}" name="ethix_value" id="ethix_value" required >
                                            @error('ethix_value')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Type* :</label>
                                        <input type="text"  class="form-control input-default @error('type') is-invalid @enderror" value=" {{$property->type}}  "name="type" required >
                                            @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Revenus net estimés:</label>
                                        <input type="text"  class="form-control input-default @error('profitability') is-invalid @enderror" value="{{$property->profitability}}" name="profitability"  placeholder="0%" required >
                                            @error('profitability')
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
                            <h4 class="card-title">Acquisition</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Prix d’acquisition* :</label>
                                        <input type="text"  class="form-control input-default @error('acquisition_price') is-invalid @enderror" value="{{$property->acquisition_price}}"name="acquisition_price" id="acquisition_price" required >
                                            @error('acquisition_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Rémunération Ethix* :</label>
                                        <input type="text"  class="form-control input-default @error('remuneration_ethix') is-invalid @enderror" value="{{$property->remuneration_ethix}}" name="remuneration_ethix" id="remuneration_ethix" required >
                                            @error('remuneration_ethix')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Frais de notaire* :</label>
                                        <input type="text"  class="form-control input-default @error('notary_fees') is-invalid @enderror" value="{{$property->notary_fees}}" name="notary_fees" id="notary_fees" required >
                                            @error('notary_fees')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Réserve administrative* :</label>
                                        <input type="text"  class="form-control input-default @error('money_reserve_acquisition') is-invalid @enderror" value="{{$property->money_reserve_acquisition}}" name="money_reserve_acquisition" id="money_reserve_acquisition" required >
                                            @error('money_reserve_acquisition')
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
                            <h4 class="card-title">Valorisation</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Objectif de financement* :</label>
                                        <input type="text"  class="form-control input-default @error('valorisation') is-invalid @enderror" value=" {{$property->obj_financement}} "name="valorisation" id="valorisation" required disabled>
                                        <input type="hidden" name="valorisation" id="valorisation-hidden" value="{{ $property->obj_financement }}" class="valorisation">
                                            @error('valorisation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Réserve Travaux * :</label>
                                        <input type="text"  class="form-control input-default @error('reserve') is-invalid @enderror" value=" {{$property->reserve}} "name="reserve" id="reserve" required >
                                            @error('reserve')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Nombre d'ethix* :</label>
                                        <input type="text"  class="form-control input-default @error('nbr_ethix') is-invalid @enderror" value=" {{$property->nbr_ethix}} "name="nbr_ethix" id="nbr-ethix" required disabled>
                                        <input type="hidden" name="nbr_ethix" value="{{ $property->nbr_ethix }}" id="nbr-ethix-hidden">
                                            @error('nbr_ethix')
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
                            <h4 class="card-title">Rendement locatif cible</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Loyers collectés* :</label>
                                        <input type="text"  class="form-control input-default @error('rent_collected') is-invalid @enderror" value="{{$property->rent_collected}}" name="rent_collected" required >
                                            @error('rent_collected')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Charges* :</label>
                                        <input type="text"  class="form-control input-default @error('charge') is-invalid @enderror" value="{{$property->charge}}" name="charge" required >
                                            @error('charge')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Taxe foncière* :</label>
                                        <input type="text"  class="form-control input-default @error('property_tax') is-invalid @enderror" value="{{$property->property_tax}}" name="property_tax" required>
                                            @error('property_tax')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Réserve Entretien* :</label>
                                        <input type="text"  class="form-control input-default @error('money_reserve_rendement') is-invalid @enderror" value="{{$property->money_reserve_rendement}}" name="money_reserve_rendement" required >
                                            @error('money_reserve_rendement')
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
                <div class="col-xl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Stratégie d’investissement * : </h4>
                        </div>
                        <div class="card-body">
                            <textarea class="summernote" class="form-control input-default @error('stratégie_investissement') is-invalid @enderror"  name="stratégie_investissement"  required>{{$property->stratégie_investissement}}</textarea>
                            @error('stratégie_investissement')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Diagnostic Technique * : </h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>DPE valeur * :</label>
                                        <input type="text"  class="form-control input-default @error('dpe_value') is-invalid @enderror" value="{{ $property->dpe_value }}" name="dpe_value" placeholder="DPE valeur" required >
                                            @error('dpe_value')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Select:</label>
                                        <select class="form-control" id="sel1"  name="diagnostic">
                                            <option value="A" @if($property->diagnostic == "A") selecetd @endif>A</option>
                                            <option value="B" @if($property->diagnostic == "B") selecetd @endif>B</option>
                                            <option value="C" @if($property->diagnostic == "C") selecetd @endif>C</option>
                                            <option value="D" @if($property->diagnostic == "D") selecetd @endif>D</option>
                                            <option value="E" @if($property->diagnostic == "E") selecetd @endif>E</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
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
@push('obj-financement-script')
<script>
    $(document).ready(function(){
        $('#acquisition_price, #remuneration_ethix, #notary_fees, #money_reserve_acquisition').on('input', function() {
            var valeur1 = parseFloat($('#acquisition_price').val()) || 0;
            var valeur2 = parseFloat($('#remuneration_ethix').val()) || 0;
            var valeur3 = parseFloat($('#notary_fees').val()) || 0;
            var valeur4 = parseFloat($('#money_reserve_acquisition').val()) || 0;
            var resultat = valeur1 + valeur2 + valeur3 + valeur4;
            $('#valorisation').val(resultat);
            $('#valorisation-hidden').val(resultat);
        });
        $('#valorisation , #reserve, #ethix_value').on('input', function() {
        var val1 = parseFloat($('#valorisation').val()) || 0;
        var val2 = parseFloat($('#reserve').val()) || 0;
        var val3 = parseFloat($('#ethix_value').val()) || 0;
        var resultat2;
        resultat2 = parseInt((val1 + val2) / val3);
        $('#nbr-ethix').val(resultat2);
        $('#nbr-ethix-hidden').val(resultat2);
    });
    });
</script>
@endpush
