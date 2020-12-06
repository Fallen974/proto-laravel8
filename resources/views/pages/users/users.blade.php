@extends('layout.baseBackend')
@section('content')

    <h2>Liste des utilisateurs</h2>
    <div class="col-md-12">

        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
                </thead>

                <tbody>
                @foreach($usersdata as $users)
                    <tr>
                        <td>{{$users->name }}</td>
                        <td>{{$users->email }}</td>

                        <td><a href="{{ url('/backend/users/edit', $users->id)}}" class="btn btn-primary"><i class="fa fa-2x fa-pencil-square-o"></i></a></td>
                        <td>
                            <form action="{{ route('users.destroy', $users->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa fa-2x fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4">
                        <div  class="d-flex justify-content-between">
                            <button class="btn btn-secondary" onclick="window.location.href='/backend/users/create'"><i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-primary" onclick="window.location.href='/backend'">Précédent</button>
                        </div>
                    </td>

                </tr>
                </tbody>

            </table>
        </div>
        <div>

        </div>
    </div>

@endsection
