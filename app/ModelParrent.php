<?php


abstract class ModelParrent
{
    private string $host = 'localhost:3306';
    private string $user = 'root';
    private string $password = 'admin';
    private string $dbname = 'record';

    protected $connex;

    public string $table;
    public string $id;

    public function getconnection()
    {
        $this->connex = null;
        try {
            $this->connex = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
            $this->connex->exec('set name utf8');
        } catch (PDOException $exception){
            echo 'Erreur:'. $exception->getMessage();
        }
 }

    public function getAll(){
        $query = 'SELECT * FROM '. $this->table;
        $result =$this->connex->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function getOneById($id){
        $query = 'SELECT * FROM '. $this->table .'WHERE `id` = :id';
        $result =$this->connex->prepare($query);
        $result->bindvalue(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

 }