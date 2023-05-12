<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Edit data</title>
    </head>
    <body class="antialiased">
        <form action="{{ route('student.update',$student->id) }}" method="post">
            @csrf
            @method('patch')
            <input type="text" placeholder="nama" name="nama" value="{{ $student->nama }}">
            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <input type="number" placeholder="phone" name="phone" value="{{ $student->phone }}">
            @error('phone')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="alamat" name="alamat" value="{{ $student->alamat }}">
            @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <!-- <input type="text" placeholder="jenis_kelamin" name="jenis_kelamin" value="{{ $student->jenis_kelamin }}"> -->
            <select class="form-select mt-2 @error('jenis_kelamin') is-invalid @enderror" placeholder="jenis kelamin" name="jenis_kelamin" aria-label="Default select example" value="{{ $student->jenis_kelamin }}">
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <input type="email" placeholder="email" name="email" value="{{ $student->email }}">
            @error('email')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit">update</button>
        </form>
    </body>
</html>
