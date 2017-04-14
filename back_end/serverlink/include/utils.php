<?php

function strtokarray($string,$sep)
{
	$tokens = array();
	$tok = strtok($string, $sep);
	while($tok !== false)
	{
		array_push($tokens, $tok);
		$tok = strtok($sep);
	}
	return $tokens;
}

function saltedHashedPwd($password)
{
	//dp this not found return sha512('insert-secret-here>'.$password);
	return substr(hash('sha256', 'eucoleo8iu98eui' . $password),0,40);
}

function validateUsername($username)
{
	if(preg_match('/[^a-zA-Z0-9\`\~\!\@\#\$\%\^\*\(\)\-\_\+\=\{\}\[\]\,\.\;\:\|\ø\»\î\í\á\ö\?]+/', $username))
		return false;
	return true;
}

?>

