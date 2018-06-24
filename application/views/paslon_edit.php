<!DOCTYPE html>
<html lang="en">

<?php include ('head_user.php');  include ('head_foto.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php include ('nav_user.php'); ?>
<!-- end -->
  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Pasangan Calon</div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
<form action="paslon.php"  method="post">
 <td> 
  <h3>Edit Data Pasangan Calon</h3><br>
    <div class="form-group">
      <label >Nomor Urut:</label>
      <input type="number" name="no_urut" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
      <label >Nama:</label>
      <input type="text" name="nama" class="form-control" style="width:400px;">
    </div> 
    <div class="form-group">
      <label >Tempat Lahir:</label>
      <input type="text" name="tempat_lahir" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
    <label >Tanggal Lahir:</label>
      <input type="date" name="tanggal_lahir" class="form-control" style="width:400px;">
    </div>
  <br>
        <div class="form-group" style="width:400px;">
          <label>Foto Paslon (3x4) :</label>
          <div class="form-control">
            <!-- bootstrap-imageupload. -->
            <div class="imageupload panel panel-default">
                <div class="panel-heading clearfix">
                </div>
                <div class="file-tab panel-body">
                    <label class="btn btn-info btn-file">
                        <i class="fa fa-cloud-upload">&nbsp;</i>Browse
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file">
                    </label>
                    <!-- <button type="button" class="btn btn-default">Remove</button> -->
                </div>
            </div>
            <!-- bootstrap-imageupload method buttons. -->
            <button type="button" id="imageupload-disable" class="btn btn-danger">Disable</button>
            <button type="button" id="imageupload-enable" class="btn btn-success">Enable</button>
            <button type="button" id="imageupload-reset" class="btn btn-primary">Reset</button>
        </div>
        </div>
        <!-- end of image upload -->
<br><br>
<!-- </td>
<td style="width:70px;padding-bottom:70px;"></td>
<td > -->
    <div class="form-group">
      <label >Jenis Kelamin:</label>
      <select name="jk" style="width:400px;" class="form-control" >
        <option value="L" selected="selected"><h1>Pria</h1></option>
        <option value="P" selected="selected"><h1>Wanita</h1></option>
    </select>
  </div>
   <div class="form-group">
      <label >Pendidikan:</label>
      <input type="text" name="pangkat_golongan" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
      <label >Jejak Rekam:</label>
      <input type="text" name="pangkat_tmt" class="form-control" style="width:400px;">
    </div>
    <div class="form-group" >
      <label >Jabatan:</label>
      <select name="jk" style="width:400px;" class="form-control" >
        <option value="Gubernur" selected="selected"><h1>Gubernur</h1></option>
        <option value="Wakil Gubernur" selected="selected"><h1>Wakil Gubernur</h1></option>
    </select>
  </div>
  
    <br>
    <button style="width:150px;text-align:center;"  class="btn btn-primary">UPDATE</button>
  <br><br>
   </td> 
  </form>
  </table>    
      </div>
        </div>
        <div class="card-footer small text-muted">Dinas Komunikasi dan Informatika Provinsi Jawa Barat</div>
      </div>
    </div>
    <!-- /.container-fluid-->
<?php include ('footer_table.php');  include ('footer_foto.php');?>
  </div>
</body>

</html>
