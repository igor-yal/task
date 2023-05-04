<?php
	use includes\User;
	
	spl_autoload_register( function ( $class_name ) {
		$file_path = str_replace( '\\', '/', $class_name );
		require_once $file_path . '.php';
	} );
	
	$user = new User( 'admin', 'admin@email.com', '123' );

	echo $user->login( 'admin@email.com', '123' ) . '</br>';
	echo $user->login( 'admin@email.com', '321' ) . '</br></hr>';
	
	$user->change_password( '123', 'asd');
	echo $user->get_password() . '</br>';

	$user->change_password( 'wrong', 'newpass');
