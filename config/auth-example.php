<?php
// TODO: validate input params, ignore bots...

require __DIR__ . '/../vendor/autoload.php'; // google-api-php-client path

class Sheet{
     
    
    private $keyt;
    
    
    public function __construct(){
        
        $this->keyt = [
          "type" => "service_account",
          "project_id" => "",
          "private_key_id" => "",
          "private_key" => ""
        ];

        
}
    
    
    
    
    public function getClient()
    {
        $client = new Google_Client();
        $client->setApplicationName('Project');
        $client->setScopes('https://www.googleapis.com/auth/spreadsheets');
        //PATH TO JSON FILE DOWNLOADED FROM GOOGLE CONSOLE FROM STEP 7
        $client->setAuthConfig($this->keyt); 
        $client->setAccessType('offline');
        return $client;

        // Email for this service my-service@my-project-1543067068460.iam.gserviceaccount.com

    }
    
    public function insertToSheet($service, $spreadsheetId, $range, $values){
        
     

        $valueRange= new Google_Service_Sheets_ValueRange();
        $valueRange->setValues(["values" => ["a", "b"]]); // values for each cell
        $valueRange->setValues(["values" => $values]);

        $conf = ["valueInputOption" => "RAW"];
        $response = $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $conf);
        
        
        
    }
    
    //optional
    
    public function redirect(){
        
         session_start();
        if(empty($_SESSION['section'])){
    
        header("Location: http://livingbenefitsquote.us/");
        exit();
        
        }else{

            $path = "Location: http://livingbenefitsquote.us/#" . $_SESSION['section'];

            header($path);

        }
        
    }
    
    
    
}






