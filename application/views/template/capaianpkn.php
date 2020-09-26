<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>

            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Realisasi<small> PKN</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php foreach($capaian as $u){ ?>
                    <form action="<?php echo base_url(). 'capaian/updatepkn'; ?>" id="capaian" method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="c_pnbp_aset">PNBP Aset</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="c_pnbp_aset" required="required" class="form-control float-right" id="pnbp_aset" value="<?php echo number_format("$u->c_pnbp_aset",0,",","."); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="c_utilisasi">Utilisasi</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="c_utilisasi" required="required" class="form-control" id="utilisasi" value="<?php echo number_format("$u->c_utilisasi",0,",","."); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="c_sertifikat">Sertifikasi</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input name="c_sertifikat" class="form-control" type="text" id="sertifikasi" value="<?php echo number_format("$u->c_sertifikat",0,",","."); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">SBSK</label>
                        <div class="col-md-5 col-sm-5 ">
                          <input name="c_sbsk" class="form-control" required="required" type="texts" id="sbsk" value="<?php echo number_format("$u->c_sbsk",0,",","."); ?>">
                          <span class="form-control-feedback right" >NUP</span>
                        </div> 
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Portofolio Aset</label>
                        <div class="col-md-5 col-sm-5 ">
                          <input name="c_portofolio_aset" class="form-control" required="required" type="texts" id="portofolio" value="<?php echo number_format("$u->c_portofolio_aset",0,",","."); ?>">
                          <span class="form-control-feedback right" >NUP</span>
                        </div> 
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Rereval</label>
                        <div class="col-md-5 col-sm-5 ">
                          <input name="c_rereval" class="form-control" required="required" type="texts" id="rereval" value="<?php echo number_format("$u->c_rereval",0,",","."); ?>">
                          <span class="form-control-feedback right" >NUP</span>
                        </div> 
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-5">
                          <button type="submit" class="btn btn-success" value="Simpan" >Simpan Perubahan</button>
                        </div>
                      </div>

                    </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div> <!-- /end of row -->

          </div>
        </div>
        <!-- /page content -->