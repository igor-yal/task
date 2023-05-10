<?php
	namespace includes;
	
	class EmailValidation implements Validation {
		public function validate($login, $email, $password, $confirm_password)
		{
			$errors = [];
			
			if ( empty( $email ) ) {
				$errors[] = 'enter email pls';
			} elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
				$errors[] = 'enter valid email';
			}

			return $errors;
		}
	}