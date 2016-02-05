<?php
	$commands = array(
		'git fetch',
		'git pull',
		'git status',
		'git log --graph --abbrev-commit --date=relative --format=format:\'%h - (%ar) %s - %an%d\' --all',
	);
	$output = '';
	foreach($commands AS $command){
		$tmp = shell_exec($command);
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #FF9800;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp));
		if(strlen($tmp)>0){
			$output .= "<br><br>";
		}
		else {
			$output .= "<br>";
		}
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #fafafa; font-weight: bold; padding: 0 10px;">
<pre><br>
<span style="font-size:40px; color:#FF9800;">ProPro - Deploy Service
</span><br>
<?php echo $output; ?>
</pre>
</body>
</html>
