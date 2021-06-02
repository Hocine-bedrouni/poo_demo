<?php


class Artist extends ModelParrent
{

    public function __construct(){
        $this->table = 'artist';
        $this->GetConnection();
    }

    public function info_artist(){
        $query ="SELECT * FROM record.artist";
        $result = $this->connex->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }




}