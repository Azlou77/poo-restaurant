<?php
// create namespace



class Database{

    /**
     * host de la bdd
     *
     * @var string
     */
    private string $host;

    /**
     * Identifiant de l'utilisateur à la bdd
     * 
     * @var string
     */
    private string $user;

    /**
     * Mot de passe utilisateur
     *
     * @var string
     */
    private string $password;

    /**
     * Nom de la base de donnée
     *
     * @var string
     */
    private string $dbname;

    /**
     * Connexion de la base de donnée
     * 
     * @var PDO
     */
    protected ?\PDO $pdo;

    
    /**
     * Connexion base de donnée
     */
    public function __construct(){
        try{
            $this->getConfig();
            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname",
                                   $this->user,
                                    $this->password,
                                    [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
        }
        catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    /*
    * Get the database configuration from the config file
    * @return void
    */
    private function getConfig(){
        if(file_exists(__DIR__ .'/config/dbConfig.php')){
            require(__DIR__ .'/config/dbConfig.php');
            // var_dump($dbConfig);
            $this->host = $dbConfig['host'];
            $this->user = $dbConfig['user'];
            $this->password = $dbConfig['password'];
            $this->dbname = $dbConfig['dbname'];
        }else{
            throw new \Exception('Database config file not found');
        }
    }

    /**
     * Retourne la connexion à la base de données
     * @return ?\PDO
     */
    public function getPdo(): ?\PDO{
        return $this->pdo;
    }
}