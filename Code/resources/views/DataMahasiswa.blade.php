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
    <div class="container mt-5 pt-5" style="width: 700px;">
        @if ($message = Session::get('ubah'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3 class="bi bi-person-lines-fill"> DATA MHS</h3>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('Keluar') }}" class="btn btn-outline-danger form-control">Keluar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">NamaLengkap</div>
                    <div class="col-7">{{ Auth::user()->nama }}</div>
                    <div class="col-5">Nomor Induk Mahasiswa</div>
                    <div class="col-7">{{ Auth::user()->nim }}</div>
                    <div class="col-5">Alamat</div>
                    <div class="col-7">{{ Auth::user()->alamat }}</div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="row">
                    <div class="col">
                        <a href="/FormUbahDataMahasiswa/{{ Auth::user()->id }}"
                            class="btn btn-outline-secondary form-control">Ubah
                            Data</a>
                    </div>
                    <div class="col">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                            class="btn btn-outline-secondary form-control">Hapus
                            Akun</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- peringatan --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="bi bi-person-lines-fill"> DATA MHS</h3>
                </div>
                <div class="modal-body">
                    <h4>Data anda akan dihapus permanen.</h4>
                    <h4>Apakah anda yakin ?</h4>
                </div>
                <div class="modal-footer">
                    <a href="/HapusAkun/{{ Auth::user()->id }}" class="btn btn-outline-danger">Yakin</a>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end peringatan --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
