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
	    <div class = 'noHilight' id = 'page <?php echo $p->getPageId(); ?>'>
		    <span class = 'page'><?php echo $p->getPageTitle(); ?></span>
		</div>
        <?php        
            }
		?>
        
        
		<?php
		//START Test
		$articles = $db->getArticleByPageId(1);
		
		foreach($articles as $a)
		{
		    ?>
	    <div class = 'articleOnPage<?php echo $a->getPageId(); ?>'>
	        <h3 class = 'articleTitle'><?php echo $a->getTitle(); ?></h3>
		   <?php echo $a->getContent(); ?>
		    </div>
		    <?php
		}
		//END TEST
		?>
		
		
	</body>
	<footer>
	
	</footer>
	footer
</html>
