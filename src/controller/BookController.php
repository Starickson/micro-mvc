<?php

class BookController {

    public static function list() {

        // 1. Appel du Model
        $books = Book::findAll();

        // 2. Return/include de la view
        include( __DIR__ . '/../views/books/list.php');

    }

    public static function read(int $id) {

        // 1. Appel du Model
        $book = Book::findById($id);
        // 2. Include de la lview

        include(__DIR__ . '/../views/books/read.php');

    }
    
    public static function new($params) {
        
            $book=BOOK::create($params);
 
    }

    public static function edit(int $id) {
        $donnees = Book::edit($id);
        include(__DIR__ . '/../views/books/update.php');
        
    }

    public static function delete(int $id) {
        $book = Book::delete($id);
       
    }

    public static function create(){
        include(__DIR__ . '/../views/books/new.php');

    }

    public static function confirmEdit(int $id,$params){
       // include(__DIR__ . '/../views/books/update.php');
       $donnees=BOOK::confirmEdit($id,$params);
 

    }

}