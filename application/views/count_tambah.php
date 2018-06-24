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
<form action="<?php echo base_url();?>index.php/Countdown/count_tambah"  method="post">
 <td> 
  <h3>Tambah Data Countdown</h3><br>
    <div class="form-group">
      <label >Waktu Mulai:</label>
      <input type="date" name="count_awal" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
      <label >Waktu Berakhir:</label>
      <input type="date" name="count_akhir" class="form-control" style="width:400px;">
    </div> 
    <div class="form-group">
      <label >Keterangan:</label>
      <input type="text" name="keterangan" class="form-control" style="width:400px;">
    </div>
   
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
