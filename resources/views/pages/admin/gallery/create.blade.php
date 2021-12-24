@extends('layouts.admin')

@section('title', 'Nicecaps - Create')
    
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gambar</h1>
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
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="title_image">Judul Gambar</label>
                <input type="text" class="form-control" name="title_image" placeholder="Input Judul"
                value="{{old('title_image')}}">
            </div>

            <div class="form-group">
                <label for="image">Upload Gambar</label>
                <input type="file" class="form-control" name="image" placeholder="image">
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