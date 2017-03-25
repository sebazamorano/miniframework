<?php

class QueryBuilder
{
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $query = $this->pdo->prepare("select * from tasks");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }


}