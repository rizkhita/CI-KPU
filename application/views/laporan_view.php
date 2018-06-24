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
          <i class="fa fa-table"></i> Laporan Kecurangan </div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
 <td> 
  <h3>Informasi Laporan Kecurangam</h3><br>
    <div class="form-group">
      <label style="width:150px;" >Tanggal Laporan</label>:<label style="margin-left:20px;" >Sample</label>
    </div>
    <h4>Identitas Pelapor</h4><br>
    <div class="form-group">
      <label style="width:150px;" >NIK </label>:<label style="margin-left:20px;" >Sample</label>
    </div> 
    <div class="form-group">
      <label style="width:150px;" >Nama </label>:<label style="margin-left:20px;" >Sample</label>
    </div>
    <div class="form-group">
      <label style="width:150px;" >Nomor HP </label>:<label style="margin-left:20px;" >Sample</label>
    </div>
    <h4>Isi Laporan</h4><br>
        <div class="form-group">
      <label style="width:150px;" >Judul</label>:<label style="margin-left:20px;" >Sample</label>
    </div>  
      <label style="width:150px;" >Isi</label>:<br><br>
    <label style="margin-right:70px;" >
        <!-- isi berita -->
        Having powerful and flexible facilities for communication between processes
is essential for any distributed system. In traditional network applications, communication is often based on the low-level message-passing primitives offered by the transport layer. An important issue in middleware systems is to offer a higher level of abstraction that will make it easier to express communication between processes than the support offered by the interface to the transport layer.
One of the most widely used abstractions is the Remote Procedure Call
(RPC). The essence of an RPC is that a service is implemented by means of a procedure, of which the body is executed at a server. The client is offered only the signature of the procedure, that is, the procedure's name along with its parameters.
When the client calls the procedure, the client-side implementation, called a
stub, takes care of wrapping the parameter values into a message and sending that to the server. The latter calls the actual procedure and returns the results, again in a message. The client's stub extracts the result values from the return message and passes it back to the calling client application.
RPCs offer synchronous communication facilities, by which a client is blocked until the server has sent a reply. Although variations of either mechanism
exist by which this strict synchronous model is relaxed, it turns out that generalpurpose, high-level message-oriented models are often more convenient.
In message-oriented models, the issues are whether or not communication is
persistent, and whether or not communication is synchronous. The essence of persistent communication is that a message that is submitted for transmission, is
stored by the communication system as long as it takes to deliver it. In other
words, neither the sender nor the receiver needs to be up and running for message transmission to take place. In transient communication, no storage facilities are
offered, so that the receiver must be prepared to accept the message when it is
sent.
        <!-- end -->
    </label>
    </div>
      <div>
      <br><label style="width:150px;" >Foto Bukti</label>:<label style="margin-left:20px;" >Sample.jpg</label>
      <br><br> 
      <div class="form-group" style="width:500px;">
        <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
      </div>
      </div>
    <br>

    
    <br>
    <button href="laporan.php" class="btn btn-primary" ><i class="fa fa-arrow-left"></i>&nbsp;Back</button>
    <br><br>
   </td> 
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
