<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BBC IMD</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/js/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.css">
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- Leave those next 4 lines if you care about users using IE8 -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <?php
    if ($handle = opendir('.')) {

      while (false !== ($entry = readdir($handle))) {

          if ($entry != "." && $entry != "..") {

              echo "$entry\n";
          }
      }

      closedir($handle);
    }
  ?>
	<div id="world-map-markers" style="width:100%; height:100px;"></div>



	<a href="inside.html"> Launch demo modal</a>


  <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="./assets/js/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="./assets/js/jquery-jvectormap-2.0.3/jquery-jvectormap-world-mill.min.js"></script>
  <script src="./assets/js/main.js"></script>

</body>
</html>