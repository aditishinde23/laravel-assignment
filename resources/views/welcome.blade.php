<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Assignment</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            min-height:100vh;
            background:#f4f4f4;
            overflow:hidden;
            position:relative;
        }

        /* Red wave */
        body::after{
            content:'';
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
            height:40%;
            background:#ff2d20;
            border-top-left-radius:50% 100%;
            border-top-right-radius:50% 100%;
            z-index:0;
        }

        .navbar{
            position:absolute;
            top:20px;
            left:40px;
            color:#ff2d20;
            font-size:26px;
            font-weight:600;
            z-index:2;
        }

        .container{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            position:relative;
            z-index:2;
        }

        .card{
            width:700px;
            background:white;
            border-radius:18px;
            box-shadow:0 10px 30px rgba(0,0,0,.15);
            padding:40px;
            text-align:center;
        }

        .logo{
            font-size:80px;
            color:#ff2d20;
        }

        h1{
            margin-top:10px;
            font-size:48px;
            font-weight:700;
        }

        h1 span{
            color:#ff2d20;
        }

        .subtitle{
            color:gray;
            margin-top:8px;
        }

        .line{
            width:60px;
            height:4px;
            background:#ff2d20;
            margin:15px auto 30px;
            border-radius:20px;
        }

        .info-box{
            display:flex;
            justify-content:center;
            gap:20px;
            margin-bottom:30px;
        }

        .box{
            background:#fafafa;
            padding:25px;
            width:220px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .box h3{
            color:#ff2d20;
            font-size:16px;
            margin-bottom:10px;
        }

        .box p{
            font-size:18px;
            font-weight:600;
        }

        .tech{
            display:flex;
            justify-content:center;
            gap:20px;
            margin-bottom:30px;
        }

        .tech-card{
            background:white;
            border:1px solid #eee;
            padding:15px 20px;
            border-radius:10px;
            box-shadow:0 2px 8px rgba(0,0,0,.08);
            font-size:15px;
            font-weight:500;
            color:#555;
        }

        .footer{
            border-top:1px solid #eee;
            padding-top:20px;
            color:#777;
        }

        .footer span{
            color:#ff2d20;
            font-weight:600;
        }

    </style>
</head>
<body>

<div class="navbar">
    Laravel
</div>

<div class="container">

    <div class="card">

        <div class="logo">
            ⬢
        </div>

        <h1>
            <span>Laravel</span> Assignment
        </h1>

        <p class="subtitle">
            Built with Laravel - The PHP Framework for Web Artisans
        </p>

        <div class="line"></div>

        <div class="info-box">

            <div class="box">
                <h3>Name</h3>
                <p>Aditi Shinde</p>
            </div>

            <div class="box">
                <h3>Roll Number</h3>
                <p>5024158</p>
            </div>

        </div>

        <div class="tech">

            <div class="tech-card">
                Laravel
            </div>

            <div class="tech-card">
                Blade Templates
            </div>

            <div class="tech-card">
                MySQL Database
            </div>

        </div>

        <div class="footer">
            Crafted using <span>Laravel</span><br>
            The PHP Framework for Web Artisans
        </div>

    </div>

</div>

</body>
</html>