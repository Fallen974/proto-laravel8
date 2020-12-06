@extends('layout.baseBackend')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="{{url('/backend/users/edit',$usersdata->id)}}">
            @csrf
            <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" name="id" value="{{$usersdata->id}}" readonly>
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="name" value="{{$usersdata->name}}">
            </div>
            <div class="form-group">
                <label>Sous Titre</label>
                <input type="text" class="form-control" name="email" value="{{$usersdata->email}}">
            </div>
            <div class="form-group">
                <label>Lien</label>
                <input type="password" class="form-control" name="password" value="{{$usersdata->password}}">
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('success') }}
                </div>
            @endif
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/backend/users'">Précedent</button>
            </div>

        </form>
    </div>



@endsection
