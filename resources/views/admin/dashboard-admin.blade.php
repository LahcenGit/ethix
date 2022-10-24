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
												<span class="text-success">Propriétés</span>
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
												<span class="text-success">Investisseurs</span>
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
												<span class="text-success">Ethix </span>
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
												<h5 class="mb-1">2000</h5>
												<span class="text-success">Total</span>
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
							<div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Timeline</h4>
									</div>
									<div class="card-body">
										<div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1" style="height:250px;">
											<ul class="timeline">
												<li>
													<div class="timeline-badge primary"></div>
													<a class="timeline-panel text-muted" href="#">
														<span>10 minutes ago</span>
														<h6 class="mb-0">Youtube, a video-sharing website <strong class="text-primary">$500</strong>.</h6>
													</a>
												</li>
												<li>
													<div class="timeline-badge info">
													</div>
													<a class="timeline-panel text-muted" href="#">
														<span>20 minutes ago</span>
														<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
														<p class="mb-0">Quisque a consequat ante Sit...</p>
													</a>
												</li>
												<li>
													<div class="timeline-badge danger">
													</div>
													<a class="timeline-panel text-muted" href="#">
														<span>30 minutes ago</span>
														<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
													</a>
												</li>
												<li>
													<div class="timeline-badge success">
													</div>
													<a class="timeline-panel text-muted" href="#">
														<span>15 minutes ago</span>
														<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
													</a>
												</li>
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