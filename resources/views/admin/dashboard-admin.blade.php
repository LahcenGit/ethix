@extends('layouts.dashboard-admin')
@section('content')
  <!--**********************************
            Content body start
        ***********************************-->

		<div class="temp-body">

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
							<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0 px-3 pt-2">
										<div class="row">
											<div class="col">
												<h5 class="mb-1">{{$nbr_properties}}</h5>
												<span class="text-success">Propriété(s)</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0 px-3 pt-2">
										<div class="row">
											<div class="col">
												<h5 class="mb-1">{{$nbr_investor}}</h5>
												<span class="text-success">Investisseur(s)</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0 px-3 pt-2">
										<div class="row">
											<div class="col">
												<h5 class="mb-1">{{$nbr_ethix}}</h5>
												<span class="text-success">Ethix investi(s) </span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0 px-3 pt-2">
										<div class="row">
											<div class="col">
												<h5 class="mb-1">{{$total->sum}} €</h5>
												<span class="text-success">Total montant investi</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						
							
							<div class="col-xl-6 col-xxl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Les cinq derniers inscrits</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-responsive-sm mb-0">
												<thead>
													<tr>
														<th>#</th>
														<th>Nom</th>
														<th>Prénom</th>
														<th>Phone</th>
														<th>Solde</th>
														<th>Statut</th>
														
                                    	            </tr>
												</thead>
												<tbody>
													
												@foreach($users as $user)
                                                     <tr>
													  <td>{{$loop->iteration}}</td>
														<td>{{$user->first_name}}</td>
														<td>{{$user->last_name}}</td>
														<td>{{$user->phone}}</td>
														@if(!$user->solde)
														<td>0</td>
														@else
														<td>{{$user->solde}}</td>
														@endif
														@if($user->status == 0)
														<td><span class="badge badge-primary">Nouveau</span></td>
														@elseif($user->status == 1)
														<td><span class="badge badge-info">Email Validé</span></td>
														@elseif($user->status == 2)
														<td><span class="badge badge-secondary">Documents envoyés</span></td>
														@elseif($user->status == 3)
														<td><span class="badge badge-warning">En attente de validation</span></td>
														@elseif($user->status == 4)
														<td><span class="badge badge-success">Validé</span></td>
														@else
														<td><span class="badge badge-danger">Bloqué</span></td>
														@endif
														
													</tr>
												@endforeach
												</tbody>
											</table>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Les cinq derniers investissements</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-responsive-sm mb-0">
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
							<div class="col-xl-3 col-xxl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">infos investisseurs</h4>
									</div>
									<div class="card-body">
										<div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1" style="height:250px;">
											<ul class="timeline">
												@if($new_investor!=0)
												<li>
													<div class="timeline-badge primary"></div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0"><strong class="text-primary">{{$new_investor}} </strong> nouveau(x)</h6>
													</a>
												</li>
												@endif
												<li>
													<div class="timeline-badge info">
													</div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0"> <strong class="text-info">{{$investor_email_valid}}</strong> email validé(s)</h6>
														
													</a>
												</li>
												@if($investor_document_sent != 0)
												<li>
													<div class="timeline-badge secondary">
													</div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0"><strong class="text-secondary">{{$investor_document_sent}}</strong> documents envoyé(s)</h6>
													</a>
												</li>
												@endif
												@if($investor_waiting != 0)
												<li>
													<div class="timeline-badge warning">
													</div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0"><strong class="text-warning">{{$investor_waiting}}</strong>  en attente(s)</h6>
													</a>
												</li>
												@endif
												@if($investor_valid != 0)
												<li>
													<div class="timeline-badge success">
													</div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0"> <strong class="text-success">{{$investor_valid}}</strong>  validé(s)</h6>
													</a>
												</li>
												@endif
                                                @if($investor_blocked != 0)
												<li>
													<div class="timeline-badge danger">
													</div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0"> <strong class="text-danger">{{$investor_blocked}}</strong>  bloqué(s)</h6>
													</a>
												</li>
												@endif
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-xxl-4 col-lg-12 col-md-12">
						<div class="card bg-primary text-white">
                            <div class="card-header pb-0 border-0">
                                <h4 class="card-title text-white">TOP INVESTISSEURS</h4>
                            </div>
                            <div class="card-body"> 
                                <div class="widget-media">
                                    <ul class="timeline">
										@foreach($top_investors as $top_investor)
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50" src="{{asset('Dashboard/images/avatar/1.jpg')}}">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1 text-white">{{$top_investor->user->first_name}} {{$top_investor->user->last_name}}</h5>
													<small class="d-block">{{$top_investor->sum}} Ethix investi(s) </small>
												</div>
												
											</div>
                                        </li>
										@endforeach
                                     </ul>
                                </div>
                            </div>
							 							
                        </div>
						
					
					</div>
						</div>
					</div>
					
					
					
					
			   </div>
            </div>
        </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection