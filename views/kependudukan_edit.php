<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_penduduk WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_surat" value="<?=$data['nomor_surat']?>"class="form-control" id="inputEmail3" placeholder="masukkan nomor surat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Nomor KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_kk" value="<?=$data['nomor_kk']?>"class="form-control" id="inputEmail3" placeholder="masukkan nomor KK">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Kepala Keluarga</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepala_keluarga" value="<?=$data['kepala_keluarga']?>"class="form-control" id="inputEmail3" placeholder="Masukkan Kepala keluarga">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Jumlah keluarga</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>"class="form-control" id="inputEmail3" placeholder="jumlah keluarga">
                            </div>
                        
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                            <!--Untuk Bulan-->
                            
                            <!--Untuk Tanggal-->
                            
                        <!--end tanggal lahir-->           

                        
                       
                        <!--Status-->
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Data Penduduk</button>
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
    $sql="UPDATE tb_penduduk SET nomor_surat='$nomor_surat',nomor_kk='$nomor_kk',kepala_keluarga='$kepala_keluarga',jumlah='$jumlah' WHERE nomor_surat ='$nomor_surat'"; 
	
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit penduduk Error");
    if ($query){
        echo "<script>window.location.assign('?page=kependudukan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



