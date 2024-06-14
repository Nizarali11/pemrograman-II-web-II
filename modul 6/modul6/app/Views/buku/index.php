<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
     body {
    background: linear-gradient(135deg, #1c1c1c, #444);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Changed font to a more modern one */
    margin: 0;
    animation: gradientBackground 5s ease infinite;
}

.container {
    max-width: 960px;
    margin: 20px auto;
    padding: 20px;
    background: linear-gradient(135deg, #444, #888);
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    animation: gradientContainer 5s ease infinite;
}

h1, h2 {
    font-size: 28px;
    color: #fff;
    font-weight: bold; /* Added font weight for emphasis */
    text-transform: uppercase; /* Uppercase for a sleek look */
}

p {
    font-size: 16px;
    color: #ddd;
    line-height: 1.5; /* Increased line height for better readability */
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    color: #fff;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-info {
    background-color: #17B84F;
}

.btn-warning {
    background-color: #ffc107;
    color: #333;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #333;
    color: #fff;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #555;
}

th {
    background-color: #444;
}

/* Responsive styles */
@media (max-width: 576px) {
    .container {
        padding: 10px;
    }
    
    h1, h2 {
        font-size: 24px;
    }
    
    p {
        font-size: 14px;
    }
    
    .btn {
        font-size: 12px;
        padding: 6px 12px;
    }
    
    table {
        font-size: 12px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1>Selamat Datang di Perpustakaan nizar</h1>
                <p>Ini adalah halaman pertama</p>
            </div>
            <div class="col text-end">
                <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <!-- create list of books -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Buku</h2>
                <a class="btn btn-info mb-2" href="<?= base_url('/buku/create') ?>">Tambah Data</a>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($buku as $key => $value): ?>
                            <tr>
                                <td><?= $value['judul'] ?></td>
                                <td><?= $value['penulis'] ?></td>
                                <td><?= $value['penerbit'] ?></td>
                                <td><?= $value['tahun_terbit'] ?></td>
                                <td> 
                                    <!-- Edit button -->
                                    <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <!-- Delete button -->
                                    <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>             
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
