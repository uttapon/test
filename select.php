<html>
	<head>
		<meta charset="utf-8"/>
		<title>Select Boostraps</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container" role="main">
		<div class="jumbotron" style="margin-top:60px;">
			<h1>Hello World!</h1>
			<p>...</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>
    </div>

	<div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <?php
				include('class/mysql_crud.php');
				$db = new Database();
				$db->connect();

				//public function select($table, $rows = '*', $join = null, $where = null,
				//$order = null, $limit = null){
				$db->select('products', $rows = '*', $join = null, $where = null, 
				$order = null, $limit = null); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
				$res = $db->getResult();

				//echo "<pre>";
				//print_r($res);
			?>
				<!--border="1" style="border:1px #0000 solid;border-collapse:collapse; "-->
				<a href="frm_insert.php" class="btn btn-success btn-lg  text-right" role="button"><span class="glyphicon glyphicon-plus"></span>Insert</a>
				<table class="table table-hover">

				<tr>
					<td><strong>prod_id</strong></td>
					<td><strong>vend_id</strong></td>
					<td><strong>prod_name</strong></td>
					<td><strong>prod_price</strong></td>
					<td><strong>prod_desc</strong></td>
					<td><strong>#</strong></td>
					<td><strong>#</strong></td>
				</tr>
			
			<?php
	
				foreach($res as $key => $value){?>
				<tr>
					<td><?=$value['prod_id']?></td>
					<td><?=$value['vend_id']?></td>
					<td><?=$value['prod_name']?></td>
					<td><?=$value['prod_price']?></td>
					<td><?=$value['prod_desc']?></td>
					<td><a href="frm_edit.php?prod_id=<?=$value['prod_id']?>">Edit</a></td>
					<td><a href="delete.php?prod_id=<?=$value['prod_id']?>">Delete</a></td>
				</tr>
		
		
			<?php
			}
			?>
			</table>

            
          </div><!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div>

</body>
</html>