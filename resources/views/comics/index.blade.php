@extends('layouts.main')

@section('main-content')
    <section class="container p-3">

        @if(session('deleted'))
        <div class="alert alert-success">
            <strong>{{ session('deleted') }}</strong>
        </div>
        @endif

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>description</th>
                            <th>price</th>
                            <th>action</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <td>{{ $comic->id }}</td>
                                <td>{{ $comic->title }}</td>
                                <td class="text-truncate" style="max-width: 250px">{{ $comic->description }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('comics.show', $comic->id)}}">show</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id)}}">edit</a>
                                </td>

                                <td>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$comics->links()}}
    </section>
@endsection