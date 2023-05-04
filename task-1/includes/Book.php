<?php
	namespace includes;

	class Book {
		public $name;
		public $author;
		public $publishDate;
		public $genre;
		
		public function __construct( $name, $author, $publishDate, $genre )
		{
			$this->name = $name;
			$this->author = $author;
			$this->publishDate = $publishDate;
			$this->genre = $genre;
		}

		public function get_age()
		{
			if ( $timestamp = strtotime( $this->publishDate ) === false ) {
				return "The string ($this->publishDate) is invalid, pls enter a valid date string dd.mm.yyyy";
			} else {
				return (int)date('Y') - (int)date( 'Y', strtotime( $this->publishDate ) ) . ' years from the date of publication of the book';
			}
		}

		public function get_summary()
		{
			return "$this->name, $this->author, $this->publishDate, $this->genre";
		}
	}