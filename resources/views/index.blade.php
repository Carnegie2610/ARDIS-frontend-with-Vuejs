<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Create user</h1>
    <form action="{{route('usercreate')}}" method="GET">
        @csrf
        @method('GET')
        <div>
            <Label >Name</Label>
            <input type="text" name="name" placeholder=""/>
        </div>

        <div>
            <Label>age</Label>
            <input type="number" name="age" placeholder=""/>
        </div>

        <div>
            <Label>gender</Label>
            <input type="text" name="gender" placeholder=""/>
        </div>

        <div>
            <Label>location</Label>
            <input type="text" name="location" placeholder=""/>
        </div>

        <div>
            <Label>email</Label>
            <input type="email" name="email" placeholder=""/>
        </div>
        <div>
            <Label>Password</Label>
            <input type="text" name="password" placeholder=""/>
        </div>
        <div>
            <input type="submit" value="save a new user"/>
        </div>
    </form>
    
</body>
</html>