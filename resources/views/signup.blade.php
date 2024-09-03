<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign In</title>
</head>

<body>
    <div class="container-login">
        <form action="">
            @csrf
            <div class="judul">
                <h1>Sign Up</h1>
            </div>
            <div class="login">
                <input type="email" name="email" placeholder="email"><br>
                <input type="password" name="password" placeholder="password"><br>
                <div class="regis">
                    <p>sudah punya akun?</p>
                    <a href="/Sign-In">sign In</a>
                </div>
                <button>Masuk</button>
            </div>
        </form>
    </div>
</body>

</html>
