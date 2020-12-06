@extends('layout.baseBackend')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="{{url('/backend/crew/edit',$crewdata->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" class="form-control" name="crewFirstName" value="{{$crewdata->crewFirstName}}">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="crewLastName" value="{{$crewdata->crewLastName}}">
            </div>
            <div class="form-group">
                <label>Poste</label>
                <input type="text" class="form-control" name="crewJob" value="{{$crewdata->crewJob}}">
            </div>
            <div class="form-group">
                <label>Photo *</label>
                <input type="file" class="form-control" name="crewPicture" accept=".jpeg,.png">
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('success') }}
                </div>
            @endif
            <div class="form-group">
                <p><i>* Important : Peu importe le champs que vous modifiez, veuillez veiller à réuploader une image avant de cliquer sur "Modifier"(dimensions max : 300x370)</i></p>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/backend/crew'">Précedent</button>
            </div>

        </form>
    </div>



@endsection
