<?php


class Disc extends ModelParrent
{

    public function __construct(){
        $this->table = 'disc';
        $this->GetConnection();
    }

    public function GetDiscByArtist(int $id){
        $query ="SELECT * FROM record.disc INNER JOIN record.artist ON disc.artist_id = artist.artist_id WHERE disc.disc_id = :id";
        $result = $this->connex->prepare($query);
        $result->bindValue(':id', $id,PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }

}