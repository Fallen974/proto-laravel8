@extends('layout.baseBackend')

@section('content')
    <h2>Liste des membres de l'équipe</h2>

    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Poste</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($crewdata as $person)
                <tr>
                    <td width="35%" class="text-center">
                        <img src="{{ URL::asset('images/'.$person->crewPicture) }}" width="35%">
                    </td>
                    <td class="align-middle">{{$person->crewFirstName }}</td>
                    <td class="align-middle">{{$person->crewLastName }}</td>
                    <td class="align-middle">{{$person->crewJob }}</td>


                    <td class="align-middle"><a href="{{ url('/backend/crew/edit', $person->id)}}" class="btn btn-primary"><i class="fa fa-2x fa-pencil-square-o"></i></a></td>
                    <td class="align-middle">
                        <form action="{{ route('members.destroy', $person->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa fa-2x fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6">
                    <div  class="d-flex justify-content-between">
                        <button class="btn btn-secondary" onclick="window.location.href='/backend/crew/create'"><i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-primary" onclick="window.location.href='/backend'">Précédent</button>
                    </div>

                </td>

            </tr>
            </tbody>
        </table>
    </div>

@endsection
