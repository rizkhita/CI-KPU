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
          <i class="fa fa-table"></i>Berita Pilkada</div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
<form action="berita.php"  method="post">
 <td> 
  <h3>Edit Berita Pilkada</h3><br>
    <div class="form-group">
      <label >Tanggal Rilis:</label>
      <input type="date" name="no_urut" class="form-control" style="width:700px;">
    </div>
    <div class="form-group">
      <label >Judul:</label>
      <input type="text" name="no_urut" class="form-control" style="width:700px;">
    </div>
    <div class="form-group">
      <label >Isi:</label>
      <textarea type="text" name="nama" class="form-control" id="exampleFormControlTextarea1" rows="15" style="width:700px;"></textarea>
    </div> 
    
  <br>
        <div class="form-group" style="width:700px;">
          <label>Foto Berita (16x9) :</label>
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
