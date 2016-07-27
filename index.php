<?php
session_start();
if(!isset($_SESSION['username'])){ header("location:login.php"); }
//cek idlevel user
if( $_SESSION['idlevel']!="1"
&& $_SESSION['idlevel']!="2" 
&& $_SESSION['idlevel']!="4" 
&& $_SESSION['idlevel']!="3" 
&& $_SESSION['idlevel']!="5" 
&& $_SESSION['idlevel']!="6" 
&& $_SESSION['idlevel']!="7"
&& $_SESSION['idlevel']!="9"
&& $_SESSION['idlevel']!="8"
&& $_SESSION['idlevel']!="10"
&& $_SESSION['idlevel']!="11")
{
	header("location:login.php");
}
$menu = !empty($_GET['menu']) ? $_GET['menu'] : "0";
?>

<html lang="en">
<head>
  <title>REPOSITORI - DINAS BINA MARGA PROVINSI LAMPUNG</title>
  <link rel="shortcut icon" type="text/css" href="images/logo-pu.jpg"/>
  <meta http-equiv="" content="0; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet" />
  <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/nprogress.js"></script>

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><img height="38px" width="38px" src="images/logo-pu.jpg"> <span>REPOSITORY DINAS BINA MARGA</p></span></a>
          </div>
          <div class="clearfix"></div>

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
             
              <ul class="nav side-menu">
				<?php
					if($_SESSION['idlevel']=="2") { ?>
					<li <?php if($menu==2) ?>>
							<a href="index.php?menu=2"><i class="fa fa-file"></i>Data Bidang Umum</a>
                    </li>
					<li <?php if($menu==10) ?>>
							<a href="index.php?menu=10"> <i class="fa fa-user"></i> Data User Umum</a>
					</li>
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="4") { ?>
					<li <?php if($menu==3) ?>>
							<a href="index.php?menu=3"><i class="fa fa-file"></i>Data Bidang Kepegawaian</a>
                    </li>
					<li <?php if($menu==14) ?>>
							<a href="index.php?menu=14"> <i class="fa fa-user"></i> Data User Kepegawaian</a>
					</li>
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="3") { ?>
					<li <?php if($menu==4) ?>>
							<a href="index.php?menu=4"><i class="fa fa-file"></i>Data Bidang Kesekretariatan</a>
                    </li>
					<li <?php if($menu==13) ?>>
							<a href="index.php?menu=13"> <i class="fa fa-user"></i> Data User Kesekretariatan</a>
					</li>
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="5") { ?>
					<li <?php if($menu==5) ?>>
							<a href="index.php?menu=5"><i class="fa fa-file"></i>Data Bidang Perencanaan dan Pelaporan</a>
                    </li>
					<li <?php if($menu==15) ?>>
							<a href="index.php?menu=15"> <i class="fa fa-user"></i> Data User Perencanaan</a>
					</li>
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="6") { ?>
					<li <?php if($menu==6) ?>>
							<a href="index.php?menu=6"><i class="fa fa-file"></i>Data Bidang Jakon</a>
                    </li>
					<li <?php if($menu==16) ?>>
							<a href="index.php?menu=16"> <i class="fa fa-user"></i> Data User Jakon</a>
					</li>
				<?php } ?>
				
				<!--SuperAdmin-->
				<?php
					if($_SESSION['idlevel']=="1") { ?>
				<li <?php if($menu==1) ?>>
					<a href="index.php?menu=1"><i class="fa fa-home"></i>Dashboard</a>
					</li>
				<li><a><i class="fa fa-database"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				 <li <?php if($menu==21) ?>>
							<a href="index.php?menu=21">Data Bidang</a>
				</li>
				<li <?php if($menu==22) ?>>
							<a href="index.php?menu=22">Data Kategori</a>
				</li>
				<li <?php if($menu==23) ?>>
							<a href="index.php?menu=23">Data Level User</a>
				</li>
				</ul>
				</li>
                <li <?php if($menu==11) ?>>
							<a href="index.php?menu=11"> <i class="fa fa-file"></i> View All Repositori</a>
				</li>
				<li <?php if($menu==12) ?>>
							<a href="index.php?menu=12"> <i class="fa fa-user"></i> View All User</a>
				</li>
				
				<?php } ?>
				
				<!--Pegawai-->
				<?php
					if($_SESSION['idlevel']=="7") { ?>
                <li <?php if($menu==8) ?>>
							<a href="index.php?menu=8"> <i class="fa fa-file"></i> Repositori</a>
				</li>
				<!--<li <?php if($menu==24) ?>>
							<a href="index.php?menu=24"> <i class="fa fa-file"></i> Profil</a>
				</li> -->
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="9") { ?>
                <li <?php if($menu==17) ?>>
							<a href="index.php?menu=17"> <i class="fa fa-file"></i> Repositori</a>
				</li>
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="8") { ?>
                <li <?php if($menu==18) ?>>
							<a href="index.php?menu=18"> <i class="fa fa-file"></i> Repositori</a>
				</li>
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="10") { ?>
                <li <?php if($menu==19) ?>>
							<a href="index.php?menu=19"> <i class="fa fa-file"></i> Repositori</a>
				</li>
				<?php } ?>
				
				<?php
					if($_SESSION['idlevel']=="11") { ?>
                <li <?php if($menu==20) ?>>
							<a href="index.php?menu=20"> <i class="fa fa-file"></i> Repositori</a>
				</li>
				<?php } ?>
				</ul>
				
				</div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				 <?php echo "".$_SESSION['nmuser']; ?> 
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  
                  <li>
					<?php echo '<a href="sistemout.php" class="fa fa-sign-out pull-right" > Log Out</a> '; ?>
                  </li>
                </ul>
              </li>
			  </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
		
		<?php
			switch($menu)
			{
			case ('0') : include ('./menu/awal.php'); break;
			case ('30') : include ('./menu/download.php'); break;
			
			//Admin Umum
			
			case('2'): include_once('./menu/bidang_umum.php'); break;
			case('10'): include_once('./menu/user_umum.php'); break; //User Umum
			//Admin Pegawai
			case('3'): include_once('./menu/bidang_pegawai.php'); break;
			case('14'): include_once('./menu/user_kepegawaian.php'); break; //User Kepegawaian
			//Admin Kesekretariatan
			case('4'): include_once('./menu/bidang_kesekretariatan.php'); break;
			case('13'): include_once('./menu/user_kesekretariatan.php'); break; //User Kesekretariatan
			//Admin Perencanaan
			case('5'): include_once('./menu/bidang_perencanaan.php'); break;
			case('15'): include_once('./menu/user_perencanaan.php'); break; //User Perencanaan
			//Admin Jakon
			case('6'): include_once('./menu/bidang_jakon.php'); break;
			case('16'): include_once('./menu/user_jakon.php'); break; //User Jakon
			
			//SuperAdmin
			case('1') : include_once('./menu/beranda.php'); break;
			case('11'): include_once('./menu/repositori.php'); break;
			case('12'): include_once('./menu/user.php'); break;
			case('21'): include_once('./menu/master_bidang.php'); break;
			case('22'): include_once('./menu/master_kategori.php'); break;
			case('23'): include_once('./menu/master_leveluser.php'); break;
			
			//Pegawai
			case('8'): include_once('./menu/repo_umum.php'); break;
			//case('24'): include_once('./menu/edit_umum.php'); break;
			
			case('17'): include_once('./menu/repo_kepegawaian.php'); break;
			case('25'): include_once('./menu/edit_kepegawaian.php'); break;
			
			case('18'): include_once('./menu/repo_kesekretariatan.php'); break;
			case('26'): include_once('./menu/edit_kesekretariatan.php'); break;
			
			case('19'): include_once('./menu/repo_perencanaan.php'); break;
			case('27'): include_once('./menu/edit_perencanaan.php'); break;
			
			case('20'): include_once('./menu/repo_jakon.php'); break;
			case('28'): include_once('./menu/edit_jakon.php'); break;
			case('29'): include_once('./menu/download.php'); break;
			
		
			?>
		<?php } ?>
      </div>

      </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Copyright ©2016 - Repositori Bina Marga Lampung by <a href="#">Jution Candra Kirana</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

 <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>

  <script src="js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="js/flot/date.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
  <script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  <script type="text/javascript" src="js/maps/gdp-data.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script>
    $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src="js/skycons/skycons.min.js"></script>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    var data = {
      labels: [
        "Symbian",
        "Blackberry",
        "Other",
        "Android",
        "IOS"
      ],
      datasets: [{
        data: [15, 20, 30, 10, 30],
        backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#455C73",
          "#26B99A",
          "#3498DB"
        ],
        hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#34495E",
          "#36CAAB",
          "#49A9EA"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>