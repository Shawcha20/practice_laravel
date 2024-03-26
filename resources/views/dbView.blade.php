<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/') }}/db" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
            @error('password')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob">
            @error('dob')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address">
            @error('address')
                {{ $message }}
            @enderror
        </div>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>
