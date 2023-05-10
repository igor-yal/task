<?php
	namespace includes;
	
	interface Validation{
		public function validate( $login, $email, $password, $confirm_password );
	}