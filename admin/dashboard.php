<?php 
session_start();
extract($_REQUEST);
include('../connection.php');
$admin=$_SESSION['admin_logged_in'];	
if($admin=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="../dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../dist/css/demo.css">
  <link rel="stylesheet" href="../dist/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <ul class="navbar-nav navbar-right">
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">View All</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $admin; ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="dashboard.php?option=admin_profile" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="logout.php" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Property Manager</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="devlop/img2.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo $admin; ?></div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
              <a href="dashboard.php?option=admin_profile"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a href="dashboard.php?option=update_password"><i class="ion ion-clipboard"></i><span>Update Password</span></a>
            </li>
            <li>
              <a href="dashboard.php?option=feedback"><i class="ion ion-clipboard"></i><span>Feedback</span></a>
            </li>
            <li>
              <a href="dashboard.php?option=properties"><i class="ion ion-clipboard"></i><span>Properties</span></a>
            </li>
            <li>
              <a href="dashboard.php?option=booking_details"><i class="ion ion-clipboard"></i><span>Booking Details</span></a>
            </li>
            <li>
              <a href="dashboard.php?option=user_registration"><i class="ion ion-clipboard"></i><span>User Registration</span></a>
            </li>
            <li class="menu-header">Setting</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Settings</span></a>
              <ul class="menu-dropdown">
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Logo Update</a></li>
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Address Update</a></li>
              </ul>
            </li>
            <li class="menu-header">More</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
              <ul class="menu-dropdown">
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                  <ul class="menu-dropdown">
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                    <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                      <ul class="menu-dropdown">
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
            </li>
            <li>
              <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
            </li>          </ul>
        </aside>
      </div>
      <div class="main-content">
      <section class="section">
      <?php 
@$opt=$_GET['option'];
if($opt=="")
{
include('reports.php');	
}
else
{
	if($opt=="feedback")
	{
	include('feedback.php');	
	}
	else if($opt=="update_slider")
	{
	include('update_slider.php');	
	}
	else if($opt=="add_slider")
	{
	include('add_slider.php');	
	}
	else if($opt=="update_password")
	{
	include('update_password.php');	
	}
	else if($opt=="properties")
	{
	include('properties.php');	
	}
	
	else if($opt=="add_rooms")
	{
	include('add_rooms.php');	
	}
	else if($opt=="delete_room")
	{
	include('delete_room.php');	
	}
  
  else if($opt=="update_room")
  {
    include('update_room.php');
  }
  else if($opt=="booking_details")
  {
    include('booking_details.php');
  }
  else if($opt=="user_registration")
  {
    include('user_registration.php');
  }
  else if($opt=="admin_profile")
  {
    include('admin_profile.php');
  }
}
?>
</section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="../index.php">Kimanzi</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../dist/js/sa-functions.js"></script>
  
  <script src="../dist/modules/chart.min.js"></script>
  <script src="../dist/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
  <script src="../dist/js/demo.js"></script>
</body>

</html>