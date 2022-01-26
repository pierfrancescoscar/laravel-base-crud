@extends('layouts.main')

@section('main-content')
    <section class="container py-5">
        <h3>{{$comic->title}}</h3>
        <h4 class="mb-5">Price: €{{$comic->price}}</h4>

        <div class="row">
            {{-- Image --}}
            <div class="col-3">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{$comic->title}}">
            </div>
            {{-- Description --}}
            <div class="col-8">
                <p>{!!$comic->description!!}</p>
            </div>

            <a class="mt-5" href="{{route('comics.index')}}">Back to archive</a>
        </div>
    </section>
@endsection