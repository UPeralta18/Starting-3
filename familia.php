<?php
	foreach($_POST  as $varChave => $varValor)
	{
		if($varChave == 'familia')
			echo '<h1>'.$varChave.': '.$varValor.'</h1>';
		else if($varChave == 'pet')
			echo '<strong>'.$varChave.':</strong> '.$varValor.'<br />';
		else if($varChave == 'nomes')
			{
				$nomesValor = explode(',', $varValor);
				echo '<strong>'.$varChave.'</strong> <br /> <ol>';
				for($i=0; $i<=2; $i++)
				{
					echo '<li> '.$nomesValor[$i].'</li><br />';
				}
				echo '</ul>';
			}
	}
?>