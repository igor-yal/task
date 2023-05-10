<?php
	namespace includes;
	
	class PasswordValidation implements Validation {
		public function validate($login, $email, $password, $confirm_password )
		{
			$errors = [];
			
			if ( empty( $password ) ) {
				$errors[] = 'enter password pls';
			} elseif ( strlen( $password ) < 8 ) {
				$errors[] = 'minimum 8 characters';
			} elseif ( !preg_match( '/(?=[A-Za-z0-9@#$%^&+!=]+$)^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+!=])(?=.{8,}).*$/', $password ) ) {
				$errors[] = 'password may include small and large letters, numbers and symbols and minimum 8 characters';
			}

			return $errors;
		}
	}