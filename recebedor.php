<?php

	$arquivo= $_FILES['arquivo'];

	if(isset($_FILES['arquivo']) && empty($_FILES['arquivo']) == false){
		if(count($_FILES['arquivo']['tmp_name']) > 0){

			for($i = 0; $i < count($_FILES['arquivo']['tmp_name']) ; $i++ ){
				$nomedoarquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999).'.jpg');
				move_uploaded_file($_FILES['arquivo']['name'],'/arquivos'.$nomedoarquivo); 



			}

		}

		
	}


?>