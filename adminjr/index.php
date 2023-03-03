<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>License</title>

  <!-- Favicons -->
  <link href="img/favicon1.ico" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <link href="css/table-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>PERURI</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../login/logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a><img src="img/b.png" class="img-circle" width="80"></a></p>
          <li class="mt">
            <a href="index.php?page=home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="index.php?page=sla">
              <i class="fa fa-spinner"></i>
              <span>SLA</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-ticket"></i>
              <span>ATS</span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=atsa">Periode A</a></li>
              <li><a href="index.php?page=atsb">Periode B</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cog"></i>
              <span>Network</span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=redhat">Redhat</a></li>
              <li><a href="index.php?page=purestroge">Purestroge</a></li>
              <li><a href="index.php?page=vmware">VMWare</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-database"></i>
              <span>Infra</span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=fortigate">Fortigate</a></li>
              <li><a href="index.php?page=panorama">Panorama</a></li>
              <li><a href="index.php?page=paloalto">Paloalto</a></li>
              <li><a href="index.php?page=splunk">Splunk</a></li>
              <li><a href="index.php?page=solarwind">Solarwind</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-folder"></i>
              <span>DNS</span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=ngtm01">SSL DNS</a></li>
              <li><a href="index.php?page=fortianalyzer">PERANGKAt</a></li>
            </ul>
          </li>
          <li>
            Product
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa-sharp fa-solid fa-cube"></i>
              <span>Peruri CODE</span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=eartag">EARTAG</a></li>
              <li><a href="index.php?page=shield">SHIELD</a></li>
              <li><a href="index.php?page=keyla">KEYLA</a></li>
              <li><a href="index.php?page=qr">QR</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-signature"></i>
              <span>Peruri SIGN</span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=sign">
              <i class="fa fa-signature"></i>PERISAI</a></li>
              <li><a href="index.php?page=meterai">
              <i class="fa-sharp fa-solid fa-pager"></i>MATERAI</a></li>
              <li><a href="index.php?page=tera">
              <i class="fa-sharp fa-regular fa-stamp"></i>TERA</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa sharp fa-solid fa-shield-halved"></i>
              <span>Peruri Trust</span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=trust">Track & Trace</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <ul class="sub">
              <li class="sub">
              </li>
              <li class="sub">
              </li>
              <li class="sub">
                <a href="javascript:;">
                  <i class="fa fa-ticket"></i>

                </a>
                <ul class="sub">

                </ul>
              </li>
            </ul>
          </li>

          <li>
            Admin Junior
          </li>
          <li class="sub-menu">
            <a href="index.php?page=updatediri">
              <i class="fa fa-user"></i>
              <span> Profile</span>
            </a>
          </li>
        </ul>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">


        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          switch ($page) {
            case 'home':
              include "halaman/index.php";
              break;
            case 'updatediri';
              include "../login/updatediri.php";
              break;

              case 'trust':
              include "halaman/product/trust/trust.php";
              break;
            case 'detailtrust':
              include "halaman/product/trust/detail.php";
              break;
            case 'edittrust':
              include "halaman/product/trust/edit.php";
              break;
            case 'deletetrust':
              include "halaman/product/trust/delete.php";
              break;
              case 'tambahtrust':
                include "halaman/product/trust/tambah.php";
                break;

            case 'sign':
              include "halaman/product/sign/sign.php";
              break;
            case 'detailsign':
              include "halaman/product/sign/detail.php";
              break;
            case 'editsign':
              include "halaman/product/sign/edit.php";
              break;
            case 'deletesign':
              include "halaman/product/sign/delete.php";
              break;
              case 'tambahsign':
                include "halaman/product/sign/tambah.php";
                break;

            case 'shield':
              include "halaman/product/shield/shield.php";
              break;
            case 'detailshield':
              include "halaman/product/shield/detail.php";
              break;
            case 'editshield':
              include "halaman/product/shield/edit.php";
              break;
            case 'deleteshield':
              include "halaman/product/shield/delete.php";
              break;
              case 'tambahshield':
                include "halaman/product/shield/tambah.php";
                break;

            case 'qr':
              include "halaman/product/qr/qr.php";
              break;
            case 'detailqr':
              include "halaman/product/qr/detail.php";
              break;
            case 'editqr':
              include "halaman/product/qr/edit.php";
              break;
            case 'deleteqr':
              include "halaman/product/qr/delete.php";
              break;
              case 'tambahqr':
                include "halaman/product/qr/tambah.php";
                break;

            case 'keyla':
              include "halaman/product/keyla/keyla.php";
              break;
            case 'detailkeyla':
              include "halaman/product/keyla/detail.php";
              break;
            case 'editkeyla':
              include "halaman/product/keyla/edit.php";
              break;
            case 'deletekeyla':
              include "halaman/product/keyla/delete.php";
              break;
              case 'tambahkeyla':
                include "halaman/product/keyla/tambah.php";
                break;

            case 'exporteartag':
              include "halaman/product/eartag/export.php";
              break;
            case 'eartag':
              include "halaman/product/eartag/eartag.php";
              break;
            case 'detaileartag':
              include "halaman/product/eartag/detail.php";
              break;
            case 'editeartag':
              include "halaman/product/eartag/edit.php";
              break;
            case 'deleteeartag':
              include "halaman/product/eartag/delete.php";
              break;
            case 'tambaheartag':
              include "halaman/product/eartag/tambah.php";
              break;

            case 'meterai':
              include "halaman/product/meterai/meterai.php";
              break;
            case 'detailmeterai':
              include "halaman/product/meterai/detail.php";
              break;
            case 'editmeterai':
              include "halaman/product/meterai/edit.php";
              break;
            case 'deletemeterai':
              include "halaman/product/meterai/delete.php";
              break;
              case 'tambahmeterai':
                include "halaman/product/meterai/tambah.php";
                break;

            case 'tera':
              include "halaman/product/tera/tera.php";
              break;
            case 'detailtera':
              include "halaman/product/tera/detail.php";
              break;
            case 'edittera':
              include "halaman/product/tera/edit.php";
              break;
            case 'deletetera':
              include "halaman/product/tera/delete.php";
              break;
              case 'tambahtera':
                include "halaman/product/tera/tambah.php";
                break;

            case 'profil':
              include "../login/profil.php";
              break;
            case 'detailprofildiri':
              include "halaman/license/profildiri/detail.php";
              break;
            case 'editprofildiri':
              include "halaman/license/profildiri/edit.php";
              break;
            case 'deleteprofildiri':
              include "halaman/license/profildiri/delete.php";
              break;

            case 'sla':
              include "halaman/sla/sla.php";
              break;

            case 'register':
              include "../login/register.php";
              break;

            case 'atsb':
              include "halaman/ats/atsb/ats.php";
              break;
            case 'detailatsb':
              include "halaman/ats/atsb/detail.php";
              break;
            case 'tambahatsb':
              include "halaman/ats/atsb/tambah.php";
              break;
            case 'editatsb':
              include "halaman/ats/atsb/edit.php";
              break;

            case 'atsa':
              include "halaman/ats/atsa/ats.php";
              break;
            case 'detailatsa':
              include "halaman/ats/atsa/detail.php";
              break;
            case 'tambahatsa':
              include "halaman/ats/atsa/tambah.php";
              break;
            case 'editatsa':
              include "halaman/ats/atsa/edit.php";
              break;

            case 'splunk':
              include "halaman/license/splunk/splunk.php";
              break;
            case 'detailsplunk':
              include "halaman/license/splunk/detail.php";
              break;
            case 'tambahsplunk':
              include "halaman/license/splunk/tambahsplunk.php";
              break;
            case 'editsplunk':
              include "halaman/license/splunk/edit.php";
              break;

            case 'solarwind':
              include "halaman/license/solarwind/solarwind.php";
              break;
            case 'detailsolarwind':
              include "halaman/license/solarwind/detail.php";
              break;
            case 'tambahsolarwind':
              include "halaman/license/solarwind/tambahsolarwind.php";
              break;
            case 'editsolarwind':
              include "halaman/license/solarwind/edit.php";
              break;

            case 'panorama':
              include "halaman/license/panorama/panorama.php";
              break;
            case 'detailpanorama':
              include "halaman/license/panorama/detail.php";
              break;
            case 'tambahpanorama':
              include "halaman/license/panorama/tambahpanorama.php";
              break;
            case 'editpanorama':
              include "halaman/license/panorama/edit.php";
              break;

            case 'paloalto':
              include "halaman/license/paloalto/paloalto.php";
              break;
            case 'detailpaloalto':
              include "halaman/license/paloalto/detail.php";
              break;
            case 'tambahpaloalto':
              include "halaman/license/paloalto/tambahpaloalto.php";
              break;
            case 'editpaloalto':
              include "halaman/license/paloalto/edit.php";
              break;

            case 'fortigate':
              include "halaman/license/fortigate/fortigate.php";
              break;
            case 'detailfortigate':
              include "halaman/license/fortigate/detail.php";
              break;
            case 'tambahfortigate':
              include "halaman/license/fortigate/tambahfortigate.php";
              break;
            case 'editfortigate':
              include "halaman/license/fortigate/edit.php";
              break;

            case 'fortianalyzer':
              include "halaman/license/fortianalyzer/fortianalyzer.php";
              break;
            case 'detailfortianalyzer':
              include "halaman/license/fortianalyzer/detail.php";
              break;
            case 'tambahfortianalyzer':
              include "halaman/license/fortianalyzer/tambahfortianalyzer.php";
              break;
            case 'editfortianalyzer':
              include "halaman/license/fortianalyzer/edit.php";
              break;

            case 'redhat':
              include "halaman/license/redhat/redhat.php";
              break;
            case 'detailredhat':
              include "halaman/license/redhat/detail.php";
              break;
            case 'tambahredhat':
              include "halaman/license/redhat/tambahredhat.php";
              break;
            case 'editredhat':
              include "halaman/license/redhat/edit.php";
              break;

            case 'ngtm01':
              include "halaman/license/ngtm01/ngtm01.php";
              break;
            case 'detailngtm01':
              include "halaman/license/ngtm01/detail.php";
              break;
            case 'tambahngtm01':
              include "halaman/license/ngtm01/tambahngtm01.php";
              break;
            case 'editngtm01':
              include "halaman/license/ngtm01/edit.php";
              break;

            case 'vmware':
              include "halaman/license/vmware/vmware.php";
              break;
            case 'detailvmware':
              include "halaman/license/vmware/detail.php";
              break;
            case 'tambahvmware':
              include "halaman/license/vmware/tambahvmware.php";
              break;
            case 'editvmware':
              include "halaman/license/vmware/edit.php";
              break;

            default:
              echo "<center><h1>UNDER MAINTENANCE ! ! !</h1></center>";
              break;
          }
        } else {
          include "halaman/index.php";
        }

        ?>


        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section>
  <footer class="site-footer">
    <div class="text-center">
      <p>
        &copy; Copyrights <strong>Digital Operation</strong>. All Rights Reserved
      </p>
    </div>
  </footer>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>

  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

  <script src="lib/fancybox/jquery.fancybox.js"></script>

</body>

</html>