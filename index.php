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
    $response  = "CON Welcome to Farmlinks select a product category Sell\n";
    $response .= "1. Cerials\n"; //maize, beans, millet, sorhum
    $response .= "2. Fruits\n";    // mangoes, avacados, pineapples, 
    $response .= "2. Vegetable\n"; //kales, tomatoes, onions


} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Select am Item to continue\n";
    $response .= "1. Maize\n"; //maize, beans, millet, sorhum
    $response .= "3. Beans\n";    // mangoes, avacados, pineapples, 
    $response .= "4. Millet\n"; //kales, tomatoes, onions
    $response .= "5. sorghum\n"; //kales, tomatoes, onions


} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "CON Select am Item to continue\n";
    $response .= "1. Mamngoes\n"; //maize, beans, millet, sorhum
    $response .= "2. Avacados\n";    // mangoes, avacados, pineapples, 
    $response .= "3. Pineaple\n"; //kales, tomatoes, onions
    $response .= "4. Oranges\n"; //kales, tomatoes, onions



} else if ($text == "3") {
    // This is a terminal request. Note how we start the response with END
    $response = "CON Select am Item to continue\n";
    $response .= "1. Tomatoes\n"; //maize, beans, millet, sorhum
    $response .= "2. Kales\n";    // mangoes, avacados, pineapples, 
    $response .= "3. Sppinach\n"; //kales, tomatoes, onions
    $response .= "4. Carrot\n"; //kales, tomatoes, onions



}



else if($number > 0){
    $level = $content[0];
    // print($level);
    if($level == "1"){//create event
        if($number == 2){ //genereate payment link and send it ot the user         
             $response = "CON Ente number of KGs available";
        }else if($number == 3 ){
            $response = "CON Enter the selling price per KG";
        }  
        else if($number == 4){
            $response = "END  Your request has been received successfully";
        }else{
            $response = "END invalid input";
        }     
        

    }else if($level == "2"){//send fruits
        if($number == 2){ //genereate payment link and send it ot the user 
            if($number == 2){ //genereate payment link and send it ot the user         
                $response = "CON Ente number of Krates available";
           }else if($number == 3 ){
               $response = "CON Enter the selling price per Krate";
           }  
           else if($number == 4){
               $response = "END  Your request has been received successfully";
           }else{
               $response = "END invalid input";
           }     


        }else if($number == 3){ //initiate pull request to the given phone number
            // do nothing ,,
            if($number == 2){ //genereate payment link and send it ot the user         
                $response = "CON Ente number of Krates available";
           }else if($number == 3 ){
               $response = "CON Enter the selling price per Krate";
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
            $response = "CON Ente number of Krates available";
       }else if($number == 3 ){
           $response = "CON Enter the selling price per Krate";
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

