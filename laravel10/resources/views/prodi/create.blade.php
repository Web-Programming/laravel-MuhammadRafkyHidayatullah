<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Prodi</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                <h2>Form Prodi</h2>
                <form action="http://127.0.0.1:8000/prodi/store" method="POST">
                    @csrf
                    <div class="form-grpup">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control"
                    value="{{ old('nama')}}">
                    @error('nama')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                    </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        </form>
            </div>
        </div>
    </div>
</body>
</html>
