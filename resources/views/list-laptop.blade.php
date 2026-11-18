<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Processor</th>
            <th>Ram</th>
            <th>Action</th>
        </tr>
        @foreach($laptops as $laptop)
        <tr>
           <td>{{ $laptop->Brand }}</td>
            <td>{{ $laptop->Model }}</td>
            <td>{{ $laptop->Processor }}</td>
            <td>{{ $laptop->Ram }} GB</td>
            <td>
                <form method="POST" action="{{ route("delete-laptop") }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $laptop -> id }}">
                    <input style="background: red" type="submit" value ="Hapus">
                </form>


                <a href="{{ route('edit-laptop', $laptop->id) }}">
                    <button type="button" style="background: green">Update</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>