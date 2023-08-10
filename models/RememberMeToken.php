<?php
    class RememberMeToken
    {
        private $db;
    
        public function __construct($db)
        {
            $this->db = $db;
        }
    
        public function createToken($userId, $token, $expirationDate)
        {
            try {
                $query = "INSERT INTO remember_me_tokens (user_id, token, expiration_date)
                          VALUES (:user_id, :token, :expiration_date)";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindValue(':token', $token, PDO::PARAM_STR);
                $stmt->bindValue(':expiration_date', $expirationDate, PDO::PARAM_STR);
    
                $stmt->execute();

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    
        public function getTokenByToken($token)
        {
            try {
                $query = "SELECT * FROM remember_me_tokens WHERE token = :token";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':token', $token, PDO::PARAM_STR);
                $stmt->execute();
    
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        }
    
        public function updateToken($userId, $token, $expirationDate)
        {
            try {
                $query = "UPDATE remember_me_tokens
                          SET expiration_date = :expiration_date
                          WHERE user_id = :user_id AND token = :token";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindValue(':token', $token, PDO::PARAM_STR);
                $stmt->bindValue(':expiration_date', $expirationDate, PDO::PARAM_STR);
    
                return $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }
        }
    
        public function deleteToken($userId, $token)
        {
            try {
                $query = "DELETE FROM remember_me_tokens WHERE user_id = :user_id AND token = :token";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindValue(':token', $token, PDO::PARAM_STR);
    
                return $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }
        }
    }
    
    $rememberMeModel = new RememberMeToken($dbConnection);
?>