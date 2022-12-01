<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container pt-5" style="width: 600px;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3>Form ubah data</h3>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('DataMHS') }}" class="btn btn-outline-secondary form-control">Tutup</a>
                    </div>
                </div>
            </div>
            <form action="/UbahDataMahasiswa/{{ $data->id }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            id="NamaLengkap" value="{{ $data->nama }}" autocomplete="off">
                        @error('nama')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="NomorIndukMahasiswa" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" name="nim" class="form-control" id="NomorIndukMahasiswa"
                            value="{{ $data->nim }}" autocomplete="off" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="Alamat" rows="4">{{ $data->alamat }}</textarea>
                        @error('alamat')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-outline-success form-control">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
