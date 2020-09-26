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
                    <h2>Update Target<small> Lelang</small></h2>
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
                    <?php foreach($target as $u){ ?>
                    <form action="<?php echo base_url(). 'target/updatelelang'; ?>" id="target" method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="pnbp_lelang">PNBP Lelang</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="pnbp_lelang" required="required" class="form-control float-right" id="pnbp_lelang" value="<?php echo number_format("$u->pnbp_lelang",0,",","."); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="pl1">PL Kelas 1</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="pl1" required="required" class="form-control" id="pl1" value="<?php echo number_format("$u->pl1",0,",","."); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="pegadaian">Pegadaian</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input name="pegadaian" class="form-control" type="text" id="pegadaian" value="<?php echo number_format("$u->pegadaian",0,",","."); ?>">
                        </div>
                      </div>

                      <div><hr><p><center>pemisah desimal pakai titik (.)<p></center><hr></div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Produktivitas</label>
                        <div class="col-md-2 col-sm-2 ">
                          <input name="produktivitas" class="form-control" required="required" type="texts" id="produktivitas" value="<?php echo $u->produktivitas; ?>">
                          <span class="form-control-feedback right" >%</span>
                        </div> 
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Lelang e-auction</label>
                        <div class="col-md-2 col-sm-2 ">
                          <input name="lelangeauction" class="form-control" required="required" type="texts" id="lelangeauction" value="<?php echo $u->lelangeauction; ?>">
                          <span class="form-control-feedback right" >%</span>
                        </div> 
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Permohonan Online</label>
                        <div class="col-md-2 col-sm-2 ">
                          <input name="permohonanonline" class="form-control" required="required" type="texts" id="permohonanonline" value="<?php echo $u->permohonanonline; ?>">
                          <span class="form-control-feedback right" >%</span>
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