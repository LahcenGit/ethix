@extends('layouts.front')
@section('content')


@include('flash-message')
@include('investor.header-investor')

<div class="body-overlay"></div>
    <div class="dashboard-area section-bg-2 dashboard-padding">
        <div class="container">
            <div class="shop-contents-wrapper mt-5">
               
                <div class="shop-grid-contents">

                    <div class="grid-list-contents">
                        <div class="grid-list-contents-flex">
                            <p class="grid-list-contents-para"> Trouvez ici tous vos investissements :   </p>
                            
                        </div>
                    </div>

                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($investissements as $investissement)
                                    <tr  style="background-color:#ffff; margin-bottom:10px;">
                                        <th scope="row" style="width: 100px;"> <img src="{{asset('storage/images/properties/'.$investissement->property->images[0]->link)}}" height="50px;" width="50px;" alt="properties"></th>
                                        <td>  
                                            <h5> <a href="#"> {{$investissement->property->designation}} </a> </h5> 
                                            <span style="color: #667085"> {{$investissement->property->addresse}}  </span>
                                        </td>
                                        <td>
                                            <h6 class="mt-2"> <span class="badge " style="background-color: #4DAA7F">{{$investissement->nbr_ethix}} Ethixs investis </span> </h6>
                                        </td>
                                        <td>
                                            <h6 class="mt-2 mb-1">{{$investissement->property->financing_percentage()}} % financé</h6>
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

@endsection