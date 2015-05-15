<?php

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
        
        $i = 0;
        
        foreach($data as $page)
        {
        
       // echo $page[$i]['title'];
        
        $aPage = new Page(
            $page['id'],
            $webPageId,
            $page['title']
            );
            
            $pages[] = $aPage;
            $i++;
        }
        
        return $pages;
    }
    
    
    
}



// echo"test echo: ";

// $test = new DataPassing();

// $class =  $test->getPageByWebPageId(1);

// foreach($class as $c)
// {
// echo $c->getPageTitle(); 
// }

?>