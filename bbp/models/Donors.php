<?php 
	class Donors
	{
		static public function getAll()
		{
			$stmt = DB::connect()->prepare('SELECT * FROM donors');
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
			$stmt = null ; 
		}
		static public function getDonor($data)
		{
			$id = $data['id'];
			try
			{
				$query = 'SELECT * FROM donors WHERE id=:id';
				$stmt=DB::connect()->prepare($query);
				$stmt->execute(array(":id"=>$id));
				$donor = $stmt->fetch(PDO::FETCH_OBJ);
				return $donor ; 
			}catch(PDOExeption $ex)
			{
				echo 'error' . $ex->getMessage();
			}
		}
		static public function add($data){
			$stmt = DB::connect()->prepare('INSERT INTO donors(blood_group,name,address,contact,email,date_created)
				VALUES(:blood_group,:name,:address,:contact,:email,:date_created)');
			$stmt->bindParam(':blood_group',$data['blood_group']);
			$stmt->bindParam(':name',$data['name']);
			$stmt->bindParam(':address',$data['address']);
			$stmt->bindParam(':contact',$data['contact']);
			$stmt->bindParam(':email',$data['email']);
			$stmt->bindParam(':date_created',$data['date_created']);
			
			if ($stmt->execute()) {
				return 'ok';
			}else{
				return 'ERR: AN ERROR HAS OCCURED';
			}
			$stmt->close();
			$stmt = null ; 


		}
		static public function update($data){
			$stmt = DB::connect()->prepare('UPDATE  donors SET blood_group = :blood_group,name = :name ,address = :address ,contact = :contact ,email = :email,date_created = :date_created WHERE id = :id ');
			$stmt->bindParam(':id',$data['id']);
			$stmt->bindParam(':blood_group',$data['blood_group']);
			$stmt->bindParam(':name',$data['name']);
			$stmt->bindParam(':address',$data['address']);
			$stmt->bindParam(':contact',$data['contact']);
			$stmt->bindParam(':email',$data['email']);
			$stmt->bindParam(':date_created',$data['date_created']);
			
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
				$query = '	DELETE  FROM donors WHERE id=:id';
				$stmt=DB::connect()->prepare($query);
				$stmt->execute(array(":id"=>$id));
				if($stmt->execute())
				{
					return 'ok';
				} 
			}catch(PDOExeption $ex)
			{
				echo 'error' . $ex->getMessage();
			}

		}
	}