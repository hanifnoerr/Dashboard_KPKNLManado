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
                    <h2>Update Realisasi<small> Piutang Negara</small></h2>
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
                    <form action="<?php echo base_url(). 'capaian/updatepiutang'; ?>" id="capaian" method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="c_pnbp_piutang">PNBP Piutang</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="c_pnbp_piutang" required="required" class="form-control float-right" id="piutang1" value="<?php echo number_format("$u->c_pnbp_piutang",0,",","."); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="c_pl1">Tingkat Outstanding</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="c_tingkatoutstanding" required="required" class="form-control" id="piutang2" value="<?php echo number_format("$u->c_tingkatoutstanding",0,",","."); ?>">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Penyelesaian BKPN</label>
                        <div class="col-md-4 col-sm-4 ">
                          <input name="c_penyelesaianbkpn" class="form-control" required="required" type="texts" id="piutang3" value="<?php echo number_format("$u->c_penyelesaianbkpn",0,",",".");; ?>">
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