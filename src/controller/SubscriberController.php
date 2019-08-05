<?php

class SubscriberController {

    public static function list() {

        // 1. Appel du Model
        $subscribers = SUBSCRIBER::findAll();

        // 2. Return/include de la view
        include( __DIR__ . '/../views/subscribers/list.php');

    }

    public static function read(int $id) {

        // 1. Appel du Model
        $subscriber = SUBSCRIBER::findById($id);
        // 2. Include de la lview

        include(__DIR__ . '/../views/subscribers/read.php');

    }
    
    public static function new($params) {
        
            $subscriber=SUBSCRIBER::create($params);
 
    }

    public static function edit(int $id) {
        $donnees = SUBSCRIBER::edit($id);
        include(__DIR__ . '/../views/subscribers/update.php');
        
    }

    public static function delete(int $id) {
        $subscriber = SUBSCRIBER::delete($id);
       
    }

    public static function create(){
        include(__DIR__ . '/../views/subscribers/new.php');

    }

    public static function confirmEdit(int $id,$params){
       // include(__DIR__ . '/../views/books/update.php');
       $donnees=SUBSCRIBER::confirmEdit($id,$params);
 

    }

}