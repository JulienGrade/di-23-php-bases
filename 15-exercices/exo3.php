<?php
include("partials/header.php");
include("partials/menu.php");
?>

    <h1>Cercle - Périmètre et Aire</h1>
    <form action="#" method="POST">
        <label for="rayon">Rayon : </label>
        <input type="number" name="rayon" id="rayon"><br/>
        <label for="perimetre">Perimetre:</label>
        <input type="checkbox" name="perimetre" id="perimetre" checked><br/>
        <label for="aire">Aire:</label>
        <input type="checkbox" name="aire" id="aire" checked><br/>
        <input type="submit" value="Envoyer">
    </form>

<?php
if(isset($_POST['rayon']) && $_POST['rayon'] >0){
    $rayon = $_POST["rayon"];
    echo "<h2> Résultats </h2>";
    echo "<p>";
    if(isset($_POST['perimetre'])){
        echo "Le périmetre d'un cercle de rayon : <b>". $rayon ."</b> est : <b>". ($rayon* 2 * pi()) . "</b><br/>";
    }
    if(isset($_POST['aire'])){
        echo "L'aire d'un cercle de rayon : <b>". $rayon ."</b> est : <b>". ($rayon* $rayon * pi()) . "</b><br/>";
    }
    echo "</p>";

} else {
    echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
}
?>

<?php
include("partials/footer.php");
?>