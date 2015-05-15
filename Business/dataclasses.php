<?php
class Page
{
    private $id;
    private $webPageId;
    private $title;
    
    function __construct($id, $webPageId, $title)
    {
        $this->id = $id;
        $this->webPageId = $webPageId;
        $this->title = $title;
    }
    
    function getPageId()
    {
        return $this->id;
        
    }
    
    function getWebPageId()
    {
        return $this->webPageId;
    }
    
    function getPageTitle()
    {
        return $this->title;
    }
    
    
}

class WebPage
{
   private $id;
   private $title;
   private $authorName;
   private $companyName;
   
    function __construct($id,$title,$authorName,$companyName) {
       $this->id = $id;
       $this->title = $title;
       $this->authorName = $authorName;
       $this->companyName = $companyName;
   }
    
    function getCompanyName()
    {
        return $this->companyName;
    }
    
    function getTitle()
    {
        return $this->title;
    }
    
    function getAuthorName()
    {
        return $this->authorName;
    }
    
    
}

class Article
{
    
}
?>