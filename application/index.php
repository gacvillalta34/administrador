

<!DOCTYPE html>
<html>
<head>

	<title>login Admin</title>
	<meta charset="utf-8">
</head>
<body>
			
</body>
</html>
<?php

class Index extends Ci_Controller
    {
        public function index(){



            $data = array ('title' => 'Home', 'mensaje');

             
       
           $this->load->view("viewlog");
		   
		   }
        }
		
        
          ?>

<?php


          
 
	   
           
                      
session_start();
	include 'serv.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="panel"; </script>';
	}
          
           
        
          
              

        
        ?>	