<div class="header-investor">
    @if($user->status == 0)
    <div class="container mt-4 ">
        @if($test_document == 0)
        <div class="alert alert-warning" role="alert">
         <span style="font-size: 17px;"> Veuillez envoyer les documents justificatifs pour activer votre compte ,<a href="{{url('/add-file')}}" class="alert-link">Cliquez-ici ! </a></span>
        </div>
        @endif
        @if($test_info == 0)
        <div class="alert alert-secondary" role="alert">
        <span style="font-size: 17px;"> Veuillez compléter les étapes restantes pour activer votre compte ,<a href="{{url('/app/add-info')}}" class="alert-link">Cliquez-ici ! </a></span>
        </div>
        @endif
        @if($test_info !=0 && $test_document != 0)
        <div class="alert alert-warning" role="alert">
        <span style="font-size: 17px;">La validation de votre compte est en cours de traitement...</span>
        </div>
        @endif
        
    </div>
    @endif

    <div class="row d-flex justify-content-center " >
        <div class=" col-6  col-md-1 text-center mb-2 mt-2">
            <a href="{{url('app/')}}"> <i class="fa-solid fa-house-fire fa-2x" style="color:#4DAA7F; " > </i> <br> propriétés </a>
        </div>

        <div class=" col-6 col-md-1 text-center mb-2 mt-2">
            <a href="{{url('app/investissements')}}"> <i class="fa-solid fa-money-bill-trend-up fa-2x" style="color:#4DAA7F; " > </i> <br> Investissements </a>
        </div>
       
        <div class="col-6 col-md-1 text-center mb-2 mt-2">
            <a href="{{url('app/profil')}}"> <i class="fa-solid fa-user fa-2x" style="color:#4DAA7F; " > </i> <br> Profil </a>
        </div>

        <div class="col-6 col-md-1 text-center mb-2 mt-2">
            <a href="{{route('logout')}}"> <i class="fa-solid fa-right-from-bracket fa-2x" style="color:#818181; " onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" > </i> <br> Déconnexion 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
        </div>
    </div>

   
</div>