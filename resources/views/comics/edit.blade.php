@extends('layouts.main')

@section('main-content')
    <section class="container p-3 py-5">
        <h3 class="mb-5">Edit: {{ $comic->title }}</h3>

        <div class="row text-center">
            <div class="col-12">
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PATCH')

                    {{-- Title --}}
                    <label for="title" class="form-label">Title</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="title" name="title" value="{{$comic->title}}">
                    </div>
                    {{-- Description --}}
                    <label for="description" class="form-label">Description</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="description" name="description" value="{{$comic->description}}">
                    </div>
                    {{-- Thumb --}}
                    <label for="thumb" class="form-label">Thumb</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="thumb" name="thumb" value="{{$comic->thumb}}">
                    </div>
                    {{-- Price --}}
                    <label for="price" class="form-label">Price</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="price" name="price" value="{{$comic->price}}">
                    </div>
                    {{-- Submit --}}
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Comic</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection