<?php
	include ('tabela.php');
	$time1 = 0;
	$time2 = 0;

	foreach ($tabela->equipes as $id => $equipe)
	{
		$time = (array) $equipe;
		if($equipes[$time['id']]["nome-comum"] == $_GET["time1"])
			$time1 = $equipes[$time['id']]["id"];
		elseif($equipes[$time['id']]["nome-comum"] == $_GET["time2"])
			$time2 = $equipes[$time['id']]["id"];
	}

	if($time1 == 0 || $time2 == 0)
		echo 'Times não encontrados';
	else
	{
	    foreach($table->classificacao->equipe as $id => $equipe) 
	    {
	        $time = (array) $equipe;
	        if($time["id"] == $time1)
	        	$time1pts = $time["pg"]->total;

	        if($time["id"] == $time2)
	        	$time2pts = $time["pg"]->total;
	    }
	    echo 'A diferença de pontos entre ',$_GET["time1"], ' e ', $_GET["time2"], ' é de: ',$time1pts-$time2pts, ' pontos';
	}
?>