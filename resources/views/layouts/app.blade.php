<!DOCTYPE html>
<html>
<head>
    <title>Cafe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body{
            margin:0;
            font-family: Arial;
            background:#e5e5e5;
            display:flex;
            justify-content:center;
        }

        /* Frame seperti HP */
        .phone{
            width:390px;
            min-height:100vh;
            background:white;
            border-radius:25px;
            overflow:hidden;
            box-shadow:0 0 20px rgba(0,0,0,0.2);
        }

        .header{
            background:black;
            color:white;
            padding:15px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .content{
            padding:15px;
        }

        .btn{
            padding:8px 15px;
            border-radius:6px;
            text-decoration:none;
            background:black;
            color:white;
            display:inline-block;
        }

        .category a{
            padding:8px 15px;
            background:#f0f0f0;
            border-radius:6px;
            text-decoration:none;
            margin-right:5px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:12px;
            margin-top:10px;
        }

        .card{
            background:#111;
            color:white;
            border-radius:10px;
            padding:10px;
        }

        .price{
            background:#333;
            display:inline-block;
            padding:2px 6px;
            border-radius:5px;
            font-size:12px;
        }

        .add-btn{
            margin-top:8px;
            width:100%;
            background:black;
            color:white;
            border:none;
            padding:6px;
            border-radius:5px;
        }

        .cart-item{
            background:#111;
            color:white;
            padding:10px;
            border-radius:8px;
            margin-bottom:10px;
        }

        .total{
            font-size:18px;
            margin-top:10px;
        }

        .orange{
            background:orange;
            color:white;
            border:none;
            padding:10px;
            width:100%;
            border-radius:6px;
        }
    </style>
</head>
<body>

<div class="phone">

    @yield('content')

</div>

</body>
</html>
