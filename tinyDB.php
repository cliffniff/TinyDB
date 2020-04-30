<?php

const GET_CRIT_KEY = 0;
const GET_CRIT_VAL = 0;

class TinyDB{

    public $dbData = array();
    public $dbPath = "";

    public function __construct($db_path = "db.json")
    {
        $this->dbPath = $db_path;

        if(!file_exists($db_path)){
            if(strpos($db_path, ".json") === false){
                $db_path .= ".json";
            }
            file_put_contents($db_path, "{}");
        }

        $this->dbData = json_decode(file_get_contents($db_path));
    }

    public function saveDatabase(){
        $json_data = ($this->dbData == "{}") ? $this->dbData : json_encode($this->dbData);
        file_put_contents($this->dbPath, $json_data);
    }

    public function insertData($data, $key=null){
        if($key != null){
            $this->dbData[$key] = $data;
        }
        else{
            $this->dbData[] = $data;
        }
        $this->saveDatabase();
    }

    public function deleteData($key){
        unset($this->dbData[$key]);

        $this->saveDatabase();
    }

    public function clearDatabase(){
        $this->dbData = "{}";
        $this->saveDatabase();
    }

    public function getData($query, $mode=GET_CRIT_KEY){
        switch($mode){
            case GET_CRIT_KEY:
                return $this->dbData[$query];
            break;
            case GET_CRIT_VAL:
                return array_search($query, $this->dbData);
        }
    }

}

?>