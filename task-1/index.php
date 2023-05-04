<?php
    use includes\Book;

    spl_autoload_register( function ( $class_name ) {
        $file_path = str_replace('\\', '/', $class_name);
        require_once $file_path.'.php';
    });
    
    $book1 = new Book( 'book1', 'author1', '23.10.2000', 'history');
    $book2 = new Book( 'book2', 'author2', '01.05.1950', 'sci-fi');

	echo $book1->get_summary() . '<br>';
	echo $book1->get_age() . '<br><hr>';

	echo $book2->get_summary() . '<br>';
	echo $book2->get_age() . '<br>';


