<?php


require __DIR__ . '/../config/auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address']; 
    $insurance = $_POST['insurance']; 
    $lic_agent = $_POST['lic_agent'];
    $schedule = $_POST['schedule'];
    
    
// Get the API client and construct the service object.
    
    $spreadSheetId = "1JZsSxmMXTHPNfXV0d5N5FTdhwl4hHKhjxwkdaizmYKE";
    $range = 'Sheet1';
    $values = [
        $phone_number,
        $first_name,
        $last_name,
        $email_address,
        $insurance,
        $lic_agent,
        $schedule,
        date("F j, Y, g:i a", time()) 
    ];
    

$sheet = new Sheet();
    
$client = $sheet->getClient();
$service = new Google_Service_Sheets($client);
    
$sheet->insertToSheet($service,$spreadSheetId,$range,$values);

    session_start();
    $_SESSION['section'] = "register";
    
    
    
    //calltools insert
    $payload = json_encode( array( "phone_number" => $phone_number, "first_name" => $first_name, "last_name" => $last_name, "email_address" => $email_address,"custom7"=>$insurance,"custom8"=>$lic_agent,"custom9"=>$schedule,"custom10"=>"Webinar", "file"=>"743501") );
    
    
    $sheet->callToolsInit($payload);
    
    $sheet->redirect();
    
    
    
}


?>