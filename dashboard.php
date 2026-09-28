<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"] ?? "Admin";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Bayu</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Fredoka:wght@400;500;600;700&display=swap');

*{margin:0;padding:0;box-sizing:border-box}

body{
    font-family:"Comic Neue",sans-serif;
    background:#fffaf0;
    color:#292929;
}

.dashboard{min-height:100vh}

.sidebar{
    position:fixed;
    width:240px;
    height:100vh;
    padding:28px 20px;
    background:#ffd84d;
    border-right:3px solid #292929;
    display:flex;
    flex-direction:column;
}

.logo{
    font-family:"Fredoka",sans-serif;
    font-size:27px;
    font-weight:700;
    padding-bottom:25px;
    border-bottom:3px solid #292929;
}

nav{
    display:flex;
    flex-direction:column;
    gap:12px;
    margin-top:28px;
}

nav a{
    padding:13px 15px;
    background:white;
    color:#292929;
    text-decoration:none;
    border:2px solid #292929;
    border-radius:10px;
    font-weight:700;
    transition:.2s;
}

nav a:hover,
nav a.active{
    background:#ff6478;
    transform:translateX(5px);
}

.logout{
    margin-top:auto;
    padding:14px;
    text-align:center;
    background:#292929;
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-weight:700;
}

.logout:hover{
    background:#ff6478;
    color:#292929;
}

.main{
    margin-left:240px;
    padding:35px 45px;
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.small{
    color:#777;
    font-size:12px;
    font-weight:bold;
    letter-spacing:2px;
}

h1,h2,h3{
    font-family:"Fredoka",sans-serif;
}

.topbar h1{
    font-size:36px;
    margin-top:5px;
}

.avatar{
    width:58px;
    height:58px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#b88cff;
    border:3px solid #292929;
    border-radius:50%;
    box-shadow:4px 4px 0 #292929;
    font-family:"Fredoka",sans-serif;
    font-size:23px;
    font-weight:bold;
}

.welcome{
    position:relative;
    overflow:hidden;
    padding:35px;
    background:#ff6478;
    border:3px solid #292929;
    border-radius:18px;
    box-shadow:7px 7px 0 #292929;
    margin-bottom:35px;
}

.label{
    display:inline-block;
    padding:6px 10px;
    background:white;
    border:2px solid #292929;
    border-radius:7px;
    font-size:11px;
    font-weight:bold;
}

.welcome h2{
    font-size:38px;
    margin:12px 0 5px;
}

.welcome p:last-child{
    font-size:17px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:22px;
    margin-bottom:35px;
}

.card{
    min-height:160px;
    padding:25px;
    border:3px solid #292929;
    border-radius:15px;
    box-shadow:7px 7px 0 #292929;
    transition:.2s;
}

.card:hover{
    transform:translateY(-5px);
}

.card span{
    font-size:12px;
    font-weight:bold;
    letter-spacing:1px;
}

.card h3{
    font-size:29px;
    margin-top:16px;
}

.card p{
    margin-top:5px;
}

.red{background:#ff6478}
.blue{background:#62bfff}
.yellow{background:#ffd84d}

.content-box{
    padding:30px;
    background:white;
    border:3px solid #292929;
    border-radius:16px;
    box-shadow:7px 7px 0 #292929;
}

.section-title{
    margin-bottom:28px;
}

.section-title span{
    color:#777;
    font-size:12px;
    font-weight:bold;
    letter-spacing:2px;
}

.section-title h2{
    font-size:29px;
    margin-top:5px;
}

.progress-item{
    margin-bottom:23px;
}

.progress-head{
    display:flex;
    justify-content:space-between;
    margin-bottom:8px;
}

.progress{
    height:19px;
    overflow:hidden;
    background:#eee9dc;
    border:2px solid #292929;
    border-radius:20px;
}

.progress-fill{
    height:100%;
}

.green{background:#72d66c}
.purple{background:#b88cff}

@media(max-width:900px){
    .cards{
        grid-template-columns:1fr;
    }
}

@media(max-width:700px){
    .sidebar{
        position:relative;
        width:100%;
        height:auto;
        border-right:0;
        border-bottom:3px solid #292929;
    }

    nav{
        display:grid;
        grid-template-columns:1fr 1fr;
    }

    .logout{
        margin-top:20px;
    }

    .main{
        margin-left:0;
        padding:25px 18px;
    }

    .topbar h1{
        font-size:28px;
    }
}
</style>
</head>

<body>

<div class="dashboard">

<aside class="sidebar">

<div class="logo">PORTFOLIO</div>

<nav>
<a href="dashboard.php" class="active">Dashboard</a>
<a href="portfolio.php">Portfolio</a>
<a href="portfolio.php#about">About</a>
<a href="portfolio.php#skills">Skills</a>
<a href="portfolio.php#creations">Projects</a>
</nav>

<a href="logout.php" class="logout">Logout</a>

</aside>

<main class="main">

<header class="topbar">

<div>
<p class="small">DASHBOARD</p>
<h1>Halo, <?= htmlspecialchars($username) ?>!</h1>
</div>

<div class="avatar">
<?= strtoupper(substr($username,0,1)) ?>
</div>

</header>

<section class="welcome">

<p class="label">WELCOME BACK</p>

<h2>Portfolio Dashboard</h2>

<p>Kelola dan lihat informasi portfolio kamu dari halaman ini.</p>

</section>

<section class="cards">

<div class="card red">
<span>PROFILE</span>
<h3>Bayu</h3>
<p>Frontend Developer</p>
</div>

<div class="card blue">
<span>SKILLS</span>
<h3>3 Skills</h3>
<p>HTML, CSS, JavaScript</p>
</div>

<div class="card yellow">
<span>PROJECTS</span>
<h3>3 Projects</h3>
<p>Portfolio dan project lainnya</p>
</div>

</section>

<section class="content-box">

<div class="section-title">
<span>LEARNING PROGRESS</span>
<h2>Progress Belajar</h2>
</div>

<div class="progress-item">
<div class="progress-head">
<strong>Frontend</strong>
<strong>80%</strong>
</div>
<div class="progress">
<div class="progress-fill green" style="width:80%"></div>
</div>
</div>

<div class="progress-item">
<div class="progress-head">
<strong>UI/UX</strong>
<strong>75%</strong>
</div>
<div class="progress">
<div class="progress-fill purple" style="width:75%"></div>
</div>
</div>

<div class="progress-item">
<div class="progress-head">
<strong>JavaScript</strong>
<strong>65%</strong>
</div>
<div class="progress">
<div class="progress-fill blue" style="width:65%"></div>
</div>
</div>

</section>

</main>

</div>

</body>
</html>