<h1>Contact</h1>

<p>Cette section met à disposition un carnet de contact.</p>

<div class="col-xs-12" style="height:50px;"></div>

<?php 

require_once('controller/contactController.php');
$contactController = new contactController;
$contactController->generateTable();

?>