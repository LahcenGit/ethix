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
        <form action="{{url('/dashboard-admin/properties')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <div class="row d-flex justify-content-center">
               <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajouter Une Propriété</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Designation* :</label>
                                        <input type="text"  class="form-control input-default @error('designation') is-invalid @enderror" value=" {{old('designation')}} "name="designation" placeholder="designation" placeholder="designation" required>
                                            @error('designation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Adresse* :</label>
                                        <input type="text"  class="form-control input-default @error('address') is-invalid @enderror" value=" {{old('address')}}" name="address"  placeholder="address" placeholder="adresse" required >
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
                                        <input type="text"  class="form-control input-default @error('ethix_value') is-invalid @enderror" value=" {{old('ethix_value')}} "name="ethix_value" id="ethix_value" placeholder="valeur d'ethix" required >
                                            @error('ethix_value')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Type* :</label>
                                        <input type="text"  class="form-control input-default @error('type') is-invalid @enderror" value=" {{old('type')}} "name="type" placeholder="type" required >
                                            @error('type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Revenus net estimés:</label>
                                        <input type="text"  class="form-control input-default @error('profitability') is-invalid @enderror" value="{{old('profitability')}}" name="profitability"  placeholder="0%" required >
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
                                        <input type="number"  class="form-control input-default @error('footage') is-invalid @enderror" value="{{old('footage')}}" name="footage"  placeholder="0" required >
                                            @error('footage')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nombre de chambre(optionnel) :</label>
                                        <input type="number"  class="form-control input-default @error('nbr_bedroom') is-invalid @enderror" value="{{old('nbr_bedroom')}}" name="nbr_bedroom"  placeholder="0"  >
                                            @error('nbr_bedroom')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nombre de salle de bain(optionnel) :</label>
                                        <input type="number"  class="form-control input-default @error('nbr_bathroom') is-invalid @enderror" value="{{old('nbr_bathroom')}}" name="nbr_bathroom"  placeholder="0" required >
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
                                        <input type="text"  class="form-control input-default @error('acquisition_price') is-invalid @enderror" value=" {{old('acquisition_price')}}"name="acquisition_price" id="acquisition_price" placeholder="prix d’acquisition" required >
                                            @error('acquisition_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Rémunération Ethix* :</label>
                                        <input type="text"  class="form-control input-default @error('remuneration_ethix') is-invalid @enderror" value=" {{old('remuneration_ethix')}} "name="remuneration_ethix" id="remuneration_ethix" placeholder="rémunération ethix" required >
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
                                        <input type="text"  class="form-control input-default @error('notary_fees') is-invalid @enderror" value=" {{old('notary_fees')}} "name="notary_fees" id="notary_fees" placeholder="frais de notaire" required >
                                            @error('notary_fees')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Réserve administrative* :</label>
                                        <input type="text"  class="form-control input-default @error('money_reserve_acquisition') is-invalid @enderror" value=" {{old('money_reserve_acquisition')}} "name="money_reserve_acquisition" id="money_reserve_acquisition" placeholder="réserve administrative" required >
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
                                        <input type="text"  class="form-control input-default @error('valorisation') is-invalid @enderror" value=" {{old('valorisation')}} " id="valorisation" placeholder="objectif de financement" required disabled>
                                        <input type="hidden" name="valorisation" id="valorisation-hidden" class="valorisation">
                                            @error('valorisation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Réserve Travaux * :</label>
                                        <input type="text"  class="form-control input-default @error('reserve') is-invalid @enderror" value=" {{old('reserve')}} "name="reserve" id="reserve" placeholder="réserve Travaux" required >
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
                                        <input type="text"  class="form-control input-default @error('nbr_ethix') is-invalid @enderror" value=" {{old('nbr_ethix')}} " id="nbr-ethix" placeholder="nombre d'ethix" required disabled >
                                        <input type="hidden" name="nbr_ethix" id="nbr-ethix-hidden">
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
                                        <label>Loyers collectés /an * :</label>
                                        <input type="text"  class="form-control input-default @error('rent_collected') is-invalid @enderror" value=" {{old('rent_collected')}} "name="rent_collected" placeholder="loyers collectés /an" required >
                                            @error('rent_collected')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Charges* :</label>
                                        <input type="text"  class="form-control input-default @error('charge') is-invalid @enderror" value=" {{old('charge')}} "name="charge" placeholder="charge" required >
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
                                        <input type="text"  class="form-control input-default @error('property_tax') is-invalid @enderror" value=" {{old('property_tax')}} "name="property_tax" placeholder="taxe foncière" required >
                                            @error('property_tax')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Réserve Entretien* :</label>
                                        <input type="text"  class="form-control input-default @error('money_reserve_rendement') is-invalid @enderror" value=" {{old('money_reserve_rendement')}} "name="money_reserve_rendement" placeholder="réserve entretien" required >
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
                            <textarea class="summernote" class="form-control input-default @error('stratégie_investissement') is-invalid @enderror"  name="stratégie_investissement"  required>{{old('stratégie_investissement')}}</textarea>
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
                                        <input type="text"  class="form-control input-default @error('dpe_value') is-invalid @enderror" value=" {{old('dpe_value')}} "name="dpe_value" placeholder="DPE valeur" required >
                                            @error('dpe_value')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                    <div class="form-group  col-md-12">
                                        <label>Select:</label>
                                        <select class="form-control" id="sel1"  name="diagnostic">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
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
                            <textarea class="summernote" class="form-control input-default @error('description') is-invalid @enderror"  name="description"  required>{{old('description')}}</textarea>
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
                                        <input type="file"  name="photos[]" accept="image/*" multiple required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <button type="submit"  class="btn btn-primary mt-3" >Ajouter </button>
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
