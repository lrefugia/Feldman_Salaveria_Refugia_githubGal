<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to the Blu-ray database!</title>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'><link rel="stylesheet" href="css/foundation.css"/>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<a href="index.php"><h1>Welcome to the biggest Blu-ray database</h1></a>

    <br>
    <div class="row">
    	<div class="large-5 medium-5 small-5 large-centered medium-centered small-centered columns" id="searchInput">
            <form>
            <input id="srch" type="text" size="30" placeholder="SEARCH...">
            <div id="livesrch"></div>
            </form>
    	</div>
    </div>
    <br>
<?php include('includes/nav.html'); ?>

	<div class="row">
        <div class="details">
        </div>
        <div class="movies">
        </div>
<?php include('includes/footer.html'); ?>
<script src="js/utility.js"></script>
</body>
</html>