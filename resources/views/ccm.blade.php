@extends('layouts.front')
@section('content')


    <!-- Booking area starts -->
    <section class="booking-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> l'investissement sans contraintes ! </h2>
                <div class="section-title-shapes"> </div>
                <h5 > Faites fructifier votre épargne avec notre solution.</h5>
                
            </div>
            <div class="row gy-4 mt-5">
                <div class="container py-5">
                    <div class="main-timeline-4 text-white">
                      <div class="timeline-4 left-4">
                        <div class="card gradient-custom">
                          <div class="card-body p-4">
                            <i class=""></i>
                            <i class="fas fa-user fa-2x mb-3"></i>
                            <h4 style="color: #ffff">1-S'inscrire en quelques clics</h4>
                            <p class="small text-white-50 mb-4 text-white" > Créer un compte Ethix </p>
                            <img class="mb-4" style="border-radius: 25px;" src="{{asset('Front\assets\img\AdobeStock_273639400-930x620.jpeg')}}" alt="">
                            <p style="color: #ffff">Quelques informations et une copie de votre pièce d'identité seront nécessaires pour la création d'un compte investisseur.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-4 right-4">
                        <div class="card gradient-custom-4">
                          <div class="card-body p-4">
                            <i class="fas fa-check fa-2x mb-3"></i>
                            <h4 style="color: #ffff">2-Validation de votre compte</h4>
                            <p class="small text-white-50 mb-4 text-white" >  Rejoindre le groupe d'investisseurs  </p>
                            <img class="mb-4" style="border-radius: 25px;" src="{{asset('Front\assets\img\AdobeStock_228730968-930x620.jpeg')}}" alt="">
                            <p style="color: #ffff">Une fois l'inscription validée et le contrat Ethix dûment signé, vous rejoignez le groupe d’investisseurs Ethix.
                                Vous avez désormais accès à votre tableau de bord et vous pouvez accéder aux informations concernant les investissements dans les projets en cours.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-4 left-4">
                        <div class="card gradient-custom">
                          <div class="card-body p-4">
                            <i class="fas fa-euro-sign fa-2x mb-3"></i>
                            <h4 style="color: #ffff">3-Encaisser ou réinvestir sa plus-value </h4>
                            <p class="small text-white-50 mb-4 text-white" >Récoltez les Fruits de vos investissements  </p>
                            <img class="mb-4" style="border-radius: 25px;" src="{{asset('Front\assets\img\AdobeStock_69307111-1024x734.jpeg')}}" alt="">
                            <p style="color: #ffff">Vous avez pris des parts dans un projet ? Récupérez vos gains lors de la vente de ce dernier et choisissez ou non de les réinvestir dans de nouveaux projets afin de bénéficier de l'effet cumulé.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    
    <!-- Booking area ends -->
    <!-- Booking area starts -->
    <section class="booking-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title" > Nous vous proposons des projets clé en main </h2>
                <div class="section-title-shapes"> </div>
                <h5 class="mb-4">Nos équipes s'occupent de tout !.</h5>
            </div>



            <div class="row d-flex justify-content-center">

              <div class="card card-edit-border" style="width: 14rem; margin-right:5px;">
                <img src="{{asset('Front\assets\img\recherche-ethix.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center">
                  <b class="card-text text-center" style="color: #024670" >Recherche des opportunités</b>
                </div>
              </div>
              <div class="card card-edit-border" style="width: 14rem; margin-right:5px;">
                <img  src="{{asset('Front\assets\img\negociation-ethix.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center ">
                  <b class="card-text text-center" style="color: #024670" >Négociation</b>
                </div>
              </div>
              <div class="card card-edit-border" style="width: 14rem; margin-right:5px;">
                <img  src="{{asset('Front\assets\img\travaux-ethix.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center ">
                  <b class="card-text text-center" style="color: #024670" >Travaux</b>
                </div>
              </div>
              <div class="card card-edit-border" style="width: 14rem; margin-right:5px;">
                <img  src="{{asset('Front\assets\img\revente-ethix.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center">
                  <b class="card-text text-center" style="color: #024670" >Revente</b>
                </div>
              </div>
              <div class="card card-edit-border" style="width: 14rem; margin-right:5px;">
                <img  src="{{asset('Front\assets\img\suivi-ethix.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center">
                  <b class="card-text text-center" style="color: #024670" >Suivi administratif et juridique du projet</b>
                </div>
              </div>
             

             


            </div>

           

          
          </div>
            
           
        </div>
    </section>
    
    <!-- Booking area ends -->
    
    
    



@endsection