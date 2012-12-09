<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

<body>
<?php 
	
	echo $this->lang->line('hi');

?>

<p><a href="/test/language/?lang=english&uri=<?php print(uri_string()); ?>" > English</a></p>
<p><a href="/test/language/?lang=spanish&uri=<?php print(uri_string()); ?>" > Español</a></p>

<body>
</html>