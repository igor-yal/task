<?php
	namespace includes;
	
	class ConfirmPasswordValidation implements Validation {
		public function validate($login, $email, $password, $confirm_password)
		{
			$errors = [];
			
			if ( empty( $confirm_password ) ) {
				$errors[] = 'confirm password pls';
			} elseif ( $password !== $confirm_password ) {
				$errors[] = 'passwords do not match';
			}
			
			return $errors;
		}
	}