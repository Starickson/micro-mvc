<?php

class Book extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM book';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id) {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM book WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($params) {
        $bdd = self::connectDb();
        $request =$bdd->prepare( 'INSERT INTO book (title,author) VALUES (:title,:author)');
        $request->execute(array(
            'title'=>$params['title'],
            'author'=>$params['author']
        ));
        echo 'LIVRE ET AUTEUR AJOUTE :GOOD!';
    }

    public static function delete(int $id) {
        $bdd = self::connectDb();
        $request = 'DELETE FROM book WHERE id ='.$id;
        $bdd->query($request);
        echo'livre éffacé ';

       
    }

    public static function edit(int $id) {

        $bdd = self::connectDb();
        $request = 'SELECT * FROM book WHERE id = ' . $id;
        $response = $bdd->query($request);
        $donnees=$response->fetch();
        //$titre=$donnees['title'];
        
        return $donnees;
      
        
    
        
    }

    public static function confirmEdit(int $id,$params) {

        var_dump($id, $params);
        $bdd = self::connectDb();
        $request =$bdd->prepare( 'UPDATE book SET title=:title ,author=:author WHERE id =:id');
        $request->execute(array(
            'id'=>$id,
            'title'=>$params['title'],
            'author'=>$params['author']
        ));
        echo 'LIVRE MODIFIE';
    }





}