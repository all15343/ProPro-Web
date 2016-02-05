<?php
	if(isset($_POST["branch"])){
		shell_exec("git checkout ".$_POST["branch"]);
	}

	$commands = array(
		'git branch',
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


	$command = "git branch -r --no-color";
	$brancharray = explode("\n",trim(shell_exec($command)));
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>ProPro - Deployment Service</title>
</head>
<body style="background-color: #000000; color: #fafafa; font-weight: bold; padding: 0 10px;">
<pre><br>
<span style="font-size:50px; color:#FF9800;">ProPro - Deployment Service</span>
<br>
<span style="font-size:30px; color: #FF9800;">Branches:</span>
<form method="post" action="deploy.php">
<?php
	foreach($brancharray AS $branch){
		if(strpos($branch, '->') == false)
			echo "<input type='submit' name='branch' value='" . substr(trim($branch),7) . "'/><br>";
	}
?>
</form>
<br>
<span style="font-size:30px; color: #FF9800;">Log - Output:</span>
<br>
<?php echo $output; ?>
</pre>
</body>
</html>
