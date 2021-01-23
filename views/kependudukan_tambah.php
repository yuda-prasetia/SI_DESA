<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_surat" class="form-control" id="inputEmail3" placeholder="Inputkan nomor surat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nomor KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_kk" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor KK" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Kepala Keluarga</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepala_keluarga" class="form-control" id="inputEmail3" placeholder="Inputkan Kepala Keluarga" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="Inputkan jumlah keluarga" required>
                            </div>
                        </div>
                        

                        


                        <!--Status-->

                       
                        <!--Akhir Status-->

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan Penduduk</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kependudukan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penduduk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    
    $nomor_surat=$_POST['nomor_surat'];
	$nomor_kk=$_POST['nomor_kk'];
	$kepala_keluarga=$_POST['kepala_keluarga'];
	$jumlah=$_POST['jumlah'];
  
	
    //buat sql
    $sql="INSERT INTO tb_penduduk VALUES ('','$nomor_surat','$nomor_kk','$kepala_keluarga','$jumlah')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan penduduk Error");
    if ($query){
        echo "<script>window.location.assign('?page=kependudukan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
