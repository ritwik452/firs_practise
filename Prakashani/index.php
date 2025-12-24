<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prokashani | Main Page</title>
    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background:#f1f5f9;
        }
        header{
            background:#0f172a;
            color:#fff;
            padding:20px 40px;
            text-align:center;
        }
        header h1{margin:0;}

        .container{
            padding:60px 40px;
        }
        .cards{
            display:grid;
            grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
            gap:30px;
            max-width:1000px;
            margin:auto;
        }
        .card{
            background:#fff;
            border-radius:10px;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
            padding:30px;
            text-align:center;
        }
        .card h2{
            margin-bottom:10px;
        }
        .card p{
            color:#555;
            font-size:15px;
            margin-bottom:20px;
        }
        .card a{
            display:inline-block;
            padding:12px 25px;
            background:#2563eb;
            color:#fff;
            text-decoration:none;
            border-radius:6px;
            font-weight:bold;
        }
        .card a:hover{background:#1d4ed8;}

        footer{
            margin-top:60px;
            background:#0f172a;
            color:#fff;
            text-align:center;
            padding:15px;
        }
    </style>
</head>
<body>

<header>
    <h1>📘 Welcome to Prokashani</h1>
    <p>Online Publication Management System</p>
</header>

<div class="container">
    <div class="cards">

        <!-- Admin Card -->
        <div class="card">
            <h2>👑 Admin</h2>
            <p>Manage authors, books and users of the system.</p>
            <a href="admin/admin_login/login.php">Admin Login</a>
        </div>

        <!-- Author Card -->
        <div class="card">
            <h2>✍️ Author</h2>
            <p>Publish your books and track your sales easily.</p>
            <a href="author/login.php">Author Login / Register</a>
        </div>

        <!-- User Card -->
        <div class="card">
            <h2>👤 User</h2>
            <p>Explore, purchase and read amazing books.</p>
            <a href="user/login.php">User Login / Register</a>
        </div>

    </div>
</div>

<footer>
    <p>© 2025 Prokashani. All rights reserved.</p>
</footer>

</body>
</html>