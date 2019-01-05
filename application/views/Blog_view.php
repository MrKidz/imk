<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Autocomplete</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/Admin/vendor/bootstrap-4.1/bootstrap.min.css'?>" media="all">
    <link rel="stylesheet" href="<?php echo base_url().'assets/jqueryui/jquery-ui.css'?>" media="all">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Autocomplete Codeigniter</h2>
        </div>
        <div class="row">
            <form>
                 <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" style="width:500px;">
                  </div>
            </form>
        </div>
    </div>
 
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/jquery-3.2.1.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/jqueryui/jquery-ui.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/jqueryui/jquery-ui.min.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#title" ).autocomplete({
              source: "<?php echo site_url('blog/get_autocomplete/?');?>"
            });
        });
    </script>
 
</body>
</html>