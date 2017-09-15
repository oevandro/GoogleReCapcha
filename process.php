<?php

	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
		CURLOPT_POSTFIELDS => [
			'secret' => '6LfNwjAUAAAAADZiFxwWsdTV9sGA4UntOxQa_JdP',
			'response' => $_POST['g-recaptcha-response'],
			'remoteip' => $_SERVER['REMOTE_ADDR']
			]
		]);

	$response = json_decode(curl_exec($curl));

	curl_close($curl);

	if(!$response->success)
		echo "Não Permitido";
	else
		echo "Vou Cadastrar os Dados";


	
