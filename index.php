<!DOCTYPE html>
<html>
<head>
<title>Responsive module in PHP</title>
<meta name="keywords" content="Responsive framework module PHP">
<meta name="description" content="Free PHP module for incorporating responsive feature">
<meta name="author" content="Ganesh Ghate">
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<?php include_once ("script.php");?>
<style>
body, div, p , h2{
	margin:0;
	padding:0;
}
.row p , .row h2 {
	padding: 3px 5px;
	background-color: #F0AFCC;
	border: 1px solid #E6659F;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
            <div class="col-24"><h2>Resize the window to see the effect. For details please visit <a href="http://www.ganeshghate.com/">www.ganeshghate.com</a></h2></div>
		<div class="col-8">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
			non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="col-16">
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
			veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
			ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
			consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
			Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
			adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, 
			quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut 
			aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
			qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum 
			qui dolorem eum fugiat quo voluptas nulla pariatur?.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
		<p>Level 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
		consequat.
		</p>
			<div class="row">
				<div class="col-10">
					<p>Level 2: Duis aute irure dolor in reprehenderit in voluptate velit 
					esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
					occaecat cupidatat non proident,
					</p>
				</div>
				<div class="col-14">
					<p>Level 2: sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
		<div class="col-16">
		<p>Level 1: Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
		accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab 
		illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
		explicabo.
		</p>
			<div class="row">
				<div class="col-9">
					<p>Level 2: Nemo enim ipsam voluptatem quia voluptas sit 
					aspernatur aut odit aut fugit, sed quia consequuntur 
					magni dolores eos qui ratione voluptatem sequi nesciunt. 
					Neque porro quisquam est, qui dolorem ipsum quia dolor sit 
					amet, consectetur, adipisci velit, sed quia non numquam eius 
					modi tempora incidunt ut.
					</p>
				</div>
				<div class="col-15">
					<p>Level 2: labore et dolore magnam aliquam quaerat voluptatem. 
					Ut enim ad minima veniam, quis nostrum exercitationem ullam 
					corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
					consequatur? Quis autem vel eum iure reprehenderit qui in 
					ea voluptate velit esse quam nihil molestiae consequatur, 
					vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
