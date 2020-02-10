
<?php
    include "includes/header.php";
    $my_weight= '125 lb';
    $_age = 25;
    $first_name='Donjeta';
    $last_name='Emerllahu';
    $poundsToKg= 'pounds *(1.2.2)';
    //write PHP here...
   function poundsToKg($my_weight){
       $my_weight = ("pounds *(1/2.2");
       return $my_weight;
    
   }
   $result = add ($my_weight + $poundsToKg)

?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php Echo $first_name;?> <?php Echo $last_name;?>!
<p>I am <?php Echo $_age;?> years old. I weigh <?php Echo $result;?>pounds, which is <?php Echo $my_weight;?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>



