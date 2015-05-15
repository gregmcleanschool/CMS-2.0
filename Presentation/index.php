<!DOCTYPE html>
<?php 
require_once('../Business/dbpassing.php');
$db = new DataPassing();
//specify the website to be used from the db here
$webSiteId = 1;
//pull the webpage we want 
$webPage = $db->getWebPageById($webSiteId);
//pull the pages associated with that webpage
$pages = $db->getPageByWebPageId($webSiteId);

?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<script src="scripts/jquery-1.11.2.js"></script>
		<script src="scripts/myscript.js"></script>
		<title> <?php echo $webPage->getTitle(); ?></title>
	</head>
	<body>
		<button id = "test"> Test</button>
		<p id = "name"><?php echo $webPage->getTitle(); ?></p>
		
		<?php
    		foreach ($pages as $p) 
    		{
    	?>
	    <div class = 'noHighlight'>
		    <span class = 'page'><?php echo $p->getPageTitle(); ?></span>
		</div>
        <?php        
            }
		?>

		
		
	</body>
	<footer>
	
	</footer>
</html>
