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
                            <p class="grid-list-contents-para"> Trouvez ici tous vos engagements :   </p>
                        </div>
                    </div>
                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                    <th>Photo</th>
                                    <th>Propriété</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                    </tr>
                                    @foreach($engagements as $engagement)
                                    <tr  style="background-color:#ffff; margin-bottom:10px;">
                                        <th scope="row" style="width: 100px;"> <img src="{{asset('storage/images/properties/'.$engagement->property->images[0]->link)}}" height="50px;" width="50px;" alt="properties"></th>
                                        <td>
                                            <h5> <a href="{{asset('/app/detail-property/'.$engagement->property->id)}}"> {{$engagement->property->designation}} </a> </h5>
                                            <span style="color: #667085"> {{$engagement->property->addresse}}  </span>
                                        </td>
                                        <td>
                                            <h5>{{$engagement->montant}} €</h5>

                                        <td>
                                            <h6 class="mt-2">
                                            @if($engagement->status == 0)
                                            <span class="badge badge-warning">En Attente</span>
                                            @elseif($engagement->status == 1)
                                            <span class="badge " style="background-color: #4DAA7F">Validé</span>
                                            @else
                                            <span class="badge badge-danger">Annuler</span>
                                            @endif
                                            </h6>
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

