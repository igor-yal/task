<?php
	namespace includes;
	
	class RegistrationFormValidation {
		private $strategies = [];
		
		public function add_strategy( Validation $strategy ) {
			$this->strategies[] = $strategy;
		}
		
		public function validate( $username, $email, $password, $confirm_password ) {
			$errors = [];
			
			foreach ( $this->strategies as $strategy ) {
				$errors = array_merge( $errors, $strategy->validate($username, $email, $password, $confirm_password ) );
			}
			
			if ( empty( $errors ) ) {
				return 'registration successful!';
			} else {
				return $errors;
			}
		}
	}