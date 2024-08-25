@extends ('template.main')

@section('konten')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" style="font-family: 'Arial', sans-serif; font-weight: bold;">
        Catat perjalanan harian kamu di sini :)
    </h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Tambah Catatan
                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahDataModal">
                    <i class="fas fa-plus-circle"></i> Tambah Data
                </button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Waktu Penyajian</th>
                            <th>Bintang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produk as $item)
                            <tr>
                                <td>{{ $item->id_produk}}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Produk" width="100"></td>
                                <td>{{ $item->jenis }}</td>
                                <td>Rp.{{ $item->harga }}</td>
                                <td>{{ $item->waktu_penyajian }}</td>
                                <td>{{ $item->bintang }}</td>
                                <td>
                                    <!-- Action buttons can go here -->
                                    <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editDataModal">
                                        <i class="fas fa-edit"></i>Edit
                                        <form action="{{ route('produk.destroy', $item->id_produk) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Data Modal -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Produk</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Produk</label>
                        <select class="form-control" id="jenis" name="jenis" required>
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Produk</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu_penyajian">Waktu Penyajian</label>
                        <input type="text" class="form-control" id="waktu_penyajian" name="waktu_penyajian" required>
                    </div>
                    <div class="form-group">
                        <label for="bintang">Bintang</label>
                        <input type="text" class="form-control" id="bintang" name="bintang" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection