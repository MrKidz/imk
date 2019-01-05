            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    
                    <div class="card">
                <div class="card-header bg-primary" >
                        <strong class="card-title text-light">TM | Tehnical Meeting</strong>
                </div>
                                    <div class="card-body card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                    <form>
                    <table border="1" style="align: center;">
                        <tr>
                            <td colspan="3" align=center class="wbbk">Job Data Sheet</td>
                            <td rowspan="3" align=center width="150px" class="wh">Nama Artikel </td>
                            <td class="theaddd"><input type="text" id="KodePack" name="KodePack" placeholder="Kode Pack" class="form-control" ></td>
                            <td rowspan="3" colspan="2" align=center class="wh">TM Offer</td>
                        </tr>
                        <tr>
                            <td rowspan="2" colspan="3" align=center class="wh">Tgl TM <input type="date" id="TglTM" name="TglTM" value="<?php echo date('y-m-d');?>" class="form-control"> </td>
                            <td rowspan="2" class="theaddd"><input type="text" id="NamaArtikel" name="NamaArtikel" placeholder="Nama Article" class="form-control"></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="3" align=center class="wbbk">Uraian Produksi</td>
                            <td  align=center class="wh">Nama Customer </td>
                            <td class="theaddd"><input type="text" id="NamaCustomer" name="NamaCustomer" placeholder="Nama Customer" class="form-control"></td>
                            <td align=center class="wh">NO TM</td>
                            <td><input type="text" id="NoTM" name="NoTM" placeholder="NO TM" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align=center class="wh"> Final Size</td>
                            <td colspan="4" rowspan="7"></br>
                                                <div class="col-lg-12">
                            <div class="card border border-primary">
                                        <div class="card-header bg-primary" >
                                        <strong class="card-title text-light">Proses Produksi</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-lg-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="PotongBlanko" name="PotongBlanko"  id="Potong Blanko" checked>
                                                    <label class="form-check-label" for="Potong Blanko">
                                                    Potong Blanko
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Cetak" name="Cetak" id="Cetak" checked>
                                                    <label class="form-check-label" for="Cetak">
                                                    Cetak
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="SortirSheet" name="SortirSheet" id="Sortir Sheet" checked>
                                                    <label class="form-check-label" for="Sortir Sheet">
                                                    Sortir Sheet
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="PotongPcs" name="PotongPcs" id="Potong Pcs" checked>
                                                    <label class="form-check-label" for="Potong Pcs">
                                                    Potong Pcs
                                                    </label>
                                                </div>
                                                </div>
                                                <div class="col col-lg-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="SortirPcs" name="SortirPcs" id="Sortir Pcs" checked>
                                                    <label class="form-check-label" for="Sortir Pcs">
                                                    Sortir Pcs
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="LipatMesin" name="LipatMesin" id="Lipat Mesin" checked>
                                                    <label class="form-check-label" for="Lipat Mesin">
                                                    Lipat Mesin
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="TBP" name="TBP" id="tbp" checked>
                                                    <label class="form-check-label" for="tbp">
                                                    Timbang + Banded + Packing
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="KirimWHE" name="KirimWHE" id="WHE" checked>
                                                    <label class="form-check-label" for="WHE">
                                                    Kirim WHE
                                                    </label>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                            </td>
                        <tr>
                            <td> 
                            <input type="text" id="FSPanjang" name="FSPanjang" placeholder="mm" class="form-control"></td>
                            <td> x</td>
                            <td>
                            <input type="text" id="FSLebar" name="FSLebar" placeholder="mm" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align=center class="wh">Jenis Finishing</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <input type="text" id="Finishing" name="Finishing" placeholder="Jenis Finishing" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align=center class="wh">Warna / Colour</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <input type="text" id="Warna" name="Warna" placeholder="Warna" class="form-control"></td>
                        </tr>
                        </tr>
                            <td colspan="3" align=center class="wh">Komposisi</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <input type="text" id="NamaTinta" name="NamaTinta" placeholder="Komposisi" class="form-control"></td>
                            <td colspan="4" rowspan="7"></br>
                                                <div class="col-lg-12">
                            <div class="card border border-primary">
                                        <div class="card-header bg-primary" >
                                        <strong class="card-title text-light">Layout Potong Blanko</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group">


                                            <?php foreach ($mesin as $m){ ?>
                                            <div class="col col-lg-4" style="margin-bottom:40px">
                                                <div class="col col-lg-12">
                                                <label class="form-check-label">
                                                    Layout <?php echo ucwords($m->Tables_in_layoutmesin) ?></br>
                                                    </label>
                                                </div>
                                                <div class="col col-lg-12">
                                                    <img src="<?php echo base_url()?>/assets/images/noimg.png" alt="..." class="img-thumbnail img-per" id="PLayoutPB<?php echo ucwords($m->Tables_in_layoutmesin) ?>">
                                                </div>
                                                <div class="col col-lg-12">
                                                    <input type="file" name="LayoutPB<?php ucwords($m->Tables_in_layoutmesin) ?>" multiple id="LayoutPB<?php $m ?>" value="Pilih Layout <?php echo ucwords($m->Tables_in_layoutmesin) ?>"/>
                                                </div>
                                                <div class="col col-lg-12">
                                                    <table border="1">
                                                        <tr>
                                                            <td colspan="3" align=center class="wh">Uk Plano Cetak</td>
                                                            <td colspan="2" align=center class="wh">Plano <?php echo ucwords($m->Tables_in_layoutmesin) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" id="UKPanjang<?php echo ucwords($m->Tables_in_layoutmesin) ?>" name="NamaSupplayer" placeholder="mm" class="form-control"></td>
                                                            <td>X</td>
                                                            <td><input type="text" id="UKLebar<?php echo ucwords($m->Tables_in_layoutmesin) ?>" name="NamaSupplayer" placeholder="mm" class="form-control"></td>
                                                            <td>=</td>
                                                            <td><input type="text" id="PC<?php echo ucwords($m->Tables_in_layoutmesin) ?>" name="NamaSupplayer" placeholder="Plano Cetak" class="form-control"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                                <?php } ?>

        
                                                
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                </td>
                        </tr>
                        <tr>
                            <td colspan="3" align=center class="wh">Material</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <input type="text" id="NamaMaterial" name="NamaMaterial" placeholder="Material" class="form-control"></td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <table>
                                <tr>
                            <td colspan="3">
                            <textarea name="CatatanProduksi" id="CatatanProduksi" rows="15" placeholder="Catatan Produksi..." class="form-control"></textarea></td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                                    <td colspan="3"></td>
                            <td colspan="4"></br>
                                                <div class="col-lg-12">
                                        <div class="card border border-primary">
                                        <div class="card-header bg-primary" >
                                        <strong class="card-title text-light">Layout Cetak</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                            <?php foreach ($mesin as $m){ ?>
                                                <div class="col col-lg-4">
                                                    <div class="col col-lg-12">
                                                        <label class="form-check-label">
                                                            Layout <?php echo ucwords($m->Tables_in_layoutmesin) ?></br>
                                                        </label>
                                                    </div>
                                                    <div class="col col-lg-12">
                                                        <img src="<?php echo base_url()?>/assets/images/noimg.png" alt="..." class="img-thumbnail img-per" id="PLC<?php echo ucwords($m->Tables_in_layoutmesin) ?>">
                                                    </div>
                                                    <div class="col col-lg-12">
                                                        <input type="file" name="LayoutPC<?php echo ucwords($m->Tables_in_layoutmesin) ?>" multiple id="LayoutPC<?php echo ucwords($m->Tables_in_layoutmesin) ?>" value="Pilih Layout <?php echo ucwords($m->Tables_in_layoutmesin) ?>"/>
                                                    </div>
                                                    <div class="col col-lg-12">
                                                        <table border="1">
                                                            <tr>
                                                                <td colspan="3" align=center class="wh">Uk Material Cetak</td>
                                                                <td colspan="2" align=center class="wh">Up Cetak <?php echo ucwords($m->Tables_in_layoutmesin) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="USPanjang<?php echo ucwords($m->Tables_in_layoutmesin) ?>" name="USLebar<?php echo ucwords($m->Tables_in_layoutmesin) ?>" placeholder="mm" class="form-control"></td>
                                                                <td>X</td>
                                                                <td><input type="text" id="USLebar<?php echo ucwords($m->Tables_in_layoutmesin) ?>" name="USLebar<?php echo ucwords($m->Tables_in_layoutmesin) ?>" placeholder="mm" class="form-control"></td>
                                                                <td>=</td>
                                                                <td><input type="text" id="UP<?php echo ucwords($m->Tables_in_layoutmesin) ?>" name="UP<?php echo ucwords($m->Tables_in_layoutmesin) ?>" placeholder="UP" class="form-control"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                                <div class="col-lg-12">
                                        <div class="card border border-primary">
                                        <div class="card-header bg-primary" >
                                        <strong class="card-title text-light">Layout cetak, Lipat & Finishing / Packing</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col-lg-12">
                                                <div class="card border border-primary">
                                                    <div class="card-header" >
                                                        <strong class="card-title">Layout Plat Cetak</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <div class="row form-group">

                                                        <?php foreach ($mesin as $m){ ?>
                                                            <div class="col col-lg-4">
                                                            <div class="card border border-primary">
                                                                <div class="card-header" >
                                                                    <strong class="card-title"><?php echo ucwords($m->Tables_in_layoutmesin) ?></strong>
                                                                </div>
                                                                <div class="card-body card-block">
                                                                    <div class="row form-group">
                                                                        <table border='1'>
                                                                            <tr>   
                                                                                <td align=center class="wh">Jenis Plat</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td ><input type="text" id="NamaSupplayer" name="NamaSupplayer" placeholder="Jenis Plat" class="form-control"></td>
                                                                            </tr>
                                                                            <tr> 
                                                                                <td align=center class="wh">Max Produksi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="text" id="NamaSupplayer" name="NamaSupplayer" placeholder="Max Produksi" class="form-control"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                             </div>
                                                             </div>
                                                             <?php } ?>

                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                                
                                                            <div class="col col-lg-6">
                                                            <div class="card border border-primary">
                                                                <div class="card-header bg-primary" >
                                                                    <strong class="card-title text-light">Proses Lipat</strong>
                                                                </div>
                                                                <div class="card-body card-block">
                                                                    <div class="row form-group">
                                                                    <div class="col-lg-12">
                                                                        <table border='1' class="col-lg-12">
                                                                            <tr>   
                                                                                <td align=center class="wh">Mesin</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="text" id="MesinLipat" name="MesinLipat" placeholder="Mesin" class="form-control"></td>
                                                                            </tr>
                                                                            <tr> 
                                                                                <td align=center class="wh">Posisi Front</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td ><input type="text" id="PosisiFront" name="PosisiFront" placeholder="Posisi Front" class="form-control"></td>
                                                                            </tr>
                                                                            <tr>   
                                                                                <td align=center class="wh">Posisi Back</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="text" id="PosisiBack" name="PosisiBack" placeholder="Posisi Back" class="form-control"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                             </div>
                                                             </div>

                                                             <div class="col col-lg-6">
                                                            <div class="card border border-primary">
                                                                <div class="card-header bg-primary" >
                                                                    <strong class="card-title text-light">Finishing / Packing</strong>
                                                                </div>
                                                                <div class="card-body card-block">
                                                                    <div class="row form-group">
                                                                        <div class="col-lg-12">
                                                                        <table border='1' class="col-lg-12">
                                                                            <tr>   
                                                                                <td align=center class="wh">Banded Per</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="text" id="Banded" name="Banded" placeholder="Banded Per" class="form-control"></td>
                                                                            </tr>
                                                                            <tr> 
                                                                                <td align=center class="wh">isi Per Dus</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="text" id="Isi" name="Isi" placeholder="isi Per Dus" class="form-control"></td>
                                                                            </tr>
                                                                            <tr>   
                                                                                <td align=center class="wh">Material Packing</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="text" id="Packing" name="Packing" placeholder="Material Packing" class="form-control"></td>
                                                                            </tr>
                                                                        </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                             </div>
                                                             
                                                             </div>
                                                             
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                            </td>
                        </tr>
                    </table>
                    </div>



</div>
                    
</div>
                    <div class="card-footer">
                                        <input type="submit" value="Simpan" class="btn btn-lg btn-block btn-outline-primary">
                                    </div>
</div>
                    </form>
        </div>
    </div>