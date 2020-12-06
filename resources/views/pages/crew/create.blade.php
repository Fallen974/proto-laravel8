@extends('layout.baseBackend')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="{{ url('/backend/crew/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" class="form-control" name="crewFirstName">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="crewLastName">
            </div>
            <div class="form-group">
                <label>Poste</label>
                <input type="text" class="form-control" name="crewJob">
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" class="form-control" name="crewPicture">
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('success') }}
                </div>
            @endif
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Créer</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/backend/crew'">Précedent</button>
            </div>
        </form>
    </div>

@endsection
