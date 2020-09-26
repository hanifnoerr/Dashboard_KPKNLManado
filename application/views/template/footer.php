        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Dashboard Capaian <a href="https://hanfela.com">KPKNL MANADO</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
    <script src="<?php echo base_url('assets/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
	<script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/nprogress/nprogress.js'); ?>"></script>

    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/mask.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sweet.js'); ?>"></script>

    <!--HS-->
    <script src="<?php echo base_url('assets/highcharts.js'); ?>"></script>
	<script src="<?php echo base_url('assets/highcharts-more.js'); ?>"></script>
	<script src="<?php echo base_url('assets/solid-gauge.js'); ?>"></script>
	<script src="<?php echo base_url('assets/exporting.js'); ?>"></script>
	<script src="<?php echo base_url('assets/export-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets/accessibility.js'); ?>"></script>

	<script>$("#pnbp_aset").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#utilisasi").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#sertifikasi").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#sbsk").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#portofolio").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#rereval").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#deviasi").maskMoney();</script>
	<script>$("#pnbp_lelang").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#c_pl1").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#pegadaian").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#produktivitas").maskMoney();</script>
	<script>$("#lelangeauction").maskMoney();</script>
	<script>$("#permohonanonline").maskMoney();</script>
	<script>$("#piutang1").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#piutang2").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
	<script>$("#piutang3").maskMoney({thousands:'.', decimal:',', precision:'0', allowZero:true});</script>
<script>
document.querySelector('#capaian').addEventListener('submit', function(e) {
  var form = this;

  e.preventDefault(); // <--- prevent form from submitting

  swal({
      title: "Simpan data?",
      text: "mengganti data lama dengan data yang baru",
      icon: "warning",
      buttons: [
        'Batalkan',
        'Ya, Simpan'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        swal({
          title: 'Berhasil',
          text: 'Data berhasil diupdate',
          icon: 'success'
        }).then(function() {
          form.submit(); // <--- submit form programmatically
        });
      } else {
        swal("Dibatalkan", "data tidak jadi diubah", "error");
      }
    })
});
</script>
<script>
document.querySelector('#target').addEventListener('submit', function(e) {
  var form = this;

  e.preventDefault(); // <--- prevent form from submitting

  swal({
      title: "Simpan data?",
      text: "mengganti data lama dengan data yang baru",
      icon: "warning",
      buttons: [
        'Batalkan',
        'Ya, Simpan'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        swal({
          title: 'Berhasil',
          text: 'Data berhasil diupdate',
          icon: 'success'
        }).then(function() {
          form.submit(); // <--- submit form programmatically
        });
      } else {
        swal("Dibatalkan", "data tidak jadi diubah", "error");
      }
    })
});
</script>
<?php foreach ($capaian as $index => $key) { 
    $pkn1 = $key->c_pnbp_aset / $target[$index]->pnbp_aset * 100;
    $pkn2 = $key->c_utilisasi / $target[$index]->utilisasi * 100;
    $pkn3 = $key->c_sertifikat / $target[$index]->sertifikat * 100;
    $pkn4 = $key->c_sbsk / $target[$index]->sbsk * 100;
    $pkn5 = $key->c_portofolio_aset / $target[$index]->portofolio_aset *100;
    $pkn6 = $key->c_rereval / $target[$index]->rereval *100;
    $zigmapkn = ($pkn1 + $pkn2 + $pkn3 + $pkn4 + $pkn5 + $pkn6) / 6;
    $pkn = number_format($zigmapkn,0,"","");

    $lelang1 = $key->c_pnbp_lelang / $target[$index]->pnbp_lelang * 100;
    $lelang2 = $key->c_pl1 / $target[$index]->pl1 * 100;
    $lelang3 = $key->c_pegadaian / $target[$index]->pegadaian *100;
    $lelang4 = $key->c_produktivitas / $target[$index]->produktivitas *100;
    $lelang5 = $key->c_lelangeauction / $target[$index]->lelangeauction *100;
    $lelang6 = $key->c_permohonanonline / $target[$index]->permohonanonline *100;
    $zigmalelang = ($lelang1 + $lelang2 + $lelang3 + $lelang4 + $lelang5 + $lelang6) / 6;
    $lelang = number_format($zigmalelang,0,"","");


    $piutang1 = $key->c_penyelesaianbkpn / $target[$index]->penyelesaianbkpn *100;
    $piutang2 = $key->c_tingkatoutstanding / $target[$index]->tingkatoutstanding *100;
    $piutang3 = $key->c_pnbp_piutang / $target[$index]->pnbp_piutang *100;
    $piutanga = ($piutang1 + $piutang2 + $piutang3) / 3;
    $piutangav = number_format($piutanga,0,"","");
    ?>
<script>
var gaugeOptions = {
    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '85%'],
        size: '140%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    exporting: {
        enabled: false
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#DF5353'], // red
            [0.5, '#DDDF0D'], // yellow
            [0.9, '#55BF3B'] // green
        ],
        lineWidth: 0,
        tickWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// PKN
var chartPKN = Highcharts.chart('container-pkn', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'PKN'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Kinerja',
        data: [<?php echo $pkn; ?>],
        dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">%</span>' +
                '</div>'
        },
        tooltip: {
            valueSuffix: ' %'
        }
    }]

}));
// Lelang
var chartLelang = Highcharts.chart('container-lelang', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Lelang'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Kinerja',
        data: [<?php echo $lelang; ?>],
        dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">%</span>' +
                '</div>'
        },
        tooltip: {
            valueSuffix: ' %'
        }
    }]

}));
// Piutang
var chartPiutang = Highcharts.chart('container-piutang', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Piutang Negara'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Kinerja',
        data: [<?php echo $piutangav; ?>],
        dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">%</span>' +
                '</div>'
        },
        tooltip: {
            valueSuffix: ' %'
        }
    }]

}));
</script><?php } ?>
  </body>
</html>