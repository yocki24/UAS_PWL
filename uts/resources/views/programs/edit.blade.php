@extends('programs.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('programs.update', $program->id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <div class="form-group">
                        <label for="tittle">Title</label>
                        <input type="text" name="tittle" class="form-control" id="tittle" value="{{ $program->tittle }}" aria-describedby="tittle">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" name="content" class="form-control" id="content" value="{{ $program->content }}" aria-describedby="content">
                    </div>
                    <div class="form-group">
    <label for="image">Foto</label>
    <input type="file" class="form-control" required="required" name="image" value="{{$program->photo}}"></br>
    <img width="150px" src="{{asset('storage/'.$program->photo)}}">
    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="{{ $program->harga }}" aria-describedby="harga">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection