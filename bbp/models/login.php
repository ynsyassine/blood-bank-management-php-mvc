<?php 

class Login 
{
    static public function login($data)
    {
        $username = $data['username'];
        try
        {
            $query = 'SELECT * FROM users WHERE username = :username';
            $stmt = DB::connect()->prepare($query);
            $result = $stmt->execute(array(":username"=> $username));
            if($result)
            {
                return $stmt->fetch();
            }
        }catch (PDOException $ex)
        {
            echo 'erreur' . $ex->getMessage();

        }
    }
}