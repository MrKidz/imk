$(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input) {
            if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#PLayoutPBRyobi').attr('src',event.target.result);
                }
                    reader.readAsDataURL(input.files[0]);
            }
        };
        $('input#LayoutPBRyobi').on('change', function() {
            imagesPreview(this);
        });
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input) {
            if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#PLayoutPBKomori').attr('src',event.target.result);
                }
                    reader.readAsDataURL(input.files[0]);
            }
        };
        $('input#LayoutPBKomori').on('change', function() {
            imagesPreview(this);
        });
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input) {
            if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#PLayoutPBOliver').attr('src',event.target.result);
                }
                    reader.readAsDataURL(input.files[0]);
            }
        };
        $('input#LayoutPBOliver').on('change', function() {
            imagesPreview(this);
        });
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input) {
            if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#PLCRyobi').attr('src',event.target.result);
                }
                    reader.readAsDataURL(input.files[0]);
            }
        };
        $('input#LayoutPCRyobi').on('change', function() {
            imagesPreview(this);
        });
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input) {
            if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#PLCKomori').attr('src',event.target.result);
                }
                    reader.readAsDataURL(input.files[0]);
            }
        };
        $('input#LayoutPCKomori').on('change', function() {
            imagesPreview(this);
        });
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input) {
            if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $('#PLCOliver').attr('src',event.target.result);
                }
                    reader.readAsDataURL(input.files[0]);
            }
        };
        $('input#LayoutPCOliver').on('change', function() {
            imagesPreview(this);
        });
    });

    $(document).ready(function(){
        $( "#NamaSupplayer" ).autocomplete({
          source: "<?php echo site_url('Autocomplate/CariSupplayer/?');?>"
        });
    });

    $(document).ready(function(){
        $( "#NamaSupplayer" ).autocomplete({
          source: "<?php echo site_url('Autocomplate/CariSupplayer/?');?>"
        });
    });

    $(document).ready(function(){
        $( "#MesinLipat" ).autocomplete({
          source: "<?php echo site_url('Autocomplate/CariMesinLipat/?');?>"
        });
    });