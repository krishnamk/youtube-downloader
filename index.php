<?php
include('YouTubeDownloader.php');
if($_POST){
	$yt = new YouTubeDownloader();
	$links = $yt->getDownloadLinks($_POST['link']);
	
}else{
	$links=0;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>YOUTUBE DOWNLOADER</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">YOUTUBE DOWNLOADER</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<!-- <span class="navbar-toggler-icon"></span> -->
		</button>
		<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
   <!--  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
  </ul> -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form> -->
<!-- </div> -->
</nav>
<div class="container">
	<form method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="col-lg-8" style="float: left;">
					<div class="form-group">
						<label class="col-lg-12" for="exampleInputEmail1">&nbsp;</label>
						<input type="text" class="form-control" id="link" name="link" placeholder="Enter Youtube Link" value="<?php if($_POST){ echo $_POST['link']; }?>">
					</div>
				</div>
				<div class="col-lg-4" style="float: left;">
					<div class="form-group">
						<label class="col-lg-12" for="exampleInputEmail1">&nbsp</label>
						<button class="btn btn-outline-success" type="submit">Search</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php if($_POST){
		 if(!empty($links)){   ?>
		<div class="row"><h4> Available Results</h4></div>
		<div class="row">
		<?php foreach ($links as $key => $link) { ?>
			<div class="col-lg-12" style="margin-top: 10px;background-color: whitesmoke;padding: 24px;">
				<div class="col-lg-10" style="float: left;"><?php echo $link['format']; ?></div>
				<div class="col-lg-2" style="float: left;"><a href="<?php echo $link['url']; ?>" class="btn btn-outline-success" >DOWNLOAD</a></div>
			</div>
		<?php } ?>
	</div>

	<?php }else{ ?>
			<div class="row"><h4> Sorry, No videos Found</h4></div>
	<?php } } ?>
	
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
