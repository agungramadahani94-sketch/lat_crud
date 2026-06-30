<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Absensi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Dashboard Absensi</h2>

    <div class="mb-3">
        <button onclick="getData()" class="btn btn-primary">Ambil Data</button>
        <button onclick="logout()" class="btn btn-danger">Logout</button>
    </div>

    <div id="alert"></div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <tr>
                <td colspan="3" class="text-center">Belum ada data</td>
            </tr>
        </tbody>
    </table>
</div>

<script>
function getData() {
    let token = localStorage.getItem('token');

    if (!token) {
        showAlert("Token tidak ada! Mengalihkan ke halaman login...", "danger");
        setTimeout(() => window.location.href = '/login-view', 1500);
        return;
    }

    fetch('/api/absensi', {
        method: 'GET',
        headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
        }
    })
    .then(res => {
        if (res.status === 401) {
            // Token salah/expired -> hapus token & lempar ke login
            localStorage.removeItem('token');
            showAlert("Sesi habis / token tidak valid. Mengalihkan ke login...", "danger");
            setTimeout(() => window.location.href = '/login-view', 1500);
            throw new Error('Unauthorized');
        }
        return res.json();
    })
    .then(data => {
        let tbody = document.getElementById('tableBody');
        tbody.innerHTML = "";

        if (!Array.isArray(data) || data.length === 0) {
            tbody.innerHTML = `<tr><td colspan="3" class="text-center">Data kosong</td></tr>`;
            return;
        }

        data.forEach(item => {
            tbody.innerHTML += `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.nama}</td>
                    <td>${item.status}</td>
                </tr>
            `;
        });
    })
    .catch(err => {
        console.log(err);
    });
}

function logout() {
    let token = localStorage.getItem('token');

    fetch('/api/logout', {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
        }
    }).finally(() => {
        localStorage.removeItem('token');
        window.location.href = '/login-view';
    });
}

function showAlert(message, type) {
    document.getElementById('alert').innerHTML =
        `<div class="alert alert-${type}">${message}</div>`;
}

// AUTO LOAD SAAT MASUK DASHBOARD
window.onload = getData;
</script>

</body>
</html>