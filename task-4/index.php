<?php
	use includes\Validation;
	use includes\NameValidation;
	use includes\EmailValidation;
	use includes\PasswordValidation;
	use includes\RegistrationFormValidation;
	use includes\ConfirmPasswordValidation;

	spl_autoload_register( function ( $class_name ) {
		$file_path = str_replace( '\\', '/', $class_name );
		require_once $file_path . '.php';
	} );

	$form_validate = new RegistrationFormValidation();
	$form_validate->add_strategy(new NameValidation());
	$form_validate->add_strategy(new EmailValidation());
	$form_validate->add_strategy(new PasswordValidation());
	$form_validate->add_strategy(new ConfirmPasswordValidation());

	$wrong_credits = $form_validate->validate('', 'sxasclm', '12345678', '123');
	foreach ( $wrong_credits as $item ) {
		echo $item . '<br>';
	}

	echo $form_validate->validate('login', 'login@login.com', '123AAdd@@cd', '123AAdd@@cd');


