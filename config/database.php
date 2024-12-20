<?php
// define ('ALLOW_ACCESS', true);
require_once 'config.php';

class Database {
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $conn = null;

    public function getConnection() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . 
                ";dbname=" . $this->db_name . 
                ";charset=" . DB_CHARSET,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            if (isDebugMode()) {
                // echo "✅ Connexion réussie à la base de données '" . $this->db_name . "' sur " . $this->host;
            }
            
        } catch(PDOException $e) {
            if (isDebugMode()) {
                echo "❌ Erreur de connexion: " . $e->getMessage() . "\n";
                echo "Vérifiez vos paramètres de connexion et que le serveur MySQL est bien lancé.";
            } else {
                error_log("Erreur de connexion à la base de données: " . $e->getMessage());
                echo "Une erreur est survenue lors de la connexion à la base de données.";
            }
        }
        return $this->conn;
    }
}

$database = new Database();
$connection = $database->getConnection();