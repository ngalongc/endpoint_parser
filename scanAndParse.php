<title>JS Parser</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<div class="container">

<h1>Parser</h1>

<?php
$target = preg_replace("/[^a-zA-Z0-9_:\/\.\-?=]/","",$_GET['target']);
$parsed_url = parse_url($target);
echo "The target is " . $target ."<br>";

?>

<?php

#Initiate the scanning 
echo "The results are <br>";
echo exec("python scanAndParse.py " . $target);

?>

<div class="row">

<h2>Or You can Enter the intended js file here</h2>
<form action="endpointParser.php" method=get>

    <div class="col-sm-8"><input class="col-sm-12" name=target type=text id=website placeholder="https://example.com/js.js" value=""></input></div>
    <div class="col-sm-4"><input type=submit value="Go!"></input></div>

</form>

</div>

<a href=jsparser.php>back</a

