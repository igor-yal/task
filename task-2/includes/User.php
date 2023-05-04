<?php
	namespace includes;
	
	class User {
		private $name;
		private $email;
		private $password;

		public function __construct( $name, $email, $password )
		{
			$this->name = $name;
			if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
				echo "The string ($email) is invalid, pls enter a valid email";
			} else {
				$this->email = $email;
			}
			$this->password = $password;
		}
		
		public function login( $email, $password )
		{
			if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
				return "The string ($email) is invalid, pls enter a valid email";
			}

			if ( $email == $this->email && $password == $this->password ) {
				return true;
			} else {
				return false;
			}
		}
		
		public function change_password( $old_password, $new_password )
		{
			if ( $old_password == $this->password ) {
				$this->password = $new_password;
			} else {
				echo 'the entered password does not match the current password';
			}
		}
		
		public function get_password() {
			return $this->password;
		}
	}