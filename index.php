<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARANG</title>
</head>

<body>
<header>
    <h1>Table Database BARANG</h1>
</header>
    <div class="header">
        <div class="main"></div>
    </div>
        <h2>Tabel BARANG</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>id barang</th>
                    <th>id kategori</th>
                    <th>nama barang</th>
                    <th>harga</th>
                    <th>stok</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM barang';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_barang']?></td>
                        <td><?php echo $row['id_kategori']?></td>
                        <td><?php echo $row['nama_barang']?></td>
                        <td><?php echo $row['harga']?></td>
                        <td><?php echo $row['stok']?></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
        </table>
        
        <h2>Table Penjualan</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID Pelanggan</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Transaksi</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM penjualan';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['id_penjualan']?></td>
                        <td><?php echo $row['id_pelanggan']?></td>
                        <td><?php echo $row['tgl_transaksi']?></td>
                        <td><?php echo $row['total_transaksi']?></td>
                    </tr>
                </tbody>
                <?php
            }   
            ?>            
        </table>
    
        <h2>Table Pelanggan</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID PELANGGAN</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM pelanggan';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_barang']?></td>
                        <td><?php echo $row['id_penjualan']?></td>
                        <td><?php echo $row['id_pelanggan']?></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>        
        </table>
        <br>
        <br>
    <footer>
        <p>&copy; 2021 - Universitas pelita bangsa Fakultas Teknik Informatika</p>
    </footer
</body>    
</html>