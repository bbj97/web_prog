<?php

    include_once("database_configuration.php");
    
    class Products
    {
        private $connection;
        private $tablesql;

        public function __construct()
        {
            $connectionStr = sprintf("mysql:host=%s;dbname=%s", DBConfig::serverName, DBConfig::dbName);
            try {
                $this->connection = new PDO($connectionStr, DBConfig::dbUsername, DBConfig::dbPassword);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            $this -> createTableIfNotExist();
            if(count($this->read()->fetchAll())==0)
            {
                $this->insert("Čvarci pileći","https://i.ibb.co/BTMV2mh/novo1.png",20,60);
                $this->insert("Čvarci slavonski","https://i.ibb.co/F8WFtmJ/novo2.png",20,80);
                $this->insert("Čvarci domaći","https://i.ibb.co/RTMnfqG/novo3.png",20,50);
                $this->insert("Čvarci od divljači","https://i.ibb.co/KGyK8K5/novo4.png",20,100);
            }
        }
    
        public function __destruct()
        {
            $this->connection = null;
        }
    
        public function createTableIfNotExist($name = "products")
        {   
            $this->tablesql = $name;
            $sql = <<<EOSQL
            CREATE TABLE IF NOT EXISTS $name (
                id_prod  INT AUTO_INCREMENT PRIMARY KEY,
                name_prod TEXT DEFAULT NULL,
                url_prod TEXT DEFAULT NULL,
                quantity_prod INT DEFAULT NULL,
                price_prod INT DEFAULT NULL
            );
            EOSQL;
    
            $this->connection->exec($sql);
        }
    
        public function insert($name_prod,$url_prod,$quantity_prod,$price_prod)
        {
            $todoTask = array(
                ':name_prod' => $name_prod,
                ':url_prod' => $url_prod,
                ':quantity_prod'=> $quantity_prod,
                ':price_prod' => $price_prod 
            );
            $sql = <<<EOSQL
                INSERT INTO  $this->tablesql(name_prod,url_prod,quantity_prod,price_prod) VALUES(:name_prod,:url_prod,:quantity_prod,:price_prod);
            EOSQL;
    
            $query = $this->connection->prepare($sql);
    
            try {
                $query->execute($todoTask);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    
        public function read()
        {
            $sql = <<<EOSQL
                SELECT * FROM $this->tablesql;
            EOSQL;
    
            $query = $this->connection->prepare($sql);
    
            try {
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC);
                return $query;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function deleteProduct($id)
        {
            $sql = <<<EOSQL
            DELETE FROM $this->tablesql WHERE $this->tablesql . id_prod = $id;
            EOSQL;
    
            $this->connection->exec($sql);
        }
    }
    
    $products_table = new Products();