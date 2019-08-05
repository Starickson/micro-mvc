<?php

class Subscriber extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM subscriber';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id) {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM subscriber WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($params) {
        $bdd = self::connectDb();
        $request =$bdd->prepare( 'INSERT INTO subscriber (firstname,lastname) VALUES (:firstname,:lastname)');
        $request->execute(array(
            'firstname'=>$params['firstname'],
            'lastname'=>$params['lastname']
        ));
        echo ' AUTEUR AJOUTE :GOOD!';
    }

    public static function delete(int $id) {
        $bdd = self::connectDb();
        $request = 'DELETE FROM subscriber WHERE id ='.$id;
        $bdd->query($request);
        echo'auteur éffacé ';

       
    }

    public static function edit(int $id) {

        $bdd = self::connectDb();
        $request = 'SELECT * FROM subscriber WHERE id = ' . $id;
        $response = $bdd->query($request);
        $donnees=$response->fetch();
        //$titre=$donnees['title'];
        
        return $donnees;
   
    }

    public static function confirmEdit(int $id,$params) {

        var_dump($id, $params);
        $bdd = self::connectDb();
        $request =$bdd->prepare( 'UPDATE subscriber SET firstname=:firstname ,lastname=:lastname WHERE id =:id');
        $request->execute(array(
            'id'=>$id,
            'firstname'=>$params['firstname'],
            'lastname'=>$params['lastname']
        ));
        echo 'auteur MODIFIE';
    }





}