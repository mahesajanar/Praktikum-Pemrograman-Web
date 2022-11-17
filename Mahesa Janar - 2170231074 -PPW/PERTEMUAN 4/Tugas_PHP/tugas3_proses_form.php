<html>

<head>
    <title>Tugas 3 Proses Form PHP</title>
    <!-- Ali Rosi NIM 2170231033 -->
    <style>
        fieldset {
            margin: auto;
            text-align: center;
            width: 500px;
            background-color: azure;
        }
    </style>
</head>

<body>
    <fieldset>
        <?php
        // Pemanggilan Nama
        $nama = $_GET['nama'];
        echo "<h2><b>Nama : $nama</b></h2>";
        // Pemanggilan Email
        $email = $_GET['email'];
        echo "<h2><b>Email : $email</b></h2>";
        // Jam/Waktu Login
        date_default_timezone_set('Asia/Jakarta');
        $jam = date("H:i:s");
        echo "<b>Login pada jam :$jam</b><br>";
        echo date("<b>l, d-M-Y</b>");
        ?>
    </fieldset>
</body>

</html>