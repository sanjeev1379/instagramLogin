<?php

require_once('instagram-api-settings.php');

?>
<html>
<head>
    <title>Instagram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
          .insta { display: flex; justify-content: center; margin-top: 200px; }
    </style>
</head>

<body>
<div class="container">
    <div class="insta">
	    <a href="<?= 'https://api.instagram.com/oauth/authorize/?client_id=' . INSTAGRAM_CLIENT_ID . '&redirect_uri=' . urlencode(INSTAGRAM_REDIRECT_URI) . '&response_type=code&scope=basic' ?>">
		<button type="button" class="btn btn-primary">Login with Instagram</button>
		</a>
	</div>
</div>
</body>

</html>