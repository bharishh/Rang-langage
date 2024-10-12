<!DOCTYPE html>
<html lang="fr">

<head>
<link rel="stylesheet" href="./public/css/main.css">
</head>
<body>
    <?php
include_once __DIR__.'/model/config.php';
include_once __DIR__.'/model/langModel.php';


$top10 = getLangs($conn);
foreach($top10 as $ttop10): ?>

<table>
    <tr class ="tr">
        
        <td><b>id_rang </b></td>
        <td><b>Langages </b></td>
        <td><b>description</b> </td>
        <td><b>utilisationPrincipal</b></td>

 
    </tr>

        <tr >

        <td><?=htmlspecialchars($ttop10['id_rang'])." "?></td>
        <td><?=htmlspecialchars($ttop10['langage'])." "?></td>    
        <td><?=htmlspecialchars($ttop10['description'])." "?></td>
        <td><?=htmlspecialchars($ttop10['utilisationPrincipal'])?></td>

    
    <?php endforeach; ?>  


    </tr>
    </table>

</body>
</html>




