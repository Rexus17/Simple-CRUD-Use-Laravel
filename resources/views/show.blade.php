<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Show data</title>
    </head>
    <body class="antialiased">
        <input type="text" value="{{ $student->nama }}" readonly>
        <input type="number" value="{{ $student->phone }}" readonly>
        <input type="text" value="{{ $student->alamat }}" readonly>
        <input type="text" value="{{ $student->jenis_kelamin }}" readonly>
        <input type="email" value="{{ $student->email }}" readonly>
    </body>
</html>
