<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pelayanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan Nik" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Jenis Pelayanan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_pelayanan" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Pelayanan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan tanggal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan"class="form-control" id="inputEmail3" placeholder="Inputkan keterangan" required>
                            </div>
                        </div>

                        


                        <!--Status-->

                       
                        <!--Akhir Status-->

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan Pelayanan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pelayanan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pelayanan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
if($_POST){
    //Ambil data dari form
    $nama=$_POST['nama'];
    $nik=$_POST['nik'];
	$jenis_pelayanan=$_POST['jenis_pelayanan'];
	$tanggal=$_POST['tanggal'];
	$keterangan=$_POST['keterangan'];
  
	
    //buat sql
    $sql="INSERT INTO pelayanan VALUES ('','$nama','$nik','$jenis_pelayanan','$tanggal','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan pelayanan Error".$sql);
    if ($query){
        echo "<script>window.location.assign('?page=pelayanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

