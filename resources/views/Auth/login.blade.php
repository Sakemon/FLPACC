<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>FLP Login</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="public/vendors/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="public/vendors/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="public/vendors/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button plibrary -->
	<link rel="stylesheet" href="public/vendors/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="public/vendors/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="public/vendors/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="public/vendors/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="public/vendors/css/style.css">

	<link rel="stylesheet" href="public/vendors/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="public/vendors/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="public/vendors/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="public/vendors/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="public/vendors/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="public/vendors/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="public/vendors/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="public/vendors/css/style.css">


	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="login-page bk-img" style="background-image: url(public/Blue.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x"> </h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<a><center><img src="public/logoacc.png" width="100px"/></center></a>
								</br>
								<form action="{{ URL::to('login') }}" method="post">
						          {{ csrf_field() }}
						      <div class="form-group has-feedback">
						        <input type="text" class="form-control" name="username" placeholder="Username" required>
						        <span class="glyphicon glyphicon-user form-control-feedback"></span>
						      </div>
						      <div class="form-group has-feedback">
						        <input type="password" class="form-control" name="password" placeholder="Password" required>
						        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
						      </div>

								</br>
									<a><center>Astra Credit Companies</center></a>
									<a><center>Flexy Loan Pro<center></a>
								</br>

						      <div class="row">
						        <div class="col-xs-8">
						          <div class="checkbox icheck">
						          </div>
						        </div>
						          @if($pesan!='')

						        <div class="alert alert-danger">
						       {{$pesan}}


						        </div>
						        @endif


						        <!-- /.col -->
						        <div class="col-xs-4">
						          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
						        </div>
						        <!-- /.col -->
						      </div>
						    </form>
                </div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
