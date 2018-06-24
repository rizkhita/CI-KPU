<!DOCTYPE html>
<html lang="en">

<?php include ('head_user.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php
include ('nav_user.php');
?>
<!-- end -->
  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Berita Pilkada</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <a href="<?php echo base_url();?>index.php/Berita/ke_berita_tambah"><button  name= "tambahdata" style="margin-left:20px;" class="btn btn-primary float-sm-left" type="submit"  value="ADD"><i class="fa fa-fw fa-plus"></i>&nbsp;Tambah Berita</button></a>
              <br><br>
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Judul</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
                <tr>
                  <td>sample</td>
                  <td>sample</td>
                  <td><p>&nbsp;<a href="berita_view.php" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i></a>
                  &nbsp;&nbsp;<a href="berita_edit.php" class="btn btn-success"><i class="fa fa-fw fa-pencil-square-o"></i></a>
                  &nbsp;&nbsp;<a data-toggle="modal" data-target="#exampleHapus" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></a>
                  </p></td> 
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">ASAP - Web Aplikasi Sosialisasi Pilkada Jabar</div>
      </div>
    </div>
    <!-- /.container-fluid-->

    <!-- Delete Modal-->
    <div class="modal fade" id="exampleHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleHapusLabel">Anda yakin ingin menghapus data ini?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">"Klik tombol "Delete" apabila anda ingin menghapus data ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="berita.php">Delete</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Delete -->
   
<?php include ('footer_table.php');?>
  </div>
</body>

</html>
