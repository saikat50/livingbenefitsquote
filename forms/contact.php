<?php


require __DIR__ . '/../config/auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address']; 
    $city = $_POST['city'];
    $state = $_POST['state'];
    $lif_licensed = $_POST['lif_licensed'];
    $parimary_career = $_POST['parimary_career'];
    $find_website = $_POST['find_website'];
    $contact_by = $_POST['contact_by'];
    $message = $_POST['message'];
    
    
// Get the API client and construct the service object.
    
    $spreadSheetId = "17gSTxLz6Jz9i20dZTROj0lpn8vqmGPB5-3KJBlJeTao";
    $range = 'Sheet1';
    $values = [
        $phone_number,
        $first_name,
        $last_name,
        $email_address,
        $city,
        $state,
        $lif_licensed,
        $parimary_career,
        $contact_by,
        $message,
        $find_website,
        date("F j, Y, g:i a", time()) 
    ];
    

$sheet = new Sheet();
    
$client = $sheet->getClient();
$service = new Google_Service_Sheets($client);
    
$sheet->insertToSheet($service,$spreadSheetId,$range,$values);

    session_start();
    $_SESSION['section'] = "contact";
    
    
       //calltools insert
    $payload = json_encode( array( "phone_number" => $phone_number, "first_name" => $first_name, "last_name" => $last_name, "email_address" => $email_address,"city"=>$city,"state"=>$state,"custom18"=>$lif_licensed,"custom19"=>$parimary_career,"custom20"=>$find_website,"custom21"=>$contact_by,"custom22"=>$message,"custom10"=>"Contact",
    "file"=>"743501") );
    
    
    $sheet->callToolsInit($payload);
    
    $sheet->redirect();
    
    
    
}


?>