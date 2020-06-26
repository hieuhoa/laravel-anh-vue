<!DOCTYPE html>
<html lang="vn">
<head>
    <title>Edit</title>
</head>
<body>
<form action="{{route('users.update', $edit)}}" method="post">
    {{csrf_field()}}
    @method('PUT')
    <label>First Name</label>
    <input type="text" value="{{$edit->firstName}}" name="firstName">
    <br>
    <label>Last Name</label>
    <input type="text" value="{{$edit->lastName}}" name="lastName">
    <br>
    <label>Address</label>
    <input type="text" value="{{$edit->address}}" name="address">
    <br>
    <label>Phone</label>
    <input type="text" value="{{$edit->phone}}" name="phone">
    <br>
    <label>Email</label>
    <input type="text" value="{{$edit->email}}" name="email">
    <br>
    <button type="submit">Submit</button>
    <td><a href="{{route('users.index')}}">Back</a></td>
</form>
</body>
</html>