<?php

try {
	$respuesta = array("error" => false, "mensaje" => "");
	if($_POST['email'] && $_POST['name'] && $_POST['message'] && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message'])){

		$to       = 'rodrigoramos89@gmail.com';
		$subject  = 'Nuevo correo en RodrigoPuente.com';
		$message  = strip_tags($_POST['name'])."\r\n".strip_tags($_POST['email'])."\r\n".strip_tags($_POST['message'])."\r\n";

		$mail = mail($to, $subject, $message);
		if(!$mail) throw new \Exception("Hubo un error...");
		 

	}else{
		throw new \Exception("Te faltó algo...");
	}
}catch(\Exception $e){
	$respuesta["mensaje"] = $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode($respuesta);