<?php
    include('controller/url.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TheMeal</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name="ingredient" placeholder="Tomato" >
        <input type="submit">
    </form>

    <h1>Meal with <?= $ingredient; ?></h1>
    <?php foreach ($result->meals as $key => $_name): ?>
            <div>Nom de la recette: 
                <?= $_name->strMeal; ?> 
             </div>
    <?php endforeach; 

    $allMeals= $result->meals;
    $tabLength = count($allMeals);
?>
   <p>L'ingrédient est présent dans <?=$tabLength;?> recettes</p> 
    <p>Numéro recette aléatoire <?=rand(0, $tabLength); ?></p>
    
  
</body>
</html>
