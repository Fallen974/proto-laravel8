@extends('layout.baseBackend')
@section('content')

    <h2>Liste des services</h2>
    <div class="col-md-12">

        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Sous-Titre</th>
                    <th>Lien</th>
                </tr>
                </thead>

                <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row->serviceName }}</td>
                        <td>{{$row->serviceSubname }}</td>
                        <td>{{$row->serviceLink }}</td>

                        <td><a href="{{ url('/backend/services/edit', $row->id)}}" class="btn btn-primary"><i class="fa fa-2x fa-pencil-square-o"></i></a></td>
                        <td>
                            <form action="{{ route('services.destroy', $row->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa fa-2x fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="5">
                        <div  class="d-flex justify-content-between">
                            <button class="btn btn-secondary" onclick="window.location.href='/backend/services/create'"><i class="fa fa-plus" aria-hidden="true"></i>
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
