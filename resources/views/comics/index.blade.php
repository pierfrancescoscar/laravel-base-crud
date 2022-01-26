@extends('layouts.main')

@section('main-content')
    <section class="container p-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>description</th>
                            <th>price</th>
                            <th colspan="3">action</th>
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
                                    <a class="btn btn-success" href="/">show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection