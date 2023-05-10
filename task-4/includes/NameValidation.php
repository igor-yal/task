<?php
	namespace includes;

	class NameValidation implements Validation {
		public function validate( $login, $email, $password, $confirm_password )
		{
			$errors = [];
			
			if ( empty( $login ) ) {
				$errors[] = 'enter login pls';
			}
			
			return $errors;
		}
	}