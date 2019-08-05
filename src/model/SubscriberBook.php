<?php

class SubscriberBook extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        $bdd = self::connectDb();
        $request = 'SELECT subscriber_book.id, subscriber.firstname, subscriber.lastname, book.title, book.author FROM subscriber_book JOIN book ON book.id = id_book JOIN subscriber ON subscriber.id = id_subscriber';
        $response = $bdd->query($request);
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function delete(int $id) {
        $bdd = self::connectDb();
        $request = 'DELETE FROM subscriber WHERE id ='.$id;
        $bdd->query($request);
        echo'auteur éffacé ';

       
    }

   public static function create($params){

       $bdd = self::connectDb();
    $request = 'INSERT INTO subscriber_book (id_subscriber, id_book) VALUES (' . $params['selectSubscriber'] . ' ,  ' . $params['selectBook'] . ')';

        $bdd->query($request);

   }


    





}