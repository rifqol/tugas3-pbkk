<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>nama</td>
            <td>nik</td>
            <td>email</td>
            <td>alamat</td>
            <td>photo</td>
        </tr>

        @foreach($data as $data)
        <tr>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->alamat }}</td>
            <td>
                <img src="/upload/pasiens/{{ $data->photo }}" height="auto" width="120">
            </td>
        </tr>
        @endforeach
    </table>
    <!-- <h1>haii</h1> -->
</body>
</html>