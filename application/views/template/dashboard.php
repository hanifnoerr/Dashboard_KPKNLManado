<div class="right_col" role="main"> <!-- page content -->
<?php foreach ($capaian as $index => $key) { ?>

	<div class="row"><!-- ringkasan capaian 3 seksi -->
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
                  <center><h2>Persentase<small>Capaian Tiap Seksi</small></h2></center>
                  <div class="clearfix"></div>
                </div>
				<div class="x_content">
						<div class="col-md-4 col-sm-4">
							<span class="highcharts-figure">
								<div id="container-pkn" class="chart-container"></div>
							</span>
						</div>
						<div class="col-md-4 col-sm-4  ">
							<span class="highcharts-figure">
								<div id="container-lelang" class="chart-container"></div>
							</span>
						</div>
						<div class="col-md-4 col-sm-4  ">
							<span class="highcharts-figure">
								<div id="container-piutang" class="chart-container"></div>
							</span>
					  </div>
				</div> <!-- end of x_content-->
			</div>
		</div>
	</div> <!-- /end of row ringkasan capaian 3 seksi -->
    
	<div class="row"> <!-- capaian tiap seksi -->
            <div class="col-md-6 col-sm-6 "> <!-- seksi PKN-->
              <div class="x_panel fixed_height_360">
                <div class="x_title">
                  <h2>Seksi<small>Pengelolaan Kekayaan Negara</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
               <h4 class="pull-right"> Capaian</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>PNBP Aset</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo number_format($key->c_pnbp_aset / $target[$index]->pnbp_aset * 100 , 2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_pnbp_aset / $target[$index]->pnbp_aset * 100 , 2); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_pnbp_aset / $target[$index]->pnbp_aset * 100 , 2); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_pnbp_aset / $target[$index]->pnbp_aset * 100 , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Utilisasi</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_utilisasi / $target[$index]->utilisasi * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_utilisasi / $target[$index]->utilisasi * 100); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                    <a><?php echo number_format($key->c_utilisasi / $target[$index]->utilisasi * 100 , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Sertifikasi</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_sertifikat / $target[$index]->sertifikat * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_sertifikat / $target[$index]->sertifikat *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_sertifikat / $target[$index]->sertifikat *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>SBSK</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_sbsk / $target[$index]->sbsk * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_sbsk / $target[$index]->sbsk *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_sbsk / $target[$index]->sbsk *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Portofolio Aset</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_portofolio_aset / $target[$index]->portofolio_aset * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_portofolio_aset / $target[$index]->portofolio_aset *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_portofolio_aset / $target[$index]->portofolio_aset *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Rereval</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_rereval / $target[$index]->rereval * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_rereval / $target[$index]->rereval *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_rereval / $target[$index]->rereval *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div> <!-- end of seksi PKN -->

            <div class="col-md-6 col-sm-6 ">
              <div class="x_panel fixed_height_360">
                <div class="x_title">
                  <h2>Seksi<small>Pelayanan Lelang</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
               <h4 class="pull-right"> Capaian</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>PNBP Lelang</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo number_format($key->c_pnbp_lelang / $target[$index]->pnbp_lelang * 100 , 2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_pnbp_lelang / $target[$index]->pnbp_lelang * 100 , 2); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_pnbp_lelang / $target[$index]->pnbp_lelang * 100 , 2); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_pnbp_lelang / $target[$index]->pnbp_lelang * 100 , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Pokok Lelang (PL 1)</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_pl1 / $target[$index]->pl1 * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_pl1 / $target[$index]->pl1 * 100); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                    <a><?php echo number_format($key->c_pl1 / $target[$index]->pl1 * 100 , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Pegadaian</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_pegadaian / $target[$index]->pegadaian * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_pegadaian / $target[$index]->pegadaian *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_pegadaian / $target[$index]->pegadaian *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Produktivitas</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_produktivitas / $target[$index]->produktivitas * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_produktivitas / $target[$index]->produktivitas *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_produktivitas / $target[$index]->produktivitas *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>e - Auction</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_lelangeauction / $target[$index]->lelangeauction * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_lelangeauction / $target[$index]->lelangeauction *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_lelangeauction / $target[$index]->lelangeauction *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Permohonan Online</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_permohonanonline / $target[$index]->permohonanonline * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_permohonanonline / $target[$index]->permohonanonline *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_permohonanonline / $target[$index]->permohonanonline *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 ">
              <div class="x_panel fixed_height_360">
                <div class="x_title">
                  <h2>Seksi<small>Penilaian</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
               <h4 class="pull-right"> Capaian</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Deviasi</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo number_format($key->c_deviasi / $target[$index]->deviasi * 100 , 2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_deviasi / $target[$index]->deviasi * 100 , 2); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_deviasi / $target[$index]->deviasi * 100 , 2); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_deviasi / $target[$index]->deviasi * 100 , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  </br><br>
                  <div class="x_title">
                  <h2>Seksi<small>Piutang Negara</small></h2>
                  <div class="clearfix"></div>
                  </div>
                  <h4 class="pull-right"> Capaian</h4>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>PNBP Piutang</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_pnbp_piutang / $target[$index]->pnbp_piutang * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_pnbp_piutang / $target[$index]->pnbp_piutang *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_pnbp_piutang / $target[$index]->pnbp_piutang *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Tingkat Outstanding</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_tingkatoutstanding / $target[$index]->tingkatoutstanding * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_tingkatoutstanding / $target[$index]->tingkatoutstanding *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_tingkatoutstanding / $target[$index]->tingkatoutstanding *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Penyelesaian BKPN</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($key->c_penyelesaianbkpn / $target[$index]->penyelesaianbkpn * 100 ,0,"",""); ?>%;">
                          <span class="sr-only"><?php echo number_format($key->c_penyelesaianbkpn / $target[$index]->penyelesaianbkpn *100  , 2, ',', '.'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <a><?php echo number_format($key->c_penyelesaianbkpn / $target[$index]->penyelesaianbkpn *100  , 2, ',', '.'); ?> %</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 ">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Data realisasi diperbaharui</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Seksi PKN</label>
                        <label class="col-form-label col-md-9 col-sm-9 "><?php $s=$key->c_tgl1; $date = strtotime($s); echo date('d F Y', $date);?> pukul <?php $s=$key->c_tgl1; $date = strtotime($s); echo date('H:i:s', $date);?> WITA</label>
                </div>

                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Seksi Penilaian</label>
                        <label class="col-form-label col-md-9 col-sm-9 "><?php $s=$key->c_tgl2; $date = strtotime($s); echo date('d F Y', $date);?> pukul <?php $s=$key->c_tgl2; $date = strtotime($s); echo date('H:i:s', $date);?> WITA</label>
                </div>

                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Seksi Lelang</label>
                        <label class="col-form-label col-md-9 col-sm-9 "><?php $s=$key->c_tgl3; $date = strtotime($s); echo date('d F Y', $date);?> pukul <?php $s=$key->c_tgl3; $date = strtotime($s); echo date('H:i:s', $date);?> WITA</label>
                </div>

                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Piutang Negara</label>
                        <label class="col-form-label col-md-9 col-sm-9 "><?php $s=$key->c_tgl4; $date = strtotime($s); echo date('d F Y', $date);?> pukul <?php $s=$key->c_tgl4; $date = strtotime($s); echo date('H:i:s', $date);?> WITA</label>
                </div>

                </div>                               
              </div>
            </div>
          </div> <!-- end of row capaian tiap seksi -->
		  
<?php } ?>
</div> <!-- /page content -->