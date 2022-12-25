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
                    <span>Ajouter Article</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajouter Article</a></li>
                </ol>
            </div>
        </div>
        <form action="{{url('/dashboard-admin/blogs')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <div class="row d-flex ">
                
                <div class="col-xl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajouter Un Article</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Titre* :</label>
                                        <input type="text"  class="form-control input-default @error('title') is-invalid @enderror" value=" {{old('title')}} "name="title" placeholder="designation" required>
                                            @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Tags* :</label>
                                        <input type="text"  class="form-control input-default @error('tags') is-invalid @enderror" value=" {{old('tags')}} "name="tags" required >
                                            @error('tags')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="row">
									<div class="col">
										<div class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="is_brouillon" id="customCheckBox1" value="1">
											<label class="custom-control-label" for="customCheckBox1">Brouillon ?</label>
										</div>
									</div>
                                </div>
                            </div>
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
                            <textarea class="summernote" class="form-control input-default @error('description') is-invalid @enderror"  name="description"  required>{{old('description')}}</textarea>
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
                            <button type="submit"  class="btn btn-primary mt-3" >Ajouter </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
    </div>
</div>   
    
@endsection