@extends('layouts.Master')

@section('content')

<main role="main" class="container">
    <img width="1100px" height="300px" src="{{asset('/storage/image/new_image.jpg')}}">
    <div class="col-md-4 mt-5">
        <div class="card">
                <div class="card-body">
                <form action="{{route('upload-fill')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Uplode</label>
                        <input name="image" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
