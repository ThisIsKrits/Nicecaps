@extends('layouts.admin')

@section('title', 'Nicecaps - Edit Roadmap')
    
@section('content')
         <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Roadmap</h1>
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
                    <form action="{{route('roadmap.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="number">Nomer</label>
                        <input type="text" name="number" id="" class="form-control" placeholder="Nomer Roadmap" 
                        value="{{$item->number}}">
                    </div>

                    <div class="form-group">
                        <label for="title_roadmap">Title</label>
                        <input type="text" name="title_roadmap" id="" class="form-control" placeholder="Judul Roadmap" 
                        value="{{$item->title_roadmap}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="detail_roadmap">Detail Roadmap</label>
                        <textarea name="detail_roadmap" id="" rows="10" class="d-block w-100 form-control">{{$item->detail_roadmap}}</textarea>
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