<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>All users</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Delete Method</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->number}}</td>
            <td>
                <form method="post" action="{{ url("users/$user->id")}}">
                    {{ method_field('DELETE') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger label-sm">Delete</button>

                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
