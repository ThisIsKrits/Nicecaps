@extends('layouts.admin')

@section('title', 'Nicecaps - Create Thumbnails')
    
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Thumbnails</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('thumbnail.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="title_thumbnails">Judul Gambar</label>
                <input type="text" class="form-control" name="title_thumbnails" placeholder="Input Judul"
                value="{{old('title_thumbnails')}}">
            </div>

            <div class="form-group">
                <label for="thumbnail">Upload Gambar</label>
                <input type="file" class="form-control" name="thumbnail" placeholder="thumbnail">
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Simpan
            </button>
            </form>
        </div>
    </div>

    

</div>
<!-- /.container-fluid -->
@endsection