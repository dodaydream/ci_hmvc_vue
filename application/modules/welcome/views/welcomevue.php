<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - CI HMVC Vue Bootstrap Template</title>


  </head>

  <body>
	<div id="app">
		<hello-world msg="<?php echo 'This message comes from vue' ?>"></hello-world>
	</div>
    
    <script src="<?php echo site_url() ?>src/dist/build.js"></script>
    


  </body>

</html>
