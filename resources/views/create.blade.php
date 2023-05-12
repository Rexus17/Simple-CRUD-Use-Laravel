<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create data</title>
    </head>
    <body class="antialiased">
        <form action="{{ route('student.store') }}" method="post">
          @csrf
          <input type="text" placeholder="nama" name="nama">
            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <input type="number" placeholder="phone" name="phone">
            @error('phone')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="alamat" name="alamat">
            @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <select class="form-select mt-2 @error('jenis_kelamin') is-invalid @enderror" placeholder="jenis kelamin" name="jenis_kelamin" aria-label="Default select example">
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <input type="email" placeholder="email" name="email">
            @error('email')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
          <button type="submit">submit</button>
        </form>
    </body>
</html>
