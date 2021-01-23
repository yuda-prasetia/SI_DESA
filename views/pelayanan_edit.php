<?php
$nama=$_GET['nama'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pelayanan WHERE nama ='$nama'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pelayanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Jenis Pelayanan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_pelayanan" value="<?=$data['jenis_pelayanan']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" value="<?=$data['tanggal']?>"class="form-control" id="inputEmail3">
                            </div>
                            <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>"class="form-control" id="inputEmail3">
                            </div>
                        
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                            <!--Untuk Bulan-->
                            
                            <!--Untuk Tanggal-->
                            
                        <!--end tanggal lahir-->           

                        
                       
                        <!--Status-->
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Data Pelayanan</button>
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
    $sql="UPDATE pelayanan SET nama='$nama',nik='$nik',jenis_pelayanan='$jenis_pelayanan',tanggal='$tanggal',keterangan='$keterangan' WHERE nama ='$nama'"; 
	
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit penduduk Error");
    if ($query){
        echo "<script>window.location.assign('?page=pelayanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



