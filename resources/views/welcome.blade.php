<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MENU</title>
    </head>
    <body class="antialiased">
        <p>{{ session()->get('success') ?: '' }}</p>
        <a href="{{ route('student.create') }}">Create New</a>
        <table>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @forelse ($students as $student)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->alamat }}</td>
                <td>{{ $student->jenis_kelamin }}</td>
                <td>{{ $student->email }}</td>
                <td><a href="{{ route('student.edit',$student->id) }}">Edit</a></td>
                <td><a href="{{ route('student.show',$student->id) }}">Show</a></td>
                <td>
                    <form method="POST" action="{{ route('student.destroy',$student->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <p>No student found!</p>
            @endforelse
        </table>
    </body>
</html>
