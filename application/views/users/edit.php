<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Pengguna</h2>
    <form action="<?= site_url('users/update/'.$user->id) ?>" method="post">
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="<?= $user->email ?>" required>
        </div>
        <div class="mb-3">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" value="<?= $user->username ?>" required>
        </div>
        <div class="mb-3">
            <label>Password (Kosongkan jika tidak ingin diubah):</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama Depan:</label>
            <input type="text" name="firstname" class="form-control" value="<?= $user->firstname ?>" required>
        </div>
        <div class="mb-3">
            <label>Nama Belakang:</label>
            <input type="text" name="lastname" class="form-control" value="<?= $user->lastname ?>" required>
        </div>
        <div class="mb-3">
            <label>Kota:</label>
            <input type="text" name="city" class="form-control" value="<?= $user->city ?>" required>
        </div>
        <div class="mb-3">
            <label>Jalan:</label>
            <input type="text" name="street" class="form-control" value="<?= $user->street ?>" required>
        </div>
        <div class="mb-3">
            <label>Nomor Rumah:</label>
            <input type="number" name="number" class="form-control" value="<?= $user->number ?>" required>
        </div>
        <div class="mb-3">
            <label>Kode Pos:</label>
            <input type="number" name="postcode" class="form-control" value="<?= $user->postcode ?>" required>
        </div>
        <div class="mb-3">
            <label>No. HP:</label>
            <input type="number" name="phone" class="form-control" value="<?= $user->phone ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="<?= site_url('users') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
