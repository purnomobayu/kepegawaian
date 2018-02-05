<!DOCTYPE html>
<html lang="en"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_template/theme/bootstrap.css" media="screen">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_template/theme/usebootstrap.css">
</head>
<body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="http://usebootstrap.com/" class="navbar-brand">TestCRUD</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">

        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" id="themes">Pekerja  <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="themes">
              <li><a href="<?php echo base_url() ?>kepegawaian_controller/pekerja/add">Tambah Pekerja</a></li>
              <li><a href="<?php echo base_url() ?>kepegawaian_controller/pekerja/">Data Pekerja </a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="" id="themes">Cuti  <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="themes">
              <li><a href="<?php echo base_url() ?>kepegawaian_controller/cuti/add">Tambah Cuti</a></li>
              <li><a href="#">Data Cuti</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="container">
<?php $this->load->view($page); ?>
  </div>

  <script src="<?php echo base_url(); ?>assets_template/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_template/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_template/bootstrap/usebootstrap.js"></script>
</body>
</html>