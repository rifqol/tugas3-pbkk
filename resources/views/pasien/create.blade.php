<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                    <h6 class="alert alert-success"> {{ session('status') }}</h6>
                @endif

                <div class="card">
                    <h4>Add Pasien with Image
                            <a href="{{ url('pasiens') }}"class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-pasiens') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Nama pasien</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">NIK pasien</label>
                            <input type="text" name="nik" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email pasien</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Alamat pasien</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Photo pasien</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        @error('photo')
                            <div class="col-sm-4 text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add Pasien</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

