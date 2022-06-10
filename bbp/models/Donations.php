<?php 
	class Donations
	{
		static public function getAll()
		{
			$stmt = DB::connect()->prepare('SELECT * FROM blood_inventory');
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
			$stmt = null ; 
		}
		static public function getDonation($data)
		{
			$id = $data['id'];
			try
			{
				$query = 'SELECT * FROM blood_inventory WHERE id=:id';
				$stmt=DB::connect()->prepare($query);
				$stmt->execute(array(":id"=>$id));
				$donation = $stmt->fetch(PDO::FETCH_OBJ);
				return $donation ; 
			}catch(PDOExeption $ex)
			{
				echo 'ERR: AN ERROR HAS OCCURED' . $ex->getMessage();
			}
		}
		static public function add($data){
			$stmt = DB::connect()->prepare('INSERT INTO blood_inventory(blood_group,volume,status,donor_id,request_id,date_created)
				VALUES(:blood_group,:volume,:status,:donor_id,:request_id,:date_created)');
			$stmt->bindParam(':blood_group',$data['blood_group']);
			$stmt->bindParam(':volume',$data['volume']);
			$stmt->bindParam(':status',$data['status']);
			$stmt->bindParam(':donor_id',$data['donor_id']);
			$stmt->bindParam(':request_id',$data['request_id']);
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
			$stmt = DB::connect()->prepare('UPDATE  blood_inventory SET blood_group = :blood_group, volume = :volume ,status = :status ,donor_id = :donor_id ,request_id = :request_id ,date_created = :date_created WHERE id = :id ');
			$stmt->bindParam(':id',$data['id']);
			$stmt->bindParam(':blood_group',$data['blood_group']);
			$stmt->bindParam(':volume',$data['volume']);
			$stmt->bindParam(':status',$data['status']);
			$stmt->bindParam(':donor_id',$data['donor_id']);
			$stmt->bindParam(':request_id',$data['request_id']);
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
				$query = '	DELETE  FROM blood_inventory WHERE id=:id';
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