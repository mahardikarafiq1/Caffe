<!DOCTYPE html>
<html>
<head>
    <title>Login Cafe</title>
    <style>
        body{
            margin:0;
            height:100vh;
            background:url('https://images.unsplash.com/photo-1509042239860-f550ce710b93') center/cover;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial;
        }

        .overlay{
            background:rgba(0,0,0,0.7);
            padding:30px;
            border-radius:15px;
            width:320px;
            color:white;
            text-align:center;
        }

        input{
            width:100%;
            padding:12px;
            margin-top:10px;
            border:none;
            border-radius:8px;
        }

        button{
            margin-top:15px;
            width:100%;
            padding:12px;
            background:#ff7a59;
            border:none;
            border-radius:8px;
            color:white;
            font-size:16px;
            font-weight:bold;
        }

        a{
            color:white;
            font-size:12px;
        }
    </style>
</head>
<body>

<div class="overlay">
    <h2>Selamat Datang</h2>

    @if ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Sign in</button>
    </form>

    <br>
    <a href="{{ route('register') }}">Register</a>
</div>

</body>
</html>
