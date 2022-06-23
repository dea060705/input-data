<h3> PHP Tampilan </h3>
<br>
<form method="post">
    <table>
            <tr>
                <td>Dari tanggal</td>
                <td><input type="date" name="dari_tgl" required="required"></td>
                <td>Sampai tanggal</td>
                <td><input type="date" name="sampai_tgl" required="required"></td>
                <td><input type="submit" class="btn btn-primary"
                name="filter" value="Filter"></td>
            </tr>
    </table>
</form>
<br><br>
<?php
include "koneksi.php";
if (isset($_POST['filter'])) {
    $dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
    $sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
    echo "Dari tanggal " .$dari_tgl. " Sampai tanggal " .$sampai_tgl;
}
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>TMA</th>
        <th>Suhu</th>
        <th>Teg_solar</th>
        <th>ANS_solar</th>
        <th>Teg_battery</th>  
        <th>ANS_battery</th>
        <th>Date</th>
    </tr>
    
    <?php

    include "koneksi.php";
    $no=1; 
    if (isset($_POST['filter'])) {
        $dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
        $sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
        $ambildata = mysqli_query($koneksi,"SELECT * FROM monitoring_awlr WHERE Date BETWEEN '$dari_tgl' AND '$sampai_tgl'");
    }else{
    $ambildata = mysqli_query($koneksi,"SELECT * FROM monitoring_awlr");
    }
    while ($tampil = mysqli_fetch_array($ambildata)){

    echo"
    <tr>
        <td>$no</td>
        <td>$tampil[TMA]</td>
        <td>$tampil[Suhu]</td>
        <td>$tampil[Teg_solar]</td>
        <td>$tampil[ANS_solar]</td>
        <td>$tampil[Teg_battery]</td>
        <td>$tampil[ANS_battery]</td>
        <td>$tampil[Date]</td>
    </tr>";

    $no++;
    
    }   
    ?>

</form>
</table>
<br>
    <form method="post" action="export.php">
       <input type="submit" name="export" class="btn btn-success" value="Export to Excel" />
    </form>
</br>