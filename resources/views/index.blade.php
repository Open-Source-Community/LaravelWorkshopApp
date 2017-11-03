<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>
<body>

<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Delete Method</th>
    </tr>

    @for ($i = 0; $i < count($users); $i++)
        <tr>
            <td>{{$users[$i]->name}}</td>
            <td>{{$users[$i]->email}}</td>
            <td>{{$users[$i]->number}}</td>
            <td><a href="users/{{$users[$i]->id}}/delete">Delete</a></td>
        </tr>
    @endfor
</table>

</body>
</html>
