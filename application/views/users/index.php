<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Pengguna</h2>
    <a href="<?= site_url('users/create') ?>" class="btn btn-primary mb-3">Tambah Pengguna</a>
    
    <table id="usersTable" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Kota</th>
                <th>Jalan</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->firstname . ' ' . $user->lastname ?></td>
                    <td><?= $user->city ?></td>
                    <td><?= $user->street . ' No. ' . $user->number ?></td>
                    <td><?= $user->phone ?></td>
                    <td>
                        <a href="<?= site_url('users/edit/'.$user->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('users/delete/'.$user->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
        $('#usersTable').DataTable();
    });
</script>

</body>
</html>
