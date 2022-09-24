<?php
 // menghubungkan file data json ke dalam file php
 $berkas = "js/data.json";
 $dataJson = file_get_contents($berkas);
 $dataPengunjung = json_decode($dataJson, true);

 // data array lokasi wisata
 $wisata = [
	 "Kediri Water Park",
	 "Goa Selomangleng",
	 "Museum Fotografi"
 ];

 // data array daftar harga tiket dewasa
 $tiketDewasa = [
	 "Kediri Water Park" => 50000,
	 "Goa Selomangleng" => 20000,
	 "Museum Fotografi" => 30000
 ];

 // data array daftar harga tiket anak
 $tiketAnak = [
	 "Kediri Water Park" => 25000,
	 "Goa Selomangleng" => 10000,
	 "Museum Fotografi" => 15000
 ];


 // fungsi mendapatkan harga tiket dewasa
 function hargaTiketDewasa($harga){
	 global $tiketDewasa;
	 foreach($tiketDewasa as $tiket1 => $value_tiket1){
		 if($harga == $tiket1){
			 return $value_tiket1;
		 }
	 }
 }

 // fungsi mendapatkan harga tiket anak
 function hargaTiketAnak($harga){
	 global $tiketAnak;
	 foreach($tiketAnak as $tiket2 => $value_tiket2){
		 if($harga == $tiket2){
			 return $value_tiket2;
		 }
	 }
 }
  
  // fungsi untuk membuat format angka pada harga tiket menjadi rupiah
  function rupiahHargaTiket($harga){
	$harga1 = "Rp ".number_format($harga, 0, ",", ".");
	return $harga1;
}

  // fungsi untuk membuat format angka pada total bayar menjadi rupiah
  function rupiahTotalBayar($harga){
	 $harga2 = "Rp ".number_format($harga, 0, ",", ".");
	 return $harga2;
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>
      Form Pemesanan
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container">
    
        <br>
        <a href="index.php" style="text-decoration: none;"><button class="btn btn-outline-danger btn-sm">Kembali ke halaman sebelumnya</button></a>
        <br><br>
        <form action="" method="post" class="shadow p-3 mb-5 rounded" style='padding: 50px; border-radius: 10px; background-color: #E6F3D0;'>
            <h2>Form Pemesanan</h2>
            <br>                          
            <?php
                // untuk menampung inputan userd dan menghitung total bayar
                $nama = "";
                $noIdentitas = "";
                $noHp = "";
                $wisata1 = "";
                $tanggal = "";
                $pDewasa1 = "";
                $pAnak1 = "";
                $rpHargaTiket1 = "";
                $totalBayar= "";
                                                
                if(isset($_POST['hitung'])){
                    $nama = $_POST['namalengkap'];
                    $noIdentitas = $_POST['noidentitas'];
                    $noHp = $_POST['nohp'];  
                    $wisata1 = $_POST['wisata'];
                    $tanggal = $_POST['tanggal'];
                    $pDewasa1 = $_POST['dewasa'];
                    $pAnak1 = $_POST['anak'];
                    $hargaTiketD1 = hargaTiketDewasa($wisata1);
                    $hargaTiketA1 = hargaTiketAnak($wisata1);
                    $totalBayar1 = ($hargaTiketD1 * $pDewasa1) + ($hargaTiketA1 * $pAnak1);
                    $rpHargaTiket1 = rupiahHargaTiket($hargaTiketD1);
                    $rpTotalBayar1 = rupiahTotalBayar($totalBayar1);
                    if($totalBayar1 > 1){
                        $totalBayar = $rpTotalBayar1;
                    } else {
                        $totalBayar = "404";
                    }          
                }
            ?>
                
                 <!-- untuk menampilkan seluruh hasil hasil inputan user ke dalam input -->
                 <!-- menghandle agar inputan tetap terisi sesuai inputan user, dan juga agar memudahkan user untuk langsung klik pesan tiket, tanpa harus menulis ulang inputan -->

                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>Nama Lengkap</label>
                    <div class='col-sm-7'>
                    <input type='text' class='form-control' name='namalengkap' value="<?php echo $nama; ?>" required>
                </div>
                </div>

                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>Nomor Identitas</label>
                    <div class='col-sm-7'>
                        <input type='text' class='form-control' minlength="16" maxlength="16" name='noidentitas' value="<?php echo $noIdentitas; ?>">
                    </div>
                </div>       	

                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>No. HP</label>
                    <div class='col-sm-7'>
                        <input type='text' class='form-control' maxlength='12' minlength="12" name='nohp' value="<?php echo $noHp; ?>">
                    </div>
                </div>
                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>Tempat Wisata</label>
                    <div class='col-sm-7'>
                        <select type='select' class='form-select' name='wisata'>
                            <option value="<?php echo $wisata1; ?>"><?php echo $wisata1; ?></option>
                                <?php
                                    foreach ($wisata as $ws){
                                        echo "<option value='".$ws."'>".$ws."</option>";
                                    }
                                ?>                                     
                        </select>
                    </div>
                </div>        	

                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>Tanggal Kunjungan</label>
                    <div class='col-sm-7'>
                        <input type='date' class='form-control' name='tanggal' value="<?php echo $tanggal; ?>" required>
                    </div>
                </div>    
            
                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>Pengunjung Dewasa</label>
                    <div class='col-sm-7'>
                        <input type='text' class='form-control' name='dewasa' value="<?php echo $pDewasa1; ?>" required>
                    </div>
                </div>

                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label' style='margin-top: -8px;font-size: 15px;'>Pengunjung Anak-Anak</label>
                    <div class='col-sm-7'>
                        <input type='text' class='form-control' name='anak' value="<?php echo $pAnak1; ?>" required>
                    </div>
                    <div class='form-text' style='margin-top: -20px;'>Usia di bawah 12 tahun</div>
                </div>

                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>Harga Tiket</label>
                    <div class='col-sm-7'>
                        <input type='text' class='form-control-plaintext' name='hargatiket' value="<?php echo $rpHargaTiket1; ?>" readonly>
                    </div>
                </div>
                
                <div class='mb-3 row'>
                    <label class='col-sm-2 col-form-label'>Total Bayar</label>
                    <div class='col-sm-7'>
                        <input type='text' class='form-control-plaintext' readonly name='totalbayar' value="<?php echo $totalBayar; ?>">
                    </div>
                </div>
                                
            <!-- membuat checkbox untuk membuktikan bahwa user setuju dengan ketentuan yang tertera -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1" >Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
            </div>
            <br>

            <!-- button untuk memerintah hitung total bayar, pesan tiket, dan membatalkan pesanan -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="hitung">Hitung Total Bayar</button>
                <button type="submit" class="btn btn-success" name="pesan" style="margin: 0 60px; padding: 6px 37px;" >Pesan Tiket</button>
                <a href="<?php $_SERVER['PHP_SELF']; ?>" style="text-decoration: none;"><button type="button" class="btn btn-secondary" style="padding: 6px 55px;">Cancel</button></a>
            </div>
            
        </form>
        <br>
         <!-- untuk mengirimkan dan menyimpan data ke dalam data json -->
        <?php
                            
            if (isset($_POST['pesan'])){
                    $nama = $_POST['namalengkap'];
                    $noIdentitas = $_POST['noidentitas'];
                    $noHp = $_POST['nohp'];  
                    $wisata = $_POST['wisata'];
                    $pDewasa = $_POST['dewasa'];
                    $pAnak = $_POST['anak'];
                    $hargaTiket = $_POST['hargatiket'];
                    $totalBayar = $_POST['totalbayar'];

                    $dataAll = [
                        $nama, $noIdentitas, $noHp, $wisata, $pDewasa, $pAnak, $hargaTiket, $totalBayar
                    ];
                    array_push($dataPengunjung, $dataAll);
                    $dataJson = json_encode($dataPengunjung, JSON_PRETTY_PRINT);
                    file_put_contents($berkas, $dataJson); 
                    
                    // untuk menampilkan bukti pemesanan sesuai inputan user
                    echo "<div class='text-center'>
                    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Lihat Bukti Pemesanan</button>
                    </div>";

                    echo "<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>Bukti Pemesanan</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body' >
                                    <ul style='list-style: none;'>
                                        <li><pre>Nama Pemesan           : <b>$nama</b></pre></li>
                                        <li><pre>Nomor Identitas        : <b>$noIdentitas</b></pre></li>
                                        <li><pre>No. HP                 : <b>$noHp</b></pre></li>
                                        <li><pre>Tempat Wisata          : <b>$wisata</b></pre></li>
                                        <li><pre>Pengunjung Dewasa      : <b>$pDewasa</b> orang</pre></li>
                                        <li><pre>Pengunjung Anak - Anak : <b>$pAnak</b> orang</pre></li>
                                        <li><pre>Harga Tiket            : <b>$hargaTiket</b></pre></li>
                                        <li><pre>Total Bayar            : <b>$totalBayar</b></pre></li>
                                    </ul>
                                </div>
                                <div class='modal-footer'>
                                    <i>Ambil Screenshot untuk bukti bahwa anda sudah memesan tiket!</i>
                                </div>
                                </div>
                            </div>
                        </div>";
                    }                   
        ?>
        <br>       
	<script src="js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>