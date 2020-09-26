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
                    <h2>Update Realisasi<small> Penilaian</small></h2>
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
                    <form action="<?php echo base_url(). 'capaian/updatepenilaian'; ?>" id="capaian" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Deviasi</label>
                        <div class="col-md-2 col-sm-2 ">
                          <input name="c_deviasi" class="form-control" required="required" type="texts" id="deviasi" value="<?php echo $u->c_deviasi; ?>">
                          <span class="form-control-feedback right" >%</span>
                        </div> 
                        <p>pemisah desimal pakai titik (.)<p>
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