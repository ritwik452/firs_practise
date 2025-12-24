<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            width: 420px;
            border-radius: 20px;
            padding: 35px;
            background: #ffffff;
            box-shadow: 0px 8px 25px rgba(0,0,0,0.15);
        }
        .register-card h3 {
            font-weight: 700;
            color: #4f46e5;
        }
        .role-box {
            display: flex;
            gap: 10px;
        }
        .role-box label {
            flex: 1;
            background: #f3f4f6;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .role-box input:checked + label {
            border-color: #4f46e5;
            background: #eef2ff;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h3 class="text-center mb-4">Create Account</h3>

    <form>
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" />
        </div>

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" placeholder="Enter your email" />
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter password" />
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Re-enter password" />
        </div>

        <div class="mb-2"><strong>Select Role</strong></div>
        <div class="role-box mb-3">
            <input type="radio" id="admin" name="role" value="admin" hidden>
            <label for="admin">Admin</label>

            <input type="radio" id="author" name="role" value="author" hidden>
            <label for="author">Author</label>

            <input type="radio" id="user" name="role" value="user" hidden checked>
            <label for="user">User</label>
        </div>

        <button class="btn btn-primary w-100 py-2">Register</button>

        <div class="text-center mt-3">
            <small>Already have an account? <a href="#">Login</a></small>
        </div>
    </form>
</div>

</body>
</html>
