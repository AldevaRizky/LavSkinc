@extends('layouts.admin')

@section('title', 'Produk')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Produk</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Button Tambah Produk -->
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal">Tambah Produk</button>

        <!-- Tabel Produk -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" width="50"></td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kategori->kategori }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>
                                        <!-- Button Edit -->
                                        <button class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#editModal{{ $item->id }}">Edit</button>

                                        <!-- Button Hapus -->
                                        <form action="{{ route('produk.destroy', $item->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Produk</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('produk.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="gambar">Gambar</label>
                                                        <input type="file" name="gambar" id="gambar" class="form-control">
                                                        <small>Biarkan kosong jika tidak ingin mengganti gambar.</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>
                                                        <input type="text" name="nama" id="nama"
                                                            class="form-control" value="{{ $item->nama }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kategori_id">Kategori</label>
                                                        <select name="kategori_id" id="kategori_id" class="form-control">
                                                            @foreach ($kategori as $kat)
                                                                <option value="{{ $kat->id }}"
                                                                    {{ $kat->id == $item->kategori_id ? 'selected' : '' }}>
                                                                    {{ $kat->kategori }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deskripsi">Deskripsi</label>
                                                        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $item->deskripsi }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga">Harga</label>
                                                        <input type="number" name="harga" id="harga" class="form-control"
                                                            value="{{ $item->harga }}">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $produk->links('pagination::bootstrap-5') }}
                </div>                
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <select name="kategori_id" id="kategori_id" class="form-control">
                                    @foreach ($kategori as $kat)
                                        <option value="{{ $kat->id }}">{{ $kat->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" id="harga" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
