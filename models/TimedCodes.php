<?php
    class TimeCodes
    {
        private $db;
    
        public function __construct($db)
        {
            $this->db = $db;
        }
    
        public function createCode($userId, $code, $expiryTime)
        {
            try {
                $query = "INSERT INTO timed_codes (user_id, code, expiry_time)
                          VALUES (:user_id, :code, :expiry_time)";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindValue(':code', $code, PDO::PARAM_STR);
                $stmt->bindValue(':expiry_time', $expiryTime, PDO::PARAM_INT);
    
                $stmt->execute();

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    
        public function getDetailsByCode($code)
        {
            try {
                $query = "SELECT * FROM timed_codes WHERE code = :code";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':code', $code, PDO::PARAM_STR);
                $stmt->execute();
    
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return false;
            }
        }
    
        public function updateToken($userId, $code, $expiryTime)
        {
            try {
                $query = "UPDATE timed_codes
                          SET expiry_time = :expiry_time
                          WHERE user_id = :user_id AND code = :code";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindValue(':code', $code, PDO::PARAM_STR);
                $stmt->bindValue(':expiry_time', $expiryTime, PDO::PARAM_STR);
    
                return $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }
        }
    
        public function deleteToken($userId, $code)
        {
            try {
                $query = "DELETE FROM timed_codes WHERE user_id = :user_id AND code = :code";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindValue(':code', $code, PDO::PARAM_STR);
    
                return $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }
        }
    }
    
    $timedCodesModel = new TimeCodes($dbConnection);
?>