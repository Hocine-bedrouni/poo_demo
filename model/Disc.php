<?php


class Disc extends ModelParrent
{

    public function __construct(){
        $this->table = 'disc';
        $this->GetConnection();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function GetDiscByArtist(int $id){
        $query ="SELECT * FROM record.disc INNER JOIN record.artist ON disc.artist_id = artist.artist_id WHERE disc.disc_id = :id";
        $result = $this->connex->prepare($query);
        $result->bindValue(':id', $id,PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }


    public function info_record(){
        $query ="SELECT * FROM record.disc INNER JOIN record.artist ON disc.artist_id = artist.artist_id ";
        $result = $this->connex->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function create()
    {
        $query= "INSERT INTO record.disc(disc_title, disc_year, disc_label, disc_genre, disc_price, artist_id)VALUES(:disc_title, :disc_year, :disc_label, :disc_genre, :disc_price, :artist_id)";
        $result =$this->connex->prepare($query);
        $result->bindParam(':disc_title',disc_title, PDO::PARAM_STR);
        $result->bindParam(':disc_year', disc_year, PDO::PARAM_INT);
        $result->bindParam(':disc_label', disc_label, PDO::PARAM_STR);
        $result->bindParam(':disc_genre',disc_genre, PDO::PARAM_STR);
        $result->bindParam(':disc_price',disc_genre, PDO::PARAM_INT);
        $result->bindParam(':artist_id', disc_id, PDO::PARAM_INT);
        $result->execute();
    }



    public function update()
    {
        $query= "UPDATE record.disc SET disc_title=:disc_title, disc_year=:disc_year, disc_genre=:disc_genre, disc_label=:disc_label, 
disc_price=:disc_price WHERE disc_id=:disc_id";
        $result= $this->connex->prepare($query);
        $result->bindParam(':disc_title',disc_title, PDO::PARAM_STR);
//$requete->bindParam(':artist_name', $_POST['artist_name'], PDO::PARAM_STR);
        $result->bindParam(':disc_year', disc_year, PDO::PARAM_INT);
        $result->bindParam(':disc_genre',disc_label, PDO::PARAM_STR);
        $result->bindParam(':disc_label', disc_genre, PDO::PARAM_STR);
        $result->bindParam(':disc_price', disc_genre, PDO::PARAM_STR);
        $result->bindParam(':disc_id',  disc_id, PDO::PARAM_INT);
        $result->execute();

    }


}