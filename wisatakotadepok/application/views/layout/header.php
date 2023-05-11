<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Promotion Plans">
    <meta name="description" content="">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo base_url('dist/style/nicepage.css')?>" media="screen">
    <script class="u-script" type="text/javascript" src="<?php echo base_url('dist/js/jquery.js')?>" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?php echo base_url('dist/js/nicepage.js')?>" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface:400">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script type="application/ld+json">
      {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "<?php echo base_url('dist/images/Lambang_Kota_Depok.png')?>"
      }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-palette-1-base u-sticky u-sticky-8966 u-header" id="sec-071f" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="<?php echo base_url('index.php/home')?>" data-page-id="192966514" class="u-image u-logo u-image-1" data-image-width="650" data-image-height="841" title="Home">
          <img src="<?php echo base_url('dist/images/Lambang_Kota_Depok.png')?>" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
            </g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="<?php echo base_url('index.php/profile')?>" style="padding: 10px 20px;">Profile Depok</a>
                </li>
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="<?php echo base_url('index.php/wisata_rekreasi')?>" style="padding: 10px 20px;">Wisata Rekreasi</a>
                </li>
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="<?php echo base_url('index.php/wisata_kuliner')?>" style="padding: 10px 20px;">Wisata Kuliner</a>
                </li>
                <li class="u-nav-item">
                <?php
                if($this->session->has_userdata('USERNAME')){
                ?>
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>&nbsp;
                    <b class="mb-5"><?php echo $this->session->userdata('USERNAME');?></b>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <?php 
                        if($this->session->userdata('ROLE')=='administrator'){
                    ?>
                        <a class="dropdown-item" href="<?php echo base_url('index.php/admin')?>">View Data</a>
                        <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout')?>">logout</a>
                    <?php
                        }elseif($this->session->userdata('ROLE')=='public'){
                    ?>
                        <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout')?>">logout</a>
                        <?php } ?>
                    </div>
                </div>
                <?php
                }else{
                ?>
                <a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base btn btn-light text-dark my-2 my-sm-0" href="<?php echo base_url('index.php/login')?>" style="padding: 10px 20px;">Login</a>
                <?php
                }
                ?>
                </li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('index.php/profile')?>">Profile Depok</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('index.php/wisata_rekreasi')?>">Wisata Rekreasi</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('index.php/wisata_kuliner')?>">Wisata Kuliner</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <p class="u-custom-font u-large-text u-text u-text-default u-text-variant u-text-1">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2" href="<?php echo base_url('index.php/home')?>" data-page-id="192966514">Wisata Kota Depok</a>
        </p>
      </div>
    </header>