<?php

class User
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function registerUser($first_name, $last_name, $email, $password, $dateOfBirth)
    {
        $query = "INSERT INTO users (first_name, last_name, email, password, date_of_birth)
                  VALUES (:first_name, :last_name, :email, :password, :date_of_birth)";
        
        try{
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
            $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':password', $password, PDO::PARAM_STR);
            $stmt->bindValue(':date_of_birth', $dateOfBirth, PDO::PARAM_STR);

            $stmt->execute();

            return $this->db->lastInsertId();

        }catch(Exception $e){
            return false;
        }
    }

    public function getUserById($userId)
    {
        $query = "SELECT * FROM users WHERE user_id = :user_id";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            return false;
        }
    }

    public function getUserByEmail($email) {
        // Prepare the query
        $query = "SELECT * FROM users WHERE email = :email";

        try {
            // Execute the query
            // You should use your preferred database interaction method here (PDO, mysqli, etc.)
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $email, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Fetch the user data from the result set
            if ($result) {
                return $result;
            } else {
                return false; // User not found
            }
        } catch (Exception $e) {
            // Handle any database errors
            return false;
        }
    }

    public function updateUser($userId, $username, $email, $password, $dateOfBirth)
    {
        $query = "UPDATE users SET username = :username, email = :email, 
                  password = :password, date_of_birth = :date_of_birth 
                  WHERE user_id = :user_id";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
            $stmt->bindValue(':username', $username, PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':password', $password, PDO::PARAM_STR);
            $stmt->bindValue(':date_of_birth', $dateOfBirth, PDO::PARAM_STR);

            return $stmt->execute();
        }catch(Exception $e){
            return false;
        }
    }

    public function updateAccountStatus($userId, $newStatus) {
        // Prepare the update query
        $query = "UPDATE users SET account_status = :status WHERE user_id = :user_id";

        // Bind parameters
        $params = array(
            ':status' => $newStatus,
            ':user_id' => $userId
        );

        try {
            // Execute the update query
            // You should use your preferred database interaction method here (PDO, mysqli, etc.)
            $stmt = $this->db->prepare($query);
            $stmt->execute($params);

            return true;
        } catch (Exception $e) {
            // Handle any database errors
            return false;
        }
    }

    public function updatePassword($userId, $newPassword) {
        // Prepare the update query
        $query = "UPDATE users SET password = :password WHERE user_id = :user_id";

        // Bind parameters
        $params = array(
            ':password' => $newPassword,
            ':user_id' => $userId
        );

        try {
            // Execute the update query
            // You should use your preferred database interaction method here (PDO, mysqli, etc.)
            $stmt = $this->db->prepare($query);
            $stmt->execute($params);

            return true;
        } catch (Exception $e) {
            // Handle any database errors
            return false;
        }
    }

    public function deleteUser($userId)
    {
        try{
            $query = "DELETE FROM users WHERE user_id = :user_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);

            return $stmt->execute();
        }catch(Exception $e){
            return false;
        }
    }
}

$userModel = new User($dbConnection);
?>

