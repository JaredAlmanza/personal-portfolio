<?php
function redirect($url)
{?>
		<script type="text/javascript">
			document.location.href="<?php echo $url;?>";
		</script>
<?php
die;
}

function db_connect($db)
{
	$hostname="localhost";
	$username="web_user";
	$password="BSihzCG@eVAyMipe";
	$dblink=new mysqli($hostname,$username,$password,$db);
	if (mysqli_connect_error())
	{
		die("<h2>Something went wrong with our dB connection!<br>".mysqli_connect_error().'</h2>');
	}
	return $dblink;
}

function run_query($sql, $db = "contact_data") {
    $dblink = db_connect($db);
    $result = $dblink->query($sql);
    if (!$result) {
        die("<h2>SQL Error:<br>$sql<br>".$dblink->error."</h2>");
    }
    return $result;
}
?>