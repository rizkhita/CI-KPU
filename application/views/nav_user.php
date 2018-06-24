  <!-- Navigation Vertical-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Web ASAP JABAR</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/Home/index">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">Pasangan Calon  </span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents3">
            <li>
              <a href="<?php echo base_url(); ?>index.php/Paslon/index">Profil Paslon</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/Visi/index">Visi Misi Paslon</a>
            </li>
          </ul>
        </li>
        </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/Tahapan/index">
            <i class="fa fa-fw fa-calendar-check-o"></i>
            <span class="nav-link-text">Tahapan Pilkada</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/Berita/index">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">Berita Pilkada </span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/Lapor/index">
            <i class="fa fa-fw fa-bullhorn"></i>
            <span class="nav-link-text">Laporan Kecurangan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/Countdown/index">
            <i class="fa fa-fw fa-hourglass-half"></i>
            <span class="nav-link-text">Setting Countdown</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/TPS/index">
            <i class="fa fa-fw fa-map-o"></i>
            <span class="nav-link-text">Daftar TPS</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/Akun/index">
            <i class="fa fa-fw fa-user-circle"></i>
            <span class="nav-link-text">Akun Administrator</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    <!-- end-->
    <!-- Navigation Horizontal -->
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
<!--           <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="JS-Boostrap">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- end -->