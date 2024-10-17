<?php
include_once __DIR__.'/model/config.php';
include_once __DIR__.'/model/langModel.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>
    <header>
        <h1>Classement des langages 2024</h1>
    </header>
<main>

<div class="table-primary" role="region" aria-labelledby="compilation">


    <table>
        <caption>
            <h2>Classement des langages</h2>
        </caption>




        
        <thead>
            <tr>
            <th><b>id_rang </b></th>
        <th><b>Langages </b></th>
        <th><b>description</b> </th>
        <th><b>utilisationPrincipal</b></th>
            </tr>
            
        </thead>
        <?php       
$top10 = getLangs($conn);
foreach($top10 as $ttop10): ?>
        <tbody>
         
            <tr>
                <td><?=htmlspecialchars($ttop10['id_rang'])." "?></td>
                <td><?=htmlspecialchars($ttop10['langage'])." "?></td>
                <td><?=htmlspecialchars($ttop10['description'])." "?></td>
                <td><?=htmlspecialchars($ttop10['utilisationPrincipal'])?></td>
            </tr>
       
          
        </tbody>
        <?php endforeach; ?>  
    </table>
</div>
</main>
</body>
</html>






















<!-- <table>
    <thead>

  
    <tr class ="tr">
        
 

 
    </tr>
    </thead>

        <tr >

        <td></td>
        <td></td>    
        <td></td>
        <td></td>

    



    </tr>
    </table>
 -->


