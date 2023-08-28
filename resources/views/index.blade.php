<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Create user</h1>
    <form action="{{route('usercreate')}}" method="post">
        @csrf
        @method('post')
        <div>
            <Label >Name</Label>
            <input type="text" name="Name" placeholder="">
        </div>

        <div>
            <Label>age</Label>
            <input type="number" name="age" placeholder="">
        </div>

        <div>
            <Label>Location</Label>
            <input type="text" name="Location" placeholder="">
        </div>

        <div>
            <Label>email</Label>
            <input type="email" name="email" placeholder="">
        </div>

        <div>
            <Label>gender</Label>
            <input type="text" name="gender" placeholder="">
        </div>
        <div>
            <Label>Password</Label>
            <input type="password" name="Password" placeholder="">
        </div>
        <div>
            <input type="submit" value="save a new user">
        </div>
    </form>
    
</body>
</html>