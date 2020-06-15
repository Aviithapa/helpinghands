<?php

require_once __DIR__ . "/libs/XLSXReader.php";

/**
 * Created by yogesh on 01th 11, 2017.
 * 
 * This class acts as a bridge between our business logic and third party library.
 * Note: Please use this class instead of the third party class to parse any excel sheet files.
 * 
 */
class ExcelSheetReader
{
    
    private $sheetUrl = "";
    private $sheetId = 0;
    
    private $sheetReader = null;

    /**
     * ExcelSheetReader constructor.
     * @param string $sheetUrl
     * @param int $sheetId
     */
    public function __construct($sheetUrl, $sheetId = 0)
    {
        $this->sheetUrl = $sheetUrl;
        $this->sheetId = $sheetId;
        
    }

    /**
     * Starts the parsing of the excel sheet file.
     * 
     * @return $this
     * @throws Exception
     */
    public function parse(){
        
        if(file_exists($this->sheetUrl)){
            $this->sheetReader = new XLSXReader($this->sheetUrl);
            return $this;
        }else{
            throw new Exception("Submitted file is not available! Please check the file at : ".$this->sheetUrl);    
        }
        
    }


    /**
     * Gets the sheet data with the constructed sheet id from the parsed excel sheet.
     *
     * @param null $sheetId, the sheet id to get the data from.
     * @return mixed
     * @throws Exception
     */
    public function getData($sheetId = null){
        if($sheetId != null){
            $this->sheetId = $sheetId;
        }
        if($this->sheetReader instanceof XLSXReader){
            if((is_numeric($this->sheetId) && array_key_exists($this->sheetId,$this->sheetReader->getSheetNames()))
                || (!is_numeric($this->sheetId) && in_array($this->sheetId,$this->sheetReader->getSheetNames()))){

                return $this->sheetReader->getSheet($this->sheetId)->getData();

            }else{
                throw new Exception("Supplied sheet id '".$this->sheetId."' was not found in the excel sheet!");
            }

        }else{
            throw new Exception("Please parse file before extracting data from the file.");
        }
    }
    
    public function getSheetIndices(){
        if($this->sheetReader instanceof XLSXReader){
            return $this->sheetReader->getSheetNames();
        }else{
            throw new Exception("Please parse file before extracting data from the file.");
        }
    }
    

}