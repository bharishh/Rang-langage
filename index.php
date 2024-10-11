


<?php
include_once __DIR__.'/model/config.php';
include_once __DIR__.'/model/langModel.php';


$top10 = getLangs($conn);
foreach($top10 as $ttop10): ?>

<ul>

    <pre>
        <?= "<li>".htmlspecialchars($ttop10['id_rang'])." </li>".htmlspecialchars($ttop10['langage'])." ".htmlspecialchars($ttop10['description'])." ".htmlspecialchars($ttop10['utilisationPrincipal'])."<br>"
    ?>
    </pre>
    
    <?php endforeach; ?>  
</ul>


