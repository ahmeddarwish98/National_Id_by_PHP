<?php

information ( $_REQUEST["national"] );

function information ($id)
{
if ($id == "" )
     {
		echo("<table border=2 width=300 align=center>");
        echo("<tr>");
		echo("<td>"); echo("<h2 align=center >"); echo("Enter National ID"); echo("</td>");
		echo("</tr>");
     }	 


else if (strlen($id) != 14 )
     {
		echo("<table border=2 width=300 align=center>");
        echo("<tr>");
		echo("<td >"); echo("<h2 align=center >"); echo("Enter correct National ID"); echo("</td>");  
		echo("</tr>");
     }

		  
else
     {

echo("<table border=2 width=250 height=300  align=center>");

/////////////////////////////////////////////////////////////////////////////////////////////////////////// 

$gen = substr ($id,0,1);

		  if($gen == 2) 
		  {
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("Gen Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("1900");    echo("</td>");  
	        echo("</tr>");
		  }
		
		  else if($gen == 3)
		  {
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("Gen Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("2000");    echo("</td>");  
	        echo("</tr>");
		  }
		 
		  else 
		  {
             echo("<tr>");
		     echo("<td>");  echo("<p align=center >");   echo("First Number Is ");  echo("</td>");
		     echo("<td>");  echo("<p align=center >");   echo("Invaild");           echo("</td>");
	         echo("</tr>");
		  }
		
///////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
 
$year = substr ($id,1,2);
  
    switch ($gen){
		  case 2:
		        $year = 1900 + $year ;
          break;
		
		  case 3:
		        $year = 2000 + $year ;
          break;
		}
		
  $month = substr ($id,3,2);
  
  $day = substr ($id,5,2);

			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("Date Of Birth");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo($day."/".$month."/".$year);    echo("</td>");  
	        echo("</tr>");
///////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
$city = substr ($id,7,2);
   
    switch($city){
	   
	   case 01 : 
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Cairo");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   
	   case 02 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Alexandria");    echo("</td>");  
	        echo("</tr>");
	   break ;  
	    
	   case 03 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Port Said");    echo("</td>");  
	        echo("</tr>");
	   break ;	
	      
	   case 04 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Suez");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   	   
	   case 11 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Damietta");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   
	   case 12 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Dakahlia");    echo("</td>");  
	        echo("</tr>");
	   break ;
	     
	   case 13 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("El Sharkeya");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   
	   case 14 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Qalioubeya");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   
	   case 15 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Kafr El Sheikh");    echo("</td>");  
	        echo("</tr>");
	   break ;  
	    
	   case 16 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Gharbeya");    echo("</td>");  
	        echo("</tr>");
	   break ;	
	      
	   case 17 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("El Monofeya");    echo("</td>");  
	        echo("</tr>");
	   break ; 
	     
	   case 18 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("El Beheira");    echo("</td>");  
	        echo("</tr>");
	   break ;	
	      
	   case 19 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Ismailia");    echo("</td>");  
	        echo("</tr>");
	   break ;
	      
	   case 21 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Giza");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   
	   case 22 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Beni Suef");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	 
	   case 23 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Fayoum");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	
	   case 24 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("El Menia");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	  
	   case 25 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Assiut");    echo("</td>");  
	        echo("</tr>");
	   break ;	
	    
	   case 26 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Sohag");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   
	   case 27 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Qena");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   		   
	   case 28 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Aswan");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   
	   case 29 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Luxor");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   
	   case 31 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Red Sea");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   		
	   case 32 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("New Valley");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	   
	   case 33 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Matrouh");    echo("</td>");  
	        echo("</tr>");
	   break ;	
	      
	   case 34 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("North Sinai");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   	 
	   case 35 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("South Sinai");    echo("</td>");  
	        echo("</tr>");
	   break ;
	   		   
	   case 88 :
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("City Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Outside the Republic");    echo("</td>");  
	        echo("</tr>");
	   break ;	   
	}
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
  
$serial = substr ($id,9,3); 	
      
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("Serail Is ");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo($serial);    echo("</td>");  
	        echo("</tr>");
	   
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
   
$gender = substr ($id,12,1);	
       if($gender % 2 != 0)
	     { 
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("Gender Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo("Male");  echo("</td>"); 
	        echo("</tr>");
	     } 
		  
	   else 
         { 
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("Gender Is ");  echo("</td>");
			echo("<td>");  echo("<p align=center >");    echo("Female");  echo("</td>");  
	        echo("</tr>");
		}  
		
///////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  
$check = substr ($id,13,1);
	
			echo("<tr>");
	        echo("<td>");  echo("<p align=center >");    echo("Check Digit Is");  echo("</td>"); 
			echo("<td>");  echo("<p align=center >");    echo($check);    echo("</td>");  
	        echo("</tr>");
	
}
}
?>


   	   
	 																																																																																																															