@extends('layouts.front')
@section('content')


<!-- Question area starts -->
<section class="question-area pat-50 pab-50">
    <div class="container">
        <div class="section-title center-text">
            <h2 class="title"> Questions fréquentes </h2>
            <div class="section-title-shapes"> </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-xl-8 col-lg-7">
                <div class="faq-wrapper">
                    <div class="faq-contents">
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                                Qu'est-ce que Ethix ?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Ethix est la première startup dédiée à l'investissement sans la pratique de l'usure.


                                    Investir dès 100 euros dans des projets à forte valeur ajoutée dans le but de se constituer une épargne et des revenus réguliers devient désormais accessible à tous. </p>
                            </div>
                        </div>
                        <div class="faq-item active open wow fadeInLeft" data-wow-delay=".2s">
                            <h3 class="faq-title">
                                Quelles sont les conditions pour investir sur Ethix ?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Être majeur tout simplement !
                                    Des justificatifs d'identité vous seront ensuite demandés pour valider votre compte et vous permettre d'investir sur notre plateforme. </p>
                            </div>
                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".3s">
                            <h3 class="faq-title">
                                En achetant des Ethix, est ce que je pratique de l'usure?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Non, tous nos projets sont financés avec nos fonds propres UNIQUEMENT.
                                    Nous ne faisons donc jamais appel au crédit. </p>
                            </div>
                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                                Quelle rendement espérer ? 
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Chaque projet apporte un rendement différent, mais nous nous sommes fixé un objectif de plus-value entre 7 et 10% au minimum.

                                    Cette rentabilité n’est pas garantie, c’est une estimation. </p>
                            </div>
                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                                Comment sont calculés mes dividendes ?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Chaque année vous recevez un dividende calculé sur la base de votre investissement initial et de la plus-value générée à la suite des projets engagés dans l'année en cours.

                                    Exemple :
                                    
                                    Nous démarrons un projet d'une valeur totale de 100000€ en mars.
                                    
                                    Celui-ci dure 9 mois entre achat, travaux et revente.
                                    
                                    A la revente nous enregistrons une plus-value nette de 15000€
                                    
                                    Celle-ci est divisée entre les investisseurs au prorata de leur investissement.
                                    
                                    Celui qui aura investi 5000€, reçoit donc un dividende de 750€ qu’il peut décider de réinvestir afin de profiter de l'effet cumulé</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="faq-question faq-question-border radius-10">
                    <h3 class="faq-question-title"> Encore des questions ?
                    </h3>
                    <div class="faq-question-form custom-form mat-20">
                        <form action="#">
                            <div class="single-input">
                                <label class="label-title"> Nom </label>
                                <input type="text" class="form--control radius-10" placeholder="ecrir votre nom,">
                            </div>
                            <div class="single-input">
                                <label class="label-title"> Email </label>
                                <input type="text" class="form--control radius-10" placeholder="ecrir votre email">
                            </div>
                            <div class="single-input">
                                <label class="label-title"> Question </label>
                                <textarea name="message" class="form--control form-message radius-10" placeholder="rédiger votre question"></textarea>
                            </div>
                            <button class="submit-btn w-100 radius-10" type="submit"> Envoyer </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Question area end -->
    
    



@endsection