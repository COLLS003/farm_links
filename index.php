<?php
// Read the variables sent via POST from our API
$sessionId   = @$_POST["sessionId"];
$serviceCode = @$_POST["serviceCode"];
$phoneNumber = @$_POST["phoneNumber"];
$text        = @$_POST["text"];
// print_r($_POST);
// die();

// check if the session is continoues 
$number = 0;
if(strpos($text, "*")){
    // print("mixed");
    $content = explode("*", $text);
    $number = count($content);
    // print(count($content));
}
if ($text == "") {
    // This is the first request. Note how we start the response with CON
   if($phoneNumber == "+254794940160"){ //farmere startup menu
    $response  = "CON Welcome to Farmlinks select an option Sell\n";
    $response .= "1. Cerials\n"; //maize, beans, millet, sorhum
    $response .= "2. Fruits\n";    // mangoes, avacados, pineapples, 
    $response .= "3. Vegetable\n"; //kales, tomatoes, onions

   }else if($phoneNumber == "+254713289622"){ //distributor accounut
    $response  = "CON Welcome to Farmlinks select an option to continue\n";
    $response .= "1. Edit Availability\n"; //maize, beans, millet, sorhum
    $response .= "2. Change Location\n";    // mangoes, avacados, pineapples, 
    $response .= "3. Deregister\n"; //kales, tomatoes, onions


   }else if($phoneNumber == "+254748804536"){ //buyer
    $response  = "CON Welcome to Farmlinks select an option buy\n";
    $response .= "1. Cerials\n"; //maize, beans, millet, sorhum
    $response .= "2. Fruits\n";    // mangoes, avacados, pineapples, 
    $response .= "3. Vegetable\n"; //kales, tomatoes, onions

   }

} 
else if ($text == "1") {



    if($phoneNumber == "+254794940160"){ //farmere second  menu
        $response = "CON Select am Item to continue\n";
        $response .= "1. Maize\n"; //maize, beans, millet, sorhum
        $response .= "3. Beans\n";    // mangoes, avacados, pineapples, 
        $response .= "4. Millet\n"; //kales, tomatoes, onions
        $response .= "5. sorghum\n"; //kales, tomatoes, onions
    
    
    
    }else if($phoneNumber == "+254713289622"){ //distributor accounut
        $response  = "CON Enter your new Availability ie 2pm to  6 pm\n";
       
    
    }else if($phoneNumber == "+254748804536"){ //buyer
        $response  = "CON select an option to continue \n";
        $response .= "1. Maize a kg @ 100\n"; //maize, beans, millet, sorhum
        $response .= "2. Beans a kg @ 100\n";    // mangoes, avacados, pineapples, 
        $response .= "2. sorghum a kg @ 20\n"; //kales, tomatoes, onions
    
    }
   


} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    if($phoneNumber == "+254794940160"){ //farmere second  menu
        $response = "CON Select am Item to continue\n";
        $response .= "1. Mamngoes\n"; //maize, beans, millet, sorhum
        $response .= "2. Avacados\n";    // mangoes, avacados, pineapples, 
        $response .= "3. Pineaple\n"; //kales, tomatoes, onions
        $response .= "4. Oranges\n"; //kales, tomatoes, onions
    
    
    
    }else if($phoneNumber == "+254713289622"){ //distributor accounut
        $response  = "CON Enter new location county, constintuency\n";
       
    
    }else if($phoneNumber == "+254748804536"){ //buyer
        $response = "CON Select am Item to continue\n";
        $response .= "1. Mamngoes at 200 a crate\n"; //maize, beans, millet, sorhum
        $response .= "2. Avacados at 200 a crate\n";    // mangoes, avacados, pineapples, 
        $response .= "3. Pineaple at 200 a crate\n"; //kales, tomatoes, onions
        $response .= "4. Oranges at 200 a crate\n"; //kales, tomatoes, onions
     
    
    }
   



} else if ($text == "3") {
    // This is a terminal request. Note how we start the response with END
  


    if($phoneNumber == "+254794940160"){ //farmere third  menu
        $response = "CON Select am Item to continue\n";
        $response .= "1. Tomatoes\n"; //maize, beans, millet, sorhum
        $response .= "2. Kales\n";    // mangoes, avacados, pineapples, 
        $response .= "3. Sppinach\n"; //kales, tomatoes, onions
        $response .= "4. Carrot\n"; //kales, tomatoes, onions
    
    
    
    }else if($phoneNumber == "+254713289622"){ //distributor accounut
        $response  = "END Account Deacticated successfully\n";
       
    
    }else if($phoneNumber == "+254748804536"){ //buyer
        $response  = "CON select an option to continue \n";
        $response .= "1. onions a kg @ 100\n"; //maize, beans, millet, sorhum
        $response .= "2. Tomatoes a kg @ 100\n";    // mangoes, avacados, pineapples, 
        $response .= "2. carrots a kg @ 20\n"; //kales, tomatoes, onions
     
    
    }



}



else if($number > 0){
    $level = $content[0];
    // print($level);
    if($level == "1"){//create event
        if($number == 2){ //genereate payment link and send it ot the user         
            if($phoneNumber == "+254794940160"){ //farmere third  menu
                $response = "CON Enter amont of KGs";
               
            
            
            
            }else if($phoneNumber == "+254713289622"){ //distributor accounut
                $response  = "END Account updated sucessfully\n";
               
            
            }else if($phoneNumber == "+254748804536"){ //buyer
                $response  = "CON Enter the numer of KGs \n";
               
             
            
            }
        
        }else if($number == 3 ){
            if($phoneNumber == "+254794940160"){ //farmere third  menu
                $response = "CON Enter selling price per kg";
               
            
            
            
            }else if($phoneNumber == "+254713289622"){ //distributor accounut
                $response  = "END Account updated sucessfully\n";
               
            
            }else if($phoneNumber == "+254748804536"){ //buyer
                $response  = "END Your order has been received succeffult\our agent will contact you \n";
               
             
            
            }
        }  
        else if($number == 4){
            if($phoneNumber == "+254794940160"){ //farmere third  menu
                $response = "END your request has been received succefully";
               
            
            
            
            }else if($phoneNumber == "+254713289622"){ //distributor accounut
                $response  = "END Account updated sucessfully\n";
               
            
            }else if($phoneNumber == "+254748804536"){ //buyer
                $response  = "END Your order has been received succeffult\our agent will contact you \n";
               
             
            
            }
        }else{
            $response = "END invalid input";
        }     
        

    }else if($level == "2"){//second level ie 3*1
        if($number == 2){ //genereate payment link and send it ot the user 
            if($number == 2){ //genereate payment link and send it ot the user         
                
                if($phoneNumber == "+254794940160"){ //farmere third  menu
                    $response  = "END Enter number of crates\n";
                   
                
                
                
                }else if($phoneNumber == "+254713289622"){ //distributor accounut
                    $response  = "END Account updated sucessfully\n";
                   
                
                }else if($phoneNumber == "+254748804536"){ //buyer
                    $response  = "END Enter number of crate";
                   
                 
                
                }
           }else if($number == 3 ){
            //    $response = "CON Enter the selling price per Krate";
               if($phoneNumber == "+254794940160"){ //farmere third  menu
                $response = "END your request has been received succefully";
               
            
            
            
            }else if($phoneNumber == "+254713289622"){ //distributor accounut
                $response  = "END Account updated sucessfully\n";
               
            
            }else if($phoneNumber == "+254748804536"){ //buyer
                $response  = "END Your order has been received succeffult\our agent will contact you \n";
               
             
            
            }
               
           }  
           else if($number == 4){
               $response = "END  Your request has been received successfully";
           }else{
               $response = "END invalid input";
           }     


        }else if($number == 3){ //initiate pull request to the given phone number
            // do nothing ,,
            if($number == 2){ //genereate payment link and send it ot the user         
                $response = "CON Enter number of Krates available";
           }else if($number == 3 ){
               
               $response = "CON Enter the selling price per Krate";
               if($phoneNumber == "+254794940160"){ //farmere third  menu
                $response = "END your request has been received succefully";
               
            
            
            
            }else if($phoneNumber == "+254713289622"){ //distributor accounut
                $response  = "END Account updated sucessfully\n";
               
            
            }else if($phoneNumber == "+254748804536"){ //buyer
                $response  = "END Your order has been received succeffult\nour agent will contact you \n";
               
             
            
            }
               
           }  
           else if($number == 4){
               $response = "END  Your request has been received successfully";
           }else{
               $response = "END invalid input";
           }     
            //  $curl = curl_init();
            // curl_setopt_array($curl, array(
            //     CURLOPT_URL => 'https://stk.cradlevoices.com/Api/transactions/initiatePull/',
            //     CURLOPT_RETURNTRANSFER => true,
            //     CURLOPT_ENCODING => '',
            //     CURLOPT_MAXREDIRS => 10,
            //     CURLOPT_TIMEOUT => 0,
            //     CURLOPT_FOLLOWLOCATION => true,
            //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //     CURLOPT_CUSTOMREQUEST => 'POST',
            //     CURLOPT_POSTFIELDS => json_encode(array(
            //         "phone" => strval($content[1]),
            //          "amount"=>"10",
            //         "updateAmount"=>"200",
            //         "account"=>"1"
                    
            //     )),
            //     CURLOPT_HTTPHEADER => array(
            //         'Content-Type: application/json'
            //     ),
            // ));

            // $response1 = curl_exec($curl);

            // curl_close($curl);


        }else{
            // do nothing 
        }


    }else if($level == "3"){//vegetables
        if($number == 2){ //genereate payment link and send it ot the user         
            // $response = "CON Ente number of Krates available";
            if($phoneNumber == "+254794940160"){ //farmere third  menu
                $response = "CON Ente number of Krates available";
               
            
            
            
            }else if($phoneNumber == "+254713289622"){ //distributor accounut
                $response  = "END Account updated sucessfully\n";
               
            
            }else if($phoneNumber == "+254748804536"){ //buyer
                $response  = "END Enter number of Kgs";
               
             
            
            }
       }else if($number == 3 ){
           if($phoneNumber == "+254794940160"){ //farmere third  menu
            $response = "CON Enter the selling price per Krate";

           
        
        
        
        }else if($phoneNumber == "+254713289622"){ //distributor accounut
            $response  = "END Account updated sucessfully\n";
           
        
        }else if($phoneNumber == "+254748804536"){ //buyer
            $response  = "END Your order has been received sucessfully sucessfully\n";
           
         
        
        }
       }  
       else if($number == 4){
           $response = "END  Your request has been received successfully";
       }else{
           $response = "END invalid input";
       }     


    }
   

}




else{
    $response = "END invalid request\n";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

