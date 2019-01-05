<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<<!DOCTYPE html>
<html>
<head>
    <title>Autocomplete | AZZURA Media</title>


    <script src="<?php echo base_url().'assets/Admin/vendor/jquery-3.2.1.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/jqueryui/jquery-ui.js'?>"></script>
    <link href="<?php echo base_url().'assets/jqueryui/jquery-ui.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/Admin/vendor/bootstrap-4.1/bootstrap.min.css'?>" rel="stylesheet"  type="text/css">

    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplate/search',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#v_nim').val(''+suggestion.nim); // membuat id 'v_nim' untuk ditampilkan
                    $('#v_jurusan').val(''+suggestion.jurusan); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
    </script>


</head>
<body>

<?php echo base_url()."autocomplate/search"; ?>
<div id="content">
<h1>Autocomplete</h1>
<form action="<?php echo base_url()."autocomplate/search"; ?>" method="post">
    <div class="wrap">
    <table>
        <tr>
            <td><small>Nama :</small><br><input type="search" class='autocomplete nama' id="autocomplete1" name="nama"/></td>
        </tr>
        <tr>
            <td><small>Jurusan :</small><br><input type="text" class='autocomplete' id="v_jurusan" name="nama_customer"/></td>
        </tr>
        <tr>
            <td><small>NIM :</small><br><input type="text" class='autocomplete' id="v_nim" name="nama_customer"/></td>
        </tr>
    </div>
</form>
</div>


</body>
</html>