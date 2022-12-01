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
    <div class="container pt-2" style="width: 500px;">
        <div class="card">
            <div class="card-header">
                <h3>Form buat akun</h3>
            </div>
            <form action="{{ route('BuatAkun') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            id="NamaLengkap" autocomplete="off" value="{{ old('nama') }}">
                        @error('nama')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="NomorIndukMahasiswa" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                            id="NomorIndukMahasiswa" autocomplete="off" value="{{ old('nim') }}">
                        @error('nim')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="Alamat" rows="1">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="Password">
                        @error('password')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <p>Sudah punya akun ? <a href="{{ route('FormMasuk') }}">masuk bae.</a></p>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-outline-success form-control">Daftar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
