@extends('layouts.main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/Z1srPv7lOy7C2vN+XSsCZc+FqH/s6cIFN9bGr1HmAg4fQkPCm2LBxH73+3KcmOZ8w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyDbAi+STFHFtuWfqGNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>


@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                {{-- <i class="fas fa-table me-1"></i> --}}
                {{-- DataTable Example --}}
                <a href="{{ route('index.create') }}" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Tambah
                    Produk</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Foto</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($produk as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>{{ $k->jenis }}</td>
                                <td>{{ $k->harga_jual }}</td>
                                <td>{{ $k->harga_beli }}</td>
                                <td>
                                    @empty($k->foto)
                                        <img src="{{ url('image/nophoto.jpg') }}" alt="project-image" class="rounded"
                                            style="width: 100%; max-width: 100px; height: auto;">
                                    @else
                                        <img src="{{ url('image/' . $k->foto) }}" alt="project-image" class="rounded"
                                            style="width: 100%; max-width: 100px; height: auto;">
                                    @endempty
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-secondary">show</a>
                                    <a href="{{ route('index.edit', $k->id) }}" class="btn btn-sm btn-warning">edit</a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $k->id }}">
                                        delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
