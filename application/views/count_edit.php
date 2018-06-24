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
          <i class="fa fa-table"></i>Pengaturan Countdown</div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
<form action="<?php echo base_url();?>index.php/Countdown/count_edit"  method="post">
 <td> 
  <h3>Edit Data Countdown</h3><br>
  <?php foreach ($countdown as $data) { ?>
  <input type="hidden" name="id" value="<?php echo $data->id;?>" >
    <div class="form-group">
      <label >Waktu Mulai:</label>
      <input type="date" name="count_awal" value="<?php echo $data->count_awal;?>" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
      <label >Waktu Berakhir:</label>
      <input type="date" name="count_akhir" value="<?php echo $data->count_akhir;?>" class="form-control" style="width:400px;">
    </div> 
    <div class="form-group">
      <label >Keterangan:</label>
      <input type="text" name="keterangan" value="<?php echo $data->keterangan;?>" class="form-control" style="width:400px;">
    </div>
    <?php }?>
    <br>
    <button style="width:150px;text-align:center;"  class="btn btn-primary">SUBMIT</button>
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
