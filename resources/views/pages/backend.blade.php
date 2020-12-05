@extends('layout.baseBackend')

@section('content1')

    <h2>Liste des services</h2>
    <div class="col-md-12">

        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Sous-Titre</th>
                        <th>Lien</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row->id }}</td>
                        <td>{{$row->serviceName }}</td>
                        <td>{{$row->serviceSubname }}</td>
                        <td>{{$row->serviceLink }}</td>

                        <td><a href="{{ url('/backend/services/edit', $row->id)}}" class="btn btn-primary">Modifier</a></td>
                        <td>
                            <form action="{{ route('services.destroy', $row->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <button class="btn btn-secondary" onclick="window.location.href='/backend/services/create'">Creer un nouveau service</button>
                    </td>

                </tr>
                </tbody>

            </table>
        </div>
        <div>

        </div>
    </div>

@endsection
