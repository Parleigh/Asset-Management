<?php

if(isset($_POST['btnEdit']) && 
   $_POST['activate'] == 'Yes') 
{
    echo "Need wheelchair access.";
}
else
{
    echo "Do not Need wheelchair access.";
}	 

?>