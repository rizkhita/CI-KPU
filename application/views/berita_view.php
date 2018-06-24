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
          <i class="fa fa-table"></i> Berita Pilkada</div>
        <div class="card-body">
          </div>
 
<table >
<td style="width:70px;" id="responive"></td>
 <td> 
  <h3>Informasi Berita Pilkada</h3><br>
    <div class="form-group">
      <label style="width:150px;" >Tanggal Rilis</label>:<label style="margin-left:20px;" >Sample</label>
    </div>
    <div class="form-group">
      <label style="width:150px;" >Judul</label>:<label style="margin-left:20px;" >Sample</label>
    </div> 
    <div class="form-group">
      <label style="width:150px;" >Isi</label>:<br><br><br>
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
In asynchronous communication, the sender is allowed to continue immediately
after the message has been submitted for transmission, possibly before
it has even been sent. In synchronous communication, the sender is blocked at
least until a message has been received. Alternatively, the sender may be blocked until message delivery has taken place or even until the receiver has responded as with RPCs.
Message-oriented middleware models generally offer persistent asynchronous
communication, and are used where RPCs are not appropriate. They are often
used to assist the integration of (widely-dispersed) collections of databases into
large-scale information systems. Other applications include e-mail and workflow.
A very different form of communication is that of streaming, in which the
issue is whether or not two successive messages have a temporal relationship. 

In continuous data streams, a maximum end-to-end delay is specified for each message.
In addition, it is also required that messages are sent subject to a minimum end-to-end delay. Typical examples of such continuous data streams are video and
audio streams. Exactly what the temporal relations are, or what is expected from
the underlying communication subsystem in terms of quality of service is often
difficult to specify and to implement. A complicating factor is the role of jitter.
Even if the average performance is acceptable, substantial variations in delivery
time may lead to unacce

        <!-- end -->
    </label>
    </div>
      <div>
      <label style="width:150px;" >Foto Berita</label>:<label style="margin-left:20px;" >Sample.jpg</label>
      <br><br> 
      <div class="form-group" style="width:500px;">
        <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
      </div>
      </div>
    <br>

    
    <br>
    <button href="<?php echo base_url();?>index.php/Berita/index" class="btn btn-primary" ><i class="fa fa-arrow-left"></i>&nbsp;Back</button>
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
