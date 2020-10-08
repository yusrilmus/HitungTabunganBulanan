<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
</html>
<body>
			<div class="jumbotron" style="color:white;text-align:center;background-color:DarkCyan">
			  <h1>Mari Menabung dengan Pengelolaan keunganmu!</h1>
			  <p></p>
			</div>

			<div class="form row pt-5 pb-5" style="background-color:DarkCyan">
				  <div class="col-sm-2"></div>
				  <div class="col-sm-8">
					<div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Menghitung sisa uang gajian perbulan</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="" method="POST">
                                <fieldset>
                                    <label for="nama" class="mb-0">Nama</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="nama" id="nama" class="form-control" required="">
                                        </div>
                                    </div>
                                    <label for="gaji" class="mb-0">Total Gaji Perbulan</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="gaji" id="gaji" class="form-control" required="" placeholder="Hanya Inputan Angka yang dibolehkan, Ex :1000000" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                        </div>
                                    </div>
                                    <label for="jajan" class="mb-0">Pengeluaran Uang jajan</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="jajan" id="jajan" class="form-control" required="" placeholder="Hanya Inputan Angka yang dibolehkan, Ex :1000000" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                        </div>
                                    </div>
                                    <label for="keperluan" class="mb-0">Belanjaan Keperluan</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="keperluan" id="keperluan" class="form-control" required="" placeholder="Hanya Inputan Angka yang dibolehkan, Ex :1000000" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                        </div>
                                    </div>
                                    <label for="lain" class="mb-0">Pengeluaran lain-lainnya (Bayar kost, cicilan, listrik, sedekah, dll)</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="lain" id="lain" class="form-control" required="" placeholder="Hanya Inputan Angka yang dibolehkan, Ex :1000000" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                        </div>
                                    </div>
                                    
                                <button type="submit" name="identitas" style="align:center">Kirim Data</button>  
                            </form><BR><HR><BR>
                            <?php
                                  if(!empty($_POST)) {
                                  $nama = $_POST['nama'];
                                  $gaji = $_POST['gaji'];
                                  $jajan = $_POST['jajan'];
                                  $keperluan = $_POST['keperluan'];
                                  $lain = $_POST['lain'];
                                  echo "Nama : " .$nama. "<br> Gaji Perbulan : Rp." .$gaji. "<br> Uang jajan Perbulan : Rp.". $jajan .
                                  "<br> Uang Belanjaan Keperluan : Rp.".$keperluan. "<br> Uang Keperluan Lainnya : Rp.". $lain."<br><br>";
                                  
                                  echo "<br>". countSalary($nama, $gaji, $jajan, $keperluan, $lain);
                                  }else echo "Belum ada data yang dipost";         

                                  //fungsi
                                  function countSalary($nama, $gaji, $jajan, $keperluan, $lain){
                                     $total = $gaji - $jajan - $keperluan - $lain;
                                     if ($total <= 200000) {
                                       return "<b>Hy ".$nama. "</b>, Sisa gaji kamu : <i><b>Rp.".$total. "</b></i>. <br><br>".penabungKurang();
                                     }
                                     elseif ($total >= 200000) {
                                       return "<b>Hy ".$nama. "</b>, Sisa gaji kamu : <i><b>Rp.".$total. "</b></i>. <br><br>".penabungCerdas();
                                     }
                                    
                                  }


                                  //procedure
                                  function penabungCerdas(){
                                    echo "Management keunganmu bagus, <b><i>Pertahankan yah!</b></i>";
                                  }  
                                  function penabungKurang(){
                                    echo "Management Keuanganmu perlu ditingkatkan, Tabunganmu kurang, <b><i>Tingkatkan Yah!!!</b></i>";
                                  }



                            ?> 
                                                    
                        </div>
                    </div>
                  </div>
  				<div class="col-sm-2"></div>
    		</div>

</body>
</html>

  