<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kode = $_POST['kode_pesawat'];
    $kelas = $_POST['kelas'];
    $jumlah = $_POST['jumlah'];
    $nama_pesawat = "";
    $harga = 0;
    if($kode == "GRD"){
      $nama_pesawat = "Garuda";
      if($kelas == "Eksekutif"){$harga = 1500000;}
      elseif($kelas == "Bisnis"){$harga = 900000;}
      else{$harga = 500000;}
    }
    elseif($kode == "MPT"){
      $nama_pesawat = "Merpati";
      if($kelas == "Eksekutif"){$harga = 1200000;}
      elseif($kelas == "Bisnis"){$harga = 800000;}
      else{$harga = 400000;}
    }
    elseif($kode == "BTV"){
      $nama_pesawat = "Batavia";
      if($kelas == "Eksekutif"){$harga = 1000000;}
      elseif($kelas == "Bisnis"){$harga = 700000;}
      else{$harga = 400000;}
    }
    $total = $harga * $jumlah;
    echo "<pre>";
    echo "==============================================<br>";
    echo "PEMESANAN TIKET ONLINE JAKARTA - MALAISYA <br>";
    echo "==============================================<br>";
    echo "Nama            : $nama <br>";
    echo "Nama Pesawat    : $nama_pesawat <br>";
    echo "Kelas           : $kelas <br>";
    echo "Harga Tiket     : $harga <br>";
    echo "Jumlah Tiket    : $jumlah <br>";
    echo "----------------------------------------------<br>";
    echo "Total Bayar     : $total <br>";
    echo "==============================================<br>";
    echo "</pre>";
}
?>
<button onclick="window.print()">Cetak Struk (PDF/Print)</button