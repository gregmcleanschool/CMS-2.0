

<?php


//uncomment this to display errors
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('../../Documents/mysql_connect.php');

class DataAccess
{
    
    
    
    
    
    //returns an array containing the data specified in the function parameters 
    //pass in null if no where clause is needed
    function selectData($range, $table,$where)
    {

    $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        
        if($where == null)
        {
            $query = "SELECT ".$range." FROM ". $table;
        }
        else
        {
            $query = "SELECT ".$range." FROM ". $table . " WHERE " . $where . ";";
        }    
        
        $response = mysqli_query($dbc,$query);
        
        $array; 
        
        if($response){
            // while($row = mysqli_fetch_array($response))
            // {
                
            //     $array[] = $row[$dataRow];  
            // //    echo $row['title'];  
            // }
            
            return $response;
            
        }
        else 
        {
            echo 'cant connect to db';
            echo mysqli_error($dbc);
        }
                
        mysqli_close($dbc);
        
      
    
    }//end selectData
    
    //return one webpage
    function GetWebPage($id)
    {
        
        $queryReturn = $this->selectData('*','webpage',$id);
        
        $array; 
        
             while($row = mysqli_fetch_array($queryReturn))
            {
                
                $array['title'] = $row['title'];  
                $array['authorName'] = $row['author_name'];  
                $array['companyName'] = $row['company_name'];
            //    echo $row['title'];  
            }
        
        return $array;
    }
    

    //returns all pages associated with a webpage
    function getPages($id)
    {
        $queryReturn = $this->selectData('*','page','webpage_id = ' . $id);
        
        $array;
        //count loops
        $i=0;
             while($row = mysqli_fetch_array($queryReturn))
            {
                
                $array[$i]['title'] = $row['title'];  
                $array[$i]['id'] = $row['page_id'];  
                
                $i++;
            //    echo $row['title'];  
            }
        
        return $array; 
        
    }

}//end class


?>