<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Pengguna</h2>
    <form action="<?= site_url('users/store') ?>" method="post">
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Depan:</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Belakang:</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kota:</label>
            <input type="text" name="city" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jalan:</label>
            <input type="text" name="street" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nomor Rumah:</label>
            <input type="number" name="number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kode Pos:</label>
            <input type="number" name="postcode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No. HP:</label>
            <input type="number" name="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= site_url('users') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
