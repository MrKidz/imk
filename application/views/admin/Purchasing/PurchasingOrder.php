            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                                <?php
				if($this->session->flashdata())
				{
					echo "<div class='alert alert-danger alert-message'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
                }
		?>
        
            <div class="card">
                <div class="card-header bg-primary" >
                        <strong class="card-title text-light">Purchasing Order</strong>
                </div>
                                    <div class="card-body card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <a class="btn btn-lg btn-block btn-outline-primary" href="">INPUT DATA SUPPLIER BARU</a></br>
                                        <div class="card border border-primary">
                                        <div class="card-header" >
                                        <strong class="card-title">Data Supplier</strong>
                                        </div>
                                        <div class="card-body card-block">
                                        <form action="<?php echo base_url().'admin/Checkin' ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="NamaSupplayer" class=" form-control-label">Nama Supplier</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="NamaSupplayer" placeholder="Supplayer" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="AlamatSupplayer" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="AlamatSupplayer" id="AlamatSupplayer" rows="8" placeholder="Alamat..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        </div>

                                        </div>



                                        </div>


                                </form>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->

            

            <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nama Pemilik</th>
                                                <th class="text-center">Nama Hewan</th>
                                                <th class="text-center">Jenis Hewan</th>
                                                <th class="text-center">Tanggal Masuk</th>
                                                <th class="text-center">Tanggal Keluar</th>
                                                <th class="text-center">Checkout</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

        </div>

    </div>