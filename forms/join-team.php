<?php


require __DIR__ . '/../config/auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address']; 
    $lic_number = $_POST['lic_number'];
    $npm = $_POST['npm'];
    $resi_lic_state = $_POST['resi_lic_state'];
    
    
// Get the API client and construct the service object.
    
    $spreadSheetId = "16ExWVPGjDKJhnTYwDKCCi6T4K_B9eywMlnuMBSe6h1M";
    $range = 'Sheet1';
    $values = [
        $phone_number,
        $first_name,
        $last_name,
        $email_address,
        $lic_number,
        $npm,
        date("F j, Y, g:i a", time()) 
    ];
    

$sheet = new Sheet();
    
$client = $sheet->getClient();
$service = new Google_Service_Sheets($client);
    
$sheet->insertToSheet($service,$spreadSheetId,$range,$values);

    session_start();
    $_SESSION['section'] = "join";
    
    
       //calltools insert
    $payload = json_encode( array( "phone_number" => $phone_number, "first_name" => $first_name, "last_name" => $last_name, "email_address" => $email_address,"custom15"=>$lic_number,"custom16"=>$npm,"custom17"=>$resi_lic_state,"custom10"=>"Join Our Team",
    "file"=>"743501") );
    
    
    $sheet->callToolsInit($payload);
    
    
    $sheet->redirect();
    
    
    
}


?>