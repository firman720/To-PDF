<?php
    include"../config.php";
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=data-siswa.xls");
?>
    <h3>Laporan Data Siswa</h3>
    <p>Ini merupakan data seluruh siswa</p>
    <table class="table1">
        <tr>
            <th width="5%">No</th>
            <th width="40%">Nama</th>
            <th width="20%">Usia</th>
            <th width="10%">Kelas</th>
        </tr>
        <?php
            $sql = "SELECT * FROM siswa";
            $run = mysql_query($sql);
            while ($siswa = mysql_fetch_array($run)) {
                $no++;
        ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $siswa['nama']; ?></td>
                    <td><?php echo $siswa['umur']; ?> Tahun</td>
                    <td><?php echo $siswa['kelas']; ?></td>
                </tr>
        <?php }$no=0; ?>
    </table>