<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<form action="index.php?model=subscriber&method=confirmEdit&id=<?= $donnees['id']?>" method='post'> 
    Hello voici ton id : <?=$donnees['id']?> qui est en hidden
  <div class="form-group">
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="firstname" aria-describedby="helpId" value="<?=$donnees['firstname']?>" >
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname" aria-describedby="helpId" value="<?=$donnees['lastname']?>">
        <input type='hidden' name='id' value="<?= $donnees['id']?>">
        <input type="submit" class="form-control" value="Création du subscriber" aria-describedby="helpId">
    </div>
</form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>