<?php include_once 'conndb.php'; 

if (isset($_GET['motclef'])) {
	$motclef = $_GET['motclef'];
	$q = array('motclef'=>'%'.$motclef. '%');
	$sql = "SELECT * FROM country WHERE name LIKE :motclef OR code3l LIKE :motclef";
	$req = $db->prepare($sql);
	$req->execute($q);
	$count = $req->rowcount($sql);


	while ($result = $req->fetch(PDO::FETCH_OBJ)) {

		echo '<div class="col s12 m6">
		<h5 class="header">'.$result->name.'</h5>
		<div class="card horizontal grey lighten-2">
		<div class="card-image">
		<img src="http://www.countryflags.io/'.$result->code2l.'/flat/64.png">
		</div>
		<div class="card-stacked">
		<div class="card-content">
		<p class="">Code Pays</p>
		<p class="">'.$result->code2l.'</p>
		</div>
		</div>
		</div>
		</div>';
	}

}
?>

