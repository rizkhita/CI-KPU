<!DOCTYPE html>
<html lang="en">

<?php include ('head_user.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php include ('nav_user.php'); ?>
<!-- end -->
  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Daftar Akun</div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
<form action="<?php echo base_url();?>index.php/Akun/akun_edit"  method="post">
 <td> 
  <h3>Edit Akun</h3><br>
  <?php foreach ($login as $data) { ?>
  <input type="hidden" name="id" value="<?php echo $data->id; ?>"  class="form-control" style="width:400px;">
    <div class="form-group">
      <label >Nama:</label>
      <input type="text" name="nama" value="<?php echo $data->nama; ?>" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
      <label >Username:</label>
      <input type="text" name="username" value="<?php echo $data->username; ?>" class="form-control" style="width:400px;">
    </div> 
    <div class="form-group">
      <label >Password:</label>
      <input type="password" name="password" value="<?php echo $data->password; ?>" class="form-control" style="width:400px;">
    </div>
<?php }?>
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
<?php include ('footer_table.php');  ?>
  </div>
</body>

</html>
