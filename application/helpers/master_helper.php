<?php
defined('BASEPATH') or exit('No direct script access allowed');

function r($value)
{
	$search = array("'",'"');
	$replace = array(" ");
	if (is_null($value)) {
		return "";
	}
	return str_replace($search, $replace, $value);
}

// --------------- helper inputan

function post($key)
{
	if (isset($_POST[$key])) {
		return strip_tags(r($_POST[$key]));
	}else{
		error("data input kosong");
	}
}

function post_null($key)
{
	if (isset($_POST[$key])) {
		return strip_tags($_POST[$key]);
	}else{
		return null;
	}
}

// --------------- helper message json
function success($msg, $data)
{
	header('Content-Type: application/json');
	echo json_encode(
		array(
			"error" => false,
			"message" => $msg,
			"data" => $data
		)
	);
	exit;
}

function error($msg)
{
	header('Content-Type: application/json');
	echo json_encode(
		array(
			"error" => true,
			"message" => $msg,
			"data" => null
		)
	);
	exit;
}

// --------------- helper model
function true($data)
{
	return (object) array(
		"error" => false,
		"data" => $data
	);
}

function false()
{
	return (object) array(
		"error" => true
	);
}
