{{-- @extends('layouts.main') --}}
@extends('welcome')
@section('content')
    
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 bg-secondary">
                <div>
                    <h3 class="text-center my-4">HALAMAN ADMIN</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded mt-4">
                    <div class="card-body">
                        <a href="{{ route('aulias.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                        <tbody>
                            @forelse ($aulias as $aulia)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('storage/aulias/'.$aulia->image) }}" class=" rounded" style="width:150px">
                                </td>
                                <td>{{ $aulia->title }}</td>
                                <td>{!! $aulia->content !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('aulias.destroy', $aulia->id) }}" method="POST">
                                        <a href="{{ route('aulias.show', $aulia->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('aulias.edit', $aulia->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                        </table>
                        {{ $aulias->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>