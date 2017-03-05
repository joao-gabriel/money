<!DOCTYPE html>
<html>
<head>
  <title>Money</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('categories')?>'>Categories</a> |
		<a href='<?php echo site_url('tags')?>'>Tags</a> |
		<a href='<?php echo site_url('entries')?>'>Entries</a>
	</div>