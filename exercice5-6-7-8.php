<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>


    <p>
      <?php



      if (isset($_POST['gender'], $_POST['nom'], $_POST['prenom'], $_FILES['fichier'])) {
        $chemin = pathinfo($_FILES['fichier']['name']);

        if ($chemin['extension'] == "pdf") {
          echo $_POST['gender'] . " " . $_POST['nom'] . " " . $_POST['prenom'] . "<br>" . $_FILES['fichier']['name'] . "<br>" . $chemin['extension'];
        } else {
          echo "Ce fichier n'est pas un pdf.";
        }


      } else {
        echo '<form class="" action="exercice5-6-7-8.php" method="POST" enctype="multipart/form-data">
          <select class="" name="gender">
            <option value="mme">Mme</option>
            <option value="mr">M.</option>
          </select>
          <input type="text" name="nom" value="" placeholder="Nom">
          <input type="text" name="prenom" value="" placeholder="Prénom">
          <input type="file" name="fichier" >
          <button type="submit" name="button">Envoyer</button>
        </form>';
      }



       ?>
    </p>

  </body>
</html>
