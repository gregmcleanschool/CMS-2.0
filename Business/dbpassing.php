
<?php


ini_set('display_errors',1);
error_reporting(E_ALL);


require_once('../Data/dataaccess.php');
require_once('dataclasses.php');


//this is where we contruct classes based on tables 
//from databases 
class DataPassing
{
  
   
    
    function getWebPageById($id)
    {
        $db = new DataAccess();
        
        $data = $db->GetWebPage($id);
        
        //contruct class based on database table
        $selectedWebPage = new WebPage(
            $id,
            $data['title'],
            $data['authorName'],
            $data['companyName']
            );
            
            
        
        return $selectedWebPage;
        //add to array of classes
       
        
    }
    
    //return array of page classes with the same web page id
    function getPageByWebPageId($webPageId)
    {
        $db = new DataAccess();
        
        $data = $db->getPages($webPageId);
        
        $pages;
        
        
        
        foreach($data as $page)
        {
        
       // echo $page[$i]['title'];
        
        $aPage = new Page(
            $page['id'],
            $webPageId,
            $page['title']
            );
            
            $pages[] = $aPage;
       
        }
        
        return $pages;
    }
    
    function getArticleByPageId($pageId)
    {
        $db = new DataAccess();
        $data = $db->getArticles($pageId);
        //this array will store the articles
        $articles;
        
        foreach($data as $article)
        {
        //($id, $title, $content, $articleOrder, $pageId)
        
        $aArticle = new Article(
             $article['articleId'],
             $article['title'],
             $article['content'],
             $article['articleOrder'],
             $article['pageId']
            );
            
            $articles[] = $aArticle;
       
        }
        
        return $articles;
        
    }
    
    
    
}



// echo"test echo: ";

// $test = new DataPassing();

// $class =  $test->getArticleByPageId(4);

// foreach($class as $c)
// {
// echo $c->getContent(); 
// }

?>