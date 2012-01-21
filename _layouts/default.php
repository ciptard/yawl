<!DOCTYPE html>
<html> 
<head>
	<title><?= raft("title") ?></title>
	
	<!-- UTF-8 (Unicode) encoding -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <!-- HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css" />
	
	<link rel="stylesheet" href="css/default.css" type="text/css" />

	<?= raft("head") ?>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="offset3 span10">
      <div class="hero-unit">
        <h1>YAWL <span>&amp; Others!</span></h1>
        <p>
          A demo of <a href="http://github.com/ianli/yawl/">YAWL</a>,
          a very simple blogging platform in PHP.
        </p>
      </div>
      
      <div id="content">
        <?= raft("content") ?>
      </div>
      
      <footer>
          Copyright 2012 <a href="http://ianli.com">Ian Li</a>.
          Licensed under <a href="http://www.opensource.org/licenses/mit-license.php">the MIT License</a>.
      </footer>
    </div>
  </div>
</div>

<a href="http://github.com/ianli/yawl/"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/71eeaab9d563c2b3c590319b398dd35683265e85/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub"></a>

</body>
</html>
