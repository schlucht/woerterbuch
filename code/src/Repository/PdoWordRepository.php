<?php

namespace ots\Repository;
use ots\Model\WordModel;
use PDO;

class PdoWordRepository implements WordRepository
{
    private PDO $pdo;
    private array $fields = ['id', 'de', 'en', 'desc', 'created_at', 'updated_at', 'deletes_at'];


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getWords(string $word, bool $language = false ): array
    {   
        if($language){
            $sql = "SELECT " . implode(",", $this->fields) . " * FROM words WHERE en LIKE :word";            
        }else{
            $sql = "SELECT " . implode(",", $this->fields) . " * FROM words WHERE en LIKE :word";            
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['term' => "%$word%"]);
        if($stmt->rowCount() === 0){
            return [];
        }
        $stmt->setFetchMode(PDO::FETCH_CLASS, WordModel::class);
        return $stmt->fetchAll();
    }

}
