<?php


require __DIR__ . '/../config/auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address']; 
    $state_residing = $_POST['state_residing']; 
    $insurance_type = $_POST['insurance_type'];
    $face_amount = $_POST['face_amount'];
    $smoker = $_POST['smoker'];
    
    
// Get the API client and construct the service object.
    
    $spreadSheetId = "128YB588julN699SU0ISQTq6divvFJABFLtWdOIw1YoY";
    $range = 'Sheet1';
    $values = [
        $phone_number,
        $first_name,
        $last_name,
        $age,
        $birthday,
        $email_address,
        $state_residing,
        $insurance_type,
        $face_amount,
        $smoker,
        date("F j, Y, g:i a", time()) 
    ];
    

$sheet = new Sheet();
    
$client = $sheet->getClient();
$service = new Google_Service_Sheets($client);
    
$sheet->insertToSheet($service,$spreadSheetId,$range,$values);

    session_start();
    $_SESSION['section'] = "quote";
    
    
      //calltools insert
    $payload = json_encode( array( "phone_number" => $phone_number, "first_name" => $first_name, "last_name" => $last_name, "email_address" => $email_address,"custom2"=>$age,"custom1"=>$birthday,"custom11"=>$state_residing,"custom12"=>$insurance_type,"custom13"=>$face_amount,"custom14"=>$smoker,"custom10"=>"Get A Qoute",
    "file"=>"743501") );
    
    
    $sheet->callToolsInit($payload);
    
    
    $sheet->redirect();
    
    
    
}


?>