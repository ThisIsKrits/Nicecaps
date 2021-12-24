@extends('layouts.admin')

@section('title', 'Roadmaps')
    
@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Roadmap</h1>
            <a href="{{route('roadmap.create')}}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Gambar
            </a>
            
        </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Judul Roadmap</th>
                            <th>Detail Roadmap</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $no => $item)
                        <tr>
                            <td>{{++$no}}</td>
                            <td>{{$item->title_roadmap}}</td>
                            <td>{{$item->detail_roadmap}}</td>
                            <td>
                                <a href="{{route('roadmap.edit', $item->id)}}" class="btn btn-info">
                                    <i class="far fa-edit"></i>
                                </a>
                                <form action="{{route('roadmap.destroy', $item->id)}}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Data tidak ditemukan!
                            </td>
                        </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

       

    </div>
    <!-- /.container-fluid -->
@endsection
