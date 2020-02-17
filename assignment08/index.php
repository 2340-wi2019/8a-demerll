
<?php
    include "includes/header.php";
    $my_weight= 125;
    $_age = 25;
    $first_name='Donjeta';
    $last_name='Emerllahu';
    //$poundsToKg= 'pounds *(1.2.2)';
    //write PHP here...
   function poundsToKg($w){
       $w = ($w *(1/2.2));
       return $w;
    
   }
   $result = poundsToKg($my_weight);

?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php Echo $first_name;?> <?php Echo $last_name;?>!
<p>I am <?php Echo $_age;?> years old. I weigh <?php Echo $my_weight;?>pounds, which is <?php Echo $result;?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>



