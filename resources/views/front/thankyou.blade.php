
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Css files -->
<!-- Bootstrap Css -->
<link href="{{ asset('') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<!-- Main Css -->
<link href="css/main.css" rel="stylesheet" type="text/css">
<!-- Media-Query Css -->
<!-- <link href="css/responsive.css" rel="stylesheet" type="text/css"> -->
<!-- Font-Awesome Css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Animate Css -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <link href="css/animate.min.css" rel="stylesheet" type="text/css"> -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- JS Files -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->


<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="   crossorigin="anonymous"></script>

<!-- Favicon -->

<link href="images/logo.png" rel="shortcut icon" type="images/logo.png">

<style>
	select option:disabled{
		color:#000 !important;
		font-weight:bold !important;
		background: #ccc !important;

	}

	.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#blah{
    width: 100%;
}

</style>

</head>


<body id="home-page">


<div class="jumbotron text-center">
    <h1 class="display-3">Thank You!</h1>
    <p class="lead"><strong>Thanks for submission</strong> Your application is in under review. will get back to you soon</p>
    <hr>

    <p class="lead">
      <a class="btn btn-primary btn-sm" href="{{ route('welcome')}}" role="button">Continue to homepage</a>
      <a class="btn btn-primary btn-sm" href="{{ route('front.generate.slip',$application->id)}}" role="button">Download Slip</a>
    </p>
  </div>
