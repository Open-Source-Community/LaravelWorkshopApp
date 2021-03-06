<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add users</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="padding-top: 50px">

<form class="form-horizontal" method="post" action="{{url("users/$user->id")}}">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="container">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input value="{{$user->name}}" type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input value="{{$user->email}}" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="number">Number:</label>
            <div class="col-sm-10">
                <input value="{{$user->number}}" type="text" class="form-control" id="number" placeholder="Enter number" name="number">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Edit</button>
            </div>
        </div>
    </div>
</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
