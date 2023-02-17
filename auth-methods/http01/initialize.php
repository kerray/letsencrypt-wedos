<?php

require_once __DIR__ . '/config.php';

function certbot_file_dir() {
	return rtrim(HTTP01_WEBROOT_PATH, '/') . HTTP01_ACME_CHALLENGE_PATH;
}

function certbot_file_path() {
	return certbot_file_dir() . CERTBOT_TOKEN;
}