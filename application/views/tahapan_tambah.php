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
          <i class="fa fa-table"></i>Tahapan Kegiatan</div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
<form action="<?php echo base_url();?>index.php/Tahapan/tahapan_tambah"  method="post">
 <td> 
  <h3>Tambah Data Kegiatan</h3><br>
    <div class="form-group">
      <label >Nama Kegiatan:</label>
      <input type="text" name="nama_kegiatan" class="form-control" style="width:400px;">
    </div>
    <div class="form-group">
      <label >Tanggal Mulai:</label>
      <input type="date" name="tgl_awal" class="form-control" style="width:400px;">
    </div> 
    <div class="form-group">
      <label >Tanggal Selesai:</label>
      <input type="date" name="tgl_akhir" class="form-control" style="width:400px;">
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
