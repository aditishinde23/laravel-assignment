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
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#fafafa,#f3f4f6);
    overflow:hidden;
    position:relative;
}

body::before{
    content:'';
    position:absolute;
    width:600px;
    height:600px;
    background:#ff2d20;
    border-radius:50%;
    top:-250px;
    right:-150px;
    opacity:.08;
}

body::after{
    content:'';
    position:absolute;
    width:450px;
    height:450px;
    background:#ff2d20;
    border-radius:50%;
    bottom:-200px;
    left:-120px;
    opacity:.05;
}

.card{
    width:850px;
    padding:60px;
    background:rgba(255,255,255,.9);
    backdrop-filter:blur(18px);
    border-radius:30px;
    box-shadow:0 25px 60px rgba(0,0,0,.12);
    position:relative;
    z-index:2;
}

.brand{
    color:#ff2d20;
    font-size:20px;
    font-weight:600;
    letter-spacing:1px;
}

.title{
    margin-top:25px;
    font-size:58px;
    font-weight:700;
    color:#1f2937;
}

.title span{
    color:#ff2d20;
}

.subtitle{
    margin-top:18px;
    color:#6b7280;
    line-height:1.9;
    font-size:16px;
}

.info{
    display:flex;
    gap:25px;
    margin-top:50px;
}

.box{
    flex:1;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 6px 20px rgba(0,0,0,.08);
    transition:.3s;
}

.box:hover{
    transform:translateY(-5px);
}

.label{
    color:#ff2d20;
    font-size:13px;
    font-weight:600;
    letter-spacing:2px;
}

.value{
    margin-top:12px;
    font-size:24px;
    font-weight:600;
    color:#111827;
}

.stack{
    margin-top:45px;
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.pill{
    background:white;
    padding:14px 24px;
    border-radius:50px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
    color:#555;
    font-size:15px;
    transition:.3s;
}

.pill:hover{
    background:#ff2d20;
    color:white;
}

.divider{
    margin-top:50px;
    border-top:1px solid #e5e7eb;
}

.footer{
    margin-top:25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.department{
    color:#4b5563;
    font-size:15px;
}

.caption{
    color:#ff2d20;
    font-weight:500;
}

@media(max-width:900px){

.card{
    width:95%;
    padding:40px;
}

.title{
    font-size:42px;
}

.info{
    flex-direction:column;
}

.footer{
    flex-direction:column;
    gap:15px;
    text-align:center;
}

}

</style>
</head>
<body>

<div class="card">

    <div class="brand">
        Laravel Herd
    </div>

    <div class="title">
        Laravel <span>Assignment</span>
    </div>

    <div class="subtitle">
        Customized homepage developed using Laravel Herd, Blade Templates and MySQL.
        Database migrations have been configured successfully, demonstrating a clean
        and modern web interface built with Laravel.
    </div>

    <div class="info">

        <div class="box">
            <div class="label">NAME</div>
            <div class="value">Aditi Shinde</div>
        </div>

        <div class="box">
            <div class="label">ROLL NUMBER</div>
            <div class="value">5024158</div>
        </div>

    </div>

    <div class="stack">

        <div class="pill">Laravel Herd</div>

        <div class="pill">Blade Templates</div>

        <div class="pill">PHP</div>

        <div class="pill">MySQL</div>

        <div class="pill">Git & GitHub</div>

    </div>

    <div class="divider"></div>

    <div class="footer">

        <div class="department">
            Department of Computer Engineering
        </div>

        <div class="caption">
            The PHP Framework for Web Artisans
        </div>

    </div>

</div>

</body>
</html>