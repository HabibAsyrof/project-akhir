<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Sign In</title>
</head>

<body>
    <div class="container-login">
        <form action="/login" method="POST">
            @csrf
            <div class="judul">
                <h1>Sign In</h1>
            </div>
            <div class="login">
                <div class="error">
                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                   </div>
                <input type="email" name="email" placeholder="email"><br>
                <input type="password" name="password" placeholder="password"><br>
                <div class="regis">
                    <p>belum punya akun?</p>
                    <a href="/Sign-Up">sign up</a>
                </div>
                <button class="login-btn" type="submit">Masuk</button>
            </div>
        </form>
    </div>
</body>

</html>
