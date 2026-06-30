<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login JWT</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">

<div class="card p-4 shadow" style="width: 350px;">
    <h3 class="text-center mb-3">Login</h3>

    <div id="alert"></div>

    <input type="email" id="email" class="form-control mb-2" placeholder="Email">
    <input type="password" id="password" class="form-control mb-3" placeholder="Password">

    <button onclick="login()" class="btn btn-primary w-100">Login</button>
</div>

<script>
function login() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    fetch('/api/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email, password })
    })
    .then(res => res.json())
    .then(data => {
        if (data.access_token) {
            localStorage.setItem('token', data.access_token);

            document.getElementById('alert').innerHTML =
                `<div class="alert alert-success">Login berhasil!</div>`;

            setTimeout(() => {
                window.location.href = '/dashboard';
            }, 1000);
        } else {
            document.getElementById('alert').innerHTML =
                `<div class="alert alert-danger">Login gagal!</div>`;
        }
    })
}
</script>

</body>
</html>