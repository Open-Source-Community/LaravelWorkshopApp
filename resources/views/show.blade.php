<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>All users</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="padding-top: 15px">
<div class=" col-xs-12">
    <a class="btn btn-success pull-right" href="{{url("users/create")}}">Add new User</a>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>EDIT</th>
        <th>Delete</th>
    </tr>
    </thead>

    <tbody>

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->number}}</td>
            <td>
                <a class="btn btn-warning label-sm" href="{{url("users/$user->id/edit")}}">Edit User</a>
            </td>
            <td>
                <form method="post" action="{{ url("users/$user->id")}}">
                    {{ method_field('DELETE') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger label-sm">Delete</button>
                </form>
            </td>

        </tr>

    </tbody>
</table>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
