<?php 
	class Requests
	{
		static public function getAll()
		{
			$stmt = DB::connect()->prepare('SELECT * FROM requests');
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
			$stmt = null ; 
		}
		static public function getRequest($data)
		{
			$id = $data['id'];
			try
			{
				$query = 'SELECT * FROM requests WHERE id=:id';
				$stmt=DB::connect()->prepare($query);
				$stmt->execute(array(":id"=>$id));
				$request = $stmt->fetch(PDO::FETCH_OBJ);
				return $request ; 
			}catch(PDOExeption $ex)
			{
				echo 'error' . $ex->getMessage();
			}
		}
		static public function add($data){
			$stmt = DB::connect()->prepare('INSERT INTO requests(patient,blood_group,volume,physician_name,status,date_created)
				VALUES(:patient,:blood_group,:volume,:physician_name,:status,:date_created)');
			$stmt->bindParam(':patient',$data['patient']);
			$stmt->bindParam(':blood_group',$data['blood_group']);
			$stmt->bindParam(':volume',$data['volume']);
			$stmt->bindParam(':physician_name',$data['physician_name']);
			$stmt->bindParam(':status',$data['status']);
			$stmt->bindParam(':date_created',$data['date_created']);
			
			if ($stmt->execute()) {
				return 'REQUEST ADDED SUCCESSFULLY';
			}else{
				return 'ERR: AN ERROR HAS OCCURED';
			}
			$stmt->close();
			$stmt = null ; 


		}

		static public function update($data){
			$stmt = DB::connect()->prepare('UPDATE  requests SET patient = :patient,blood_group = :blood_group ,volume = :volume ,physician_name = :physician_name ,status = :status,date_created = :date_created WHERE id = :id ');
			$stmt->bindParam(':id',$data['id']);
			$stmt->bindParam(':blood_group',$data['blood_group']);
			$stmt->bindParam(':blood_group',$data['blood_group']);
			$stmt->bindParam(':volume',$data['volume']);
			$stmt->bindParam(':physician_name',$data['physician_name']);
			$stmt->bindParam(':status',$data['status']);
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
				$query = '	DELETE  FROM requests WHERE id=:id';
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