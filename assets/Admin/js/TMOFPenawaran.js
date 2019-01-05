$(document).ready(function(){
    $( "#NamaSupplayer" ).autocomplete({
      source: "<?php echo site_url('Autocomplate/CariSupplayer/?');?>"
    });
});