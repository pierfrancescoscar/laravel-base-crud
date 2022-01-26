@extends ('layouts.main')

@section('main-content')
<section class="container-fluid">
    <div class="container p-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-5 text-center">Comics List</h3>
                </div>
            <div class="row text-center">
                <h4>There are a lot of comics here.
                    Click on the button to see all of them.
                </h4>
                <a href="{{route('comics.index')}}">Click here</a>
            </div>
        </div>
    </div>
</section>
@endsection