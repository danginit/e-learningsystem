<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Total users</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>StockUpWorld </span>Affliate</a>
				<ul class="nav navbar-top-links navbar-right">

							</li>
						</ul>
					</li>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
		<div class="profile-usertitle">
				<div class="profile-usertitle-name">Pankaj</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li ><a href="total_user.php"><em class="fa fa-dashboard">&nbsp;</em> Total User</a></li>
			<li ><a href="affliate.php"><em class="fa fa-dashboard">&nbsp;</em> Affliate</a></li>      
      <li ><a href="affliate.php"><em class="fa fa-dashboard">&nbsp;</em> Affliate</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Total User</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Total User</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<table class="table" id="dataTable" width="100%" cellspacing="0">
		      <thread>
		        <tr>
		          <th>Name</th>
		          <th>Mobile no</th>
							<th>Edit</th>
							<th>Delete</th>
		        </tr>
		      </thread>
							<?php
							 #$connection = mysqli_connect("localhost","root","","db_elearning");
							 #$query = ##### FROM tblstudent";
							 #$query_run = mysqli_query($connection, $query);
              ?>

    <tbody>
      <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
					?>
				 <!--<tr>
						<td> <?php #echo $row['Fname']; ?></td>
						<td> <?php #echo $row['MobileNo']; ?></td>
						<td>
									<button type = "submit" class="btn btn-success">Edit</button>
						</td>
						<td>
									<button type = "submit" class="btn btn-success">Delete</button>
						</td>
					<tr>
        <?php
			   }
      }
			else{
					echo 'No Record found';
				}
				?>
    </tbody>
  	</table>
	</div>
</div>
</div>

</body>
</html>
