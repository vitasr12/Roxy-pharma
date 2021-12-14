<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aplikasi Kasir</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/table.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/jquery-ui/jquery-ui.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">
   
    <script src="<?= base_url('assets/jquery-2.1.4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui/jquery-ui.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap-3.3.5/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/datatables/js/dataTables.bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/maskMoney/jquery.maskMoney.min.js') ?>"></script>
   
    <style type="text/css">
    .inner-addon {
    position: relative;
    }
 
    /* style icon */
    .inner-addon .glyphicon {
      position: absolute;
      padding: 10px;
      pointer-events: none;
    }
 
    /* align icon */
    .left-addon .glyphicon  { left:  0px;}
    .right-addon .glyphicon { right: 0px;}
 
    /* add padding  */
    .left-addon input  { padding-left:  30px; }
    .right-addon input { padding-right: 30px; }
    </style>
</head>
<body id="<?= $halaman ?>">
    <div id="wrapper" class="">
        <div id="navbar">
            <?php $this->load->view('navbar') ?>
        </div>
        <div id="sidebar">
            <?php $this->load->view('sidebar') ?>
        </div>
        <div style="margin-left:1%;padding:50px 40px;height:auto;" id="content">
            <h1><?php echo $halaman ?></h1>
            <?php $this->load->view($main_view) ?>
        </div>
    </div>
    <div id="footer-wrapper">
        <div id="footer">
            <?php $this->load->view('footer') ?>
        </div>
    </div>
    <script src="<?= base_url('assets/bootstrap-3.3.5/js/collapse.js') ?>"></script>
</body>
</html>