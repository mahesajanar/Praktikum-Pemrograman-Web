<html>

<head>
    <title>Tugas 3 Form PHP Ali Rosi</title>
    <!-- Ali Rosi NIM 2170231033 -->
    <style>
        fieldset {
            margin: auto;
            text-align: center;
            width: 250px;
            background-color: azure;
        }
    </style>
</head>

<body>
    <fieldset>
        <form method="GET" action="tugas3_proses_form.php">
            <br>
            <label>Name</label>
            <input type="text" name="nama" placeholder="Masukan Nama Anda" required /><br /><br />
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukan Email Anda" required /><br /><br />
            <button type="Submit">Login</button>
            <button type="reset">Reset</button>
        </form>
    </fieldset>
</body>

</html>