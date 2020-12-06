@extends('layout.base')



@section('content-home')
    <div id="section-home">
        <h2 class="mx-auto">Prototype OnePage réalisé en&nbsp;<b>Laravel</b>&nbsp;un framework PHP</h2>
        <div class="multiple-items">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title"><b>Titre</b></h4>
                    <h5 class="card-title">Sous titre</h5>
                    <a href="#" class="btn btn-secondary">Voir plus</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title"><b>Titre</b></h4>
                    <h5 class="card-title">Sous titre</h5>
                    <a href="#" class="btn btn-secondary">Voir plus</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title"><b>Titre</b></h4>
                    <h5 class="card-title">Sous titre</h5>
                    <a href="#" class="btn btn-secondary">Voir plus</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title"><b>Titre</b></h4>
                    <h5 class="card-title">Sous titre</h5>
                    <a href="#" class="btn btn-secondary">Voir plus</a>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('content-about')
    <div id="section-about">
        <div id="header-section-about" data-aos="fade-right">
            <h2>Une équipe expérimentée à vos cotés</h2>
            <p><i>Basée à la Réunion, notre équipe de développeurs
                    certifiés Laravel est disponible pour la réalisation de tous vos projets d'application
                    sur-mesure, de site internet et d'API.</i> | <a href="https://bnb.re">En savoir plus</a></p>
        </div>
        <div id="body-section-about">
            <div class="container">
                <div class="row">
                    @foreach($crewdata as $members)
                        <div class="col-sm-4" data-aos="flip-left" data-aos-duration="1500">
                            <div class="card text-center proto-card">
                                <img class="card-img-top" src="{{ URL::asset('images/'.$members->crewPicture) }}" alt="Card image cap" width="300" height="370">
                                <div class="card-body">
                                    <h4 class="card-title">{{$members->crewLastName}} {{$members->crewFirstName}}</h4>
                                    <h5 class="card-title">{{$members->crewJob}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection

@section('content-form')
    <div id="proto-form">
        <h2>Formulaire de contact</h2>
        <div class="d-flex justify-content-center">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="firstName" placeholder="Prénom">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="lastName" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="emailAddress" placeholder="Votre adresse électronique">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Votre message..." rows="5"></textarea>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <div class="g-recaptcha" data-sitekey="6Ld0yvgZAAAAAOxoxJluisvKf9vlsDBF85T1BDEf"></div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Envoyer</button></div>

            </form>
        </div>
    </div>
@endsection
