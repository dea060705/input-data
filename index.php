<?php
include 'koneksi.php';

if (isset($_POST['save'])) {
    // $no = mysqli_real_escape_string($koneksi, $_POST['no']);
    $tma = mysqli_real_escape_string($koneksi, $_POST['tma']);
    $suhu = mysqli_real_escape_string($koneksi, $_POST['suhu']);
    $teg_solar = mysqli_real_escape_string($koneksi, $_POST['teg_solar']);
    $ans_solar = mysqli_real_escape_string($koneksi, $_POST['ans_solar']);
    $teg_batery = mysqli_real_escape_string($koneksi, $_POST['teg_battery']);
    $ans_battery = mysqli_real_escape_string($koneksi, $_POST['ans_battery']);

    mysqli_query($koneksi,"INSERT INTO monitoring_awlr(TMA,Suhu,Teg_solar,ANS_Solar,Teg_battery,ANS_battery) VALUES('$tma','$suhu','$teg_solar','$ans_solar','$teg_solar','$ans_solar')");

    echo "<script>window.alert('data berhasil diinput...')
    window.location='index.php';</script>";

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>input data ke database</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <style type="text/css">
        body {
            font-family: sans-serif;
        }
        .page {
            width: 17em;
            margin: auto;
        }
    </style>
</head>
<body>
    
    <div class="page">
        <h1>input PHP</h1>
        <form action="" method="post">
            <table>
                <!-- <tr>
                    <th>no</th>
                    <td><input type="text" name="no" required="required"></td>
                </tr> -->
                <tr>
                    <th>TMA</th>
                    <td><input type="text" name="tma" required="required"></td>
                </tr>
                <tr>
                    <th>Suhu</th>
                    <td><input type="text" name="suhu" required="required"></td>
                </tr>
                <tr>
                    <th>Teg solar</th>
                    <td><input type="text" name="teg_solar" required="required"></td>
                </tr>
                <tr>
                    <th>Ans solar</th>
                    <td><input type="text" name="ans_solar" required="required"></td>
                </tr>
                <tr>
                    <th>Teg battery</th>
                    <td><input type="text" name="teg_battery" required="required"></td>
                </tr>
                <tr>
                    <th>Ans battery</th>
                    <td><input type="text" name="ans_battery" required="required"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="save" value="Input">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>