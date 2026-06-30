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
// Bersihkan token lama setiap kali halaman login dibuka,
// supaya tidak ada token kadaluarsa nyangkut.
localStorage.removeItem('token');

function showAlert(message, type) {
    document.getElementById('alert').innerHTML =
        `<div class="alert alert-${type}">${message}</div>`;
}

function login() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    if (!email || !password) {
        showAlert('Email dan password wajib diisi', 'warning');
        return;
    }

    fetch('/api/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({ email, password })
    })
    .then(async res => {
        const data = await res.json();
        if (!res.ok) {
            // Tampilkan pesan error asli dari server (401, 422, dll)
            throw data.message || 'Login gagal';
        }
        return data;
    })
    .then(data => {
        if (data.access_token) {
            localStorage.setItem('token', data.access_token);
            showAlert('Login berhasil!', 'success');

            setTimeout(() => {
                window.location.href = '/dashboard';
            }, 800);
        } else {
            showAlert('Login gagal: token tidak diterima', 'danger');
        }
    })
    .catch(err => {
        console.log(err);
        showAlert(typeof err === 'string' ? err : 'Terjadi kesalahan saat login', 'danger');
    });
}
</script>

</body>
</html>