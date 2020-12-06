@extends('layout.baseBackend')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="{{ url('/backend/users/create') }}">
            @csrf
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Mot de Passe</label>
                <input type="password" class="form-control" name="password">
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('success') }}
                </div>
            @endif
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Créer</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/backend/users'">Précedent</button>
            </div>
        </form>
    </div>

@endsection
