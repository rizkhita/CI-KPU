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
          <i class="fa fa-table"></i>Daftar TPS</div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
<form action="<?php echo base_url();?>index.php/TPS/tps_edit"  method="post">
 <td> 
  <h3>Edit Data TPS</h3><br>
  <?php foreach ($tps as $data) { ?>
    <input type="hidden" name="id" value="<?php echo $data->id; ?>"  class="form-control" style="width:400px;">
    <div class="form-group">
      <label >Nama Pos:</label>
      <input type="text" name="nama_pos" value="<?php echo $data->nama_pos; ?>" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
      <label >Nomor Pos:</label>
      <input type="number" name="nomor_pos" value="<?php echo $data->nomor_pos; ?>" class="form-control" style="width:400px;">
    </div> 
    <div class="form-group">
      <label >Alamat:</label>
      <input type="text" name="alamat" value="<?php echo $data->alamat; ?>" class="form-control" style="width:400px;">
    </div>
     <?php } ?> 
    <br>
    <button style="width:150px;text-align:center;" value="UPDATE" class="btn btn-primary">UPDATE</button>
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
