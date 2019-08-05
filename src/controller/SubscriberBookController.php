<?php

class SubscriberBookController {

    public static function list() {

        // 1. Appel du Model
        $subscribers_books = SUBSCRIBERBOOK::findAll();

        // 2. Return/include de la view
        include( __DIR__ . '/../views/subscribers_books/list.php');

    }

    public static function read(int $id) {

        // 1. Appel du Model
        $subscriber_book = SUBSCRIBERBOOK::findById($id);
        // 2. Include de la lview

        include(__DIR__ . '/../views/subscribers_books/read.php');

    }
    
    public static function new($params) {
        
        $subscriber_book=SUBSCRIBERBOOK::create($params);
 
    }

    public static function edit(int $id) {
        $donnees = SUBSCRIBERBOOK::edit($id);
        include(__DIR__ . '/../views/subscribers_books/update.php');
        
    }

    public static function delete(int $id) {
        $subscriber_book = SUBSCRIBERBOOK::delete($id);
       
    }

    public static function create(){
        $subscribers = Subscriber::findAll();
        $books = Book::findAll();
        var_dump($books,$subscribers);
        include(__DIR__ . '/../views/subscribers_books/new.php');

    }

    public static function confirmEdit(int $id,$params){
       // include(__DIR__ . '/../views/books/update.php');
       $donnees=SUBSCRIBERBOOK::confirmEdit($id,$params);
 

    }

}