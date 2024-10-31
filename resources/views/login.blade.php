<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Belajar validation di Laravel dengan form login sederhana</h1>
    <form action="">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Masukkan username anda" value="{{ old('username') }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password anda">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>