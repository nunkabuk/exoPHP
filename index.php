<?php include("includes/header.php"); ?>

<!-- Exo 2 -->

  <?php

  $lesMois= ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre','octobre', 'novembre' , 'decembre'];


  $jour = date('d');
  $mois = date('m');
  $an = date('Y');
  ?>
  <p>
  nous sommes le:<?php echo $jour . ' ' . $lesMois[$mois-1] . ' ' . $an ?>
  il est:<?php echo date( 'H:i:s') ?>

    </p>

    <!-- Exo 3 -->
    <?php

    $personnes = array(
      1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
      2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
      3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111'),
      4 => array('prenom' => 'John', 'nom' => 'Doe', 'telephone' => '004411111')
    );

   foreach ($personnes as $element)
{
    foreach($element as $value){
    }
    if(in_array('Dain', $element)){
        echo 'Dain';
}}

?>

    <?php include("includes/footer.php"); ?>
