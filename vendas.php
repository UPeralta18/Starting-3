<?php
	$semana = array(0, 0, 0, 0);
	$vendedor = array(0, 0, 0, 0, 0);
	$total = 0;
	$flag = 0;

	foreach($_POST  as $Chave => $Valor)
	{
		if($flag <= 4)
			for($i=1; $i<=5; $i++)
			{
				$String = "vend".$i;
				if($Chave != $String)
					$total = $total+$Valor;
			}

		$flag++;

		for($i=1; $i<=5; $i++)
		{
			for($j=1; $j<=5; $j++)
			{
				$String = "vend".$i."sem".$j;
				if($Chave == $String)
				{
					$k = $j-1;
					$semana[$k] = $semana[$k]+$Valor;
				}

				$String = "vend".$j."sem".$i;
				if($Chave == $String)
				{
					$k = $j-1;
					$vendedor[$k] = $vendedor[$k]+$Valor;
				}
			}
		}
	}

	for($i=0; $i<=4; $i++)
	{
		$j = $i+1;
		echo 'Vendedor'.$j.' '.$vendedor[$i].' <br />';
	}

	echo '<br />';

	for($i=0; $i<=3; $i++)
	{
		$j = $i+1;
		echo 'Semana'.$j.' '.$semana[$i].' <br />';
	}

	echo '<br />Total: '.$total.'<br />';
?>