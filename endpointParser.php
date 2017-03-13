<title>JS Parser</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<div class="container">

<h1>Endpoint parser</h1>
<p>Potential endpoints are<p>

<div class="row">

<?php
$target = preg_replace("/[^a-zA-Z0-9_:\/\.\-?=]/","",$_GET['target']);
$parsed_url = parse_url($target);
echo "The target is " . $target ."<br>";

?>

<br>

<h1>Potential Endpoint are</h1>

<?php 
echo exec("python endpointParser.py " . $target);

echo "<a href=".$target.">click here to view source"."</a>";

?>

</div>

<a href=scanAndParse.php>Back</a>
