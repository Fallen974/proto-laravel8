@extends('layout.baseBackend')

@section('content1')
    <div class="container mt-5">
        <form method="POST" action="{{ url('/backend/services/create') }}">
            @csrf
            <div class="form-group">
                <label>Titre</label>
                <input type="text" class="form-control" name="serviceName">
            </div>
            <div class="form-group">
                <label>Sous Titre</label>
                <input type="text" class="form-control" name="serviceSubname">
            </div>
            <div class="form-group">
                <label>Lien</label>
                <input type="text" class="form-control" name="serviceLink">
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('success') }}
                </div>
            @endif
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Créer</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/backend'">Précedent</button>
            </div>
        </form>
    </div>

@endsection
