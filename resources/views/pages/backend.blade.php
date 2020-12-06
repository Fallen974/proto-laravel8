@extends('layout.baseBackend')

@section('content')
    <h2 class="text-center">Bienvenue dans l'espace d'administration!</h2>
    <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="window.location.href='/backend/users'">
        Espace CRUD Utilisateurs
    </button>
    <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="window.location.href='/backend/services'">
        Espace CRUD Services
    </button>
    <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="window.location.href='/backend/crew'">
        Espace CRUD Crew
    </button>
    <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="window.location.href='/'">
        Retour à l'accueil
    </button>
@endsection
