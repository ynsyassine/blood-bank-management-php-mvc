<?php 
	class Users
	{
		static public function getAll()
		{
			$stmt = DB::connect()->prepare('SELECT * FROM users');
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
			$stmt = null ; 
		}
		static public function getUser($data)
		{
			$id = $data['id'];
			try
			{
				$query = 'SELECT * FROM users WHERE id=:id';
				$stmt=DB::connect()->prepare($query);
				$stmt->execute(array(":id"=>$id));
				$user = $stmt->fetch(PDO::FETCH_OBJ);
				return $user ; 
			}catch(PDOExeption $ex)
			{
				echo 'error' . $ex->getMessage();
			}
		}
		static public function add($data){
			$stmt = DB::connect()->prepare('INSERT INTO users(name,username,password)
				VALUES(:name,:username,:password)');
			$stmt->bindParam(':name',$data['name']);
			$stmt->bindParam(':username',$data['username']);
			$stmt->bindParam(':password',$data['password']);
			
			if ($stmt->execute()) {
				return 'ok';
			}else{
				return 'ERR: AN ERROR HAS OCCURED';
			}
			$stmt->close();
			$stmt = null ; 
		}
		static public function update($data){
			$stmt = DB::connect()->prepare('UPDATE  users SET name = :name ,username = :username ,password = :password WHERE id = :id ');
			$stmt->bindParam(':id',$data['id']);
			$stmt->bindParam(':name',$data['name']);
			$stmt->bindParam(':username',$data['username']);
			$stmt->bindParam(':password',$data['password']);
			
			if ($stmt->execute()) {
				return 'ok';
			}else{
				return 'ERR: AN ERROR HAS OCCURED';
			}
			$stmt->close();
			$stmt = null ; 


		}
		static public function delete($data)
		{
			$id = $data['id'];
			try
			{
				$query = '	DELETE  FROM users WHERE id=:id';
				$stmt=DB::connect()->prepare($query);
				$stmt->execute(array(":id"=>$id));
				if($stmt->execute())
				{
					return 'ok';
				} 
			}catch(PDOExeption $ex)
			{
				echo 'ERR: AN ERROR HAS OCCURED' . $ex->getMessage();
			}

		}
	}