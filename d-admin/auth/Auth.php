<?php

/**
 * Author   : Muhammad Deril
 * URI      : http://www.derillab.com
 * Github   : @derilkillms
 */

$secret_key = "mysecretkey";
function generateJWT($user_id, $user_email, $secret_key){
	$header = [
		'alg' => 'HS256',
		'typ' => 'JWT'
	];
	$header = json_encode($header);
	$header = base64_encode($header);

	$payload = [
		'user_id' => $user_id,
		'user_email' => $user_email,
        'exp' => time() + 3600 // token expiration time (in seconds)
    ];
    $payload = json_encode($payload);
    $payload = base64_encode($payload);

    $signature = hash_hmac('sha256', "$header.$payload", $secret_key, true);
    $signature = base64_encode($signature);

    $token = "$header.$payload.$signature";

    setcookie('TOKEN-CMS',$token);

    return $token;
}

function verifyJWT($token, $secret_key){
	$token_parts = explode(".", $token);
	$header = $token_parts[0];
	$payload = $token_parts[1];
	$signature = $token_parts[2];

	$valid_signature = hash_hmac('sha256', "$header.$payload", $secret_key, true);
	$valid_signature = base64_encode($valid_signature);

	if ($signature === $valid_signature) {
		$payload = json_decode(base64_decode($payload));
		if ($payload->exp < time()) {
            return false; // token has expired
        }
        return $payload; // token is valid
    } else {
        return false; // token is invalid
    }
}


function login($username='',$password='')
{
	GLOBAL $DB, $CFG, $secret_key;

	$datauser = $DB->get_record_sql("SELECT * FROM {user} WHERE username='".$username."' AND password=md5('".$password."')");
	
	if (!empty($datauser->id)) {

		$user_id = $datauser->id;
		$user_email =$datauser->email;
		$token = generateJWT($user_id, $user_email, $secret_key);

		return true;
	}else{
		return false;
	}
	

}


function curreSess()
{
	GLOBAL $DB, $CFG, $secret_key;

	if ($_COOKIE['TOKEN-CMS']) {
		$payload = verifyJWT($_COOKIE['TOKEN-CMS'], $secret_key);
		if ($payload) {
			echo "login";
    // token is valid
		} else {
    // token is invalid or has expired
			header('Location: login.php');
		}

	}

}

function logout()
{
	setcookie('TOKEN-CMS','LOGOUT');
}

