<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>dob</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $var1 as $h )
            <tr>
                <td scope="row">{{ $h->user_id }}</td>
                <td>{{ $h->name }}</td>
                <td>{{ $h->email }}</td>
                <td>{{ $h->password }}</td>
                <td>{{ $h->dob }}</td>
                <td>{{ $h->address }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
