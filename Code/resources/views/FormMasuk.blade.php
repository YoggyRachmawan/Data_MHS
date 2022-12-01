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
    <div class="container mt-5 pt-5" style="width: 500px;">
        @if ($message = Session::get('hapus'))
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @endif
        @if ($message = Session::get('berhasil'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
        @if ($message = Session::get('gagal'))
            <div class="alert alert-warning" role="alert">
                {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('Masuk') }}" method="POST">
                    @csrf
                    <h2 class="bi bi-person-lines-fill text-center mb-3"> DATA MHS</h2>
                    <div class="form-floating mb-3">
                        <input type="text" name="nim"
                            class="form-control @error($message = Session::get('hapus')) is-invalid @enderror"
                            id="floatingInput" placeholder="name@example.com" autocomplete="off">
                        <label for="floatingInput">Nomor Induk Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <p>Belum punya akun ? <a href="{{ route('FormBuatAkun') }}">buat dulu.</a></p>
                    <button type="submit" class="btn btn-outline-primary form-control">Masuk</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
