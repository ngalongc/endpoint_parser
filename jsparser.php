<title>JS Parser</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<div class="container">

<h1>JSParser</h1>
<p>Please enter the site you want to fetch the JS file</p>
<p>After you submit the site, detected JS file would start parsing.</p>

<div class="row">

<form action="scanAndParse.php" method=get>

    <div class="col-sm-8"><input class="col-sm-12" name=target type=text id=website placeholder="https://example.com" value=""></input></div>
    <div class="col-sm-4"><input type=submit value="Go!"></input></div>

</form>
</div>
