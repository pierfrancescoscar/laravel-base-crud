@extends('layouts.main')

@section('main-content')
    <section class="container p-3 py-5">
        <h3 class="mb-5">Create a new comic</h3>

        <div class="row text-center">
            <div class="col-12">
                <form action="{{'comics.store'}}" method="POST">
                    @csrf
                    {{-- Title --}}
                    <label for="title" class="form-label">Title</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="title" name="title">
                    </div>
                    {{-- Description --}}
                    <label for="description" class="form-label">Description</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="description" name="description">
                    </div>
                    {{-- Thumb --}}
                    <label for="thumb" class="form-label">Thumb</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="thumb" name="thumb">
                    </div>
                    {{-- Price --}}
                    <label for="price" class="form-label">Price</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="price" name="price">
                    </div>
                    {{-- Submit --}}
                    <div class="mb-3">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection