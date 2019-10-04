<?php 
    class Driver {

        public function checkStaffNumber($staff_number)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM drivers WHERE staff_number=:staff_number");
			$query->bindValue(":staff_number", $staff_number);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
        }

        public function checkDriverEmail($staff_email)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM drivers WHERE staff_email=:staff_email");
			$query->bindValue(":staff_email", $staff_email);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
        }

        public function checkDriverPhone($phone_number)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM drivers WHERE phone_number=:phone_number");
			$query->bindValue(":phone_number", $phone_number);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
        }
        
        public function addDriver($staff_number, $phone_number, $staff_email, $staff_name, $passport)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("INSERT INTO drivers(staff_name, staff_email, staff_number, phone_number, passport)VALUES
            (:staff_name, :staff_email, :staff_number, :phone_number, :passport)");
            $query->bindValue(":staff_number", $staff_number);
            $query->bindValue(":staff_email", $staff_email);
            $query->bindValue(":staff_name", $staff_name);
            $query->bindValue(":phone_number", $phone_number);
            $query->bindValue(":passport", $passport);
            if(!empty($query->execute())){
                return true;
            }else{
                return false;
            }
        }

        public function updateStaff($staff_number, $phone_number, $staff_email, $staff_name, $passport)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("UPDATE drivers SET staff_name=:staff_name, staff_email=:staff_email, phone_number=:phone_number, 
            passport=:passport WHERE staff_number=:staff_number");
            $query->bindValue(":staff_number", $staff_number);
            $query->bindValue(":staff_email", $staff_email);
            $query->bindValue(":staff_name", $staff_name);
            $query->bindValue(":phone_number", $phone_number);
            $query->bindValue(":phone_number", $phone_number);
            $query->bindValue(":passport", $passport);
            if(!empty($query->execute())){
                return true;
            }else{
                return false;
            }
        }
        

        public function deleteStaff($staff_number)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM drivers WHERE staff_number=:staff_number");
			$query->bindValue(":staff_number", $staff_number);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAlldrivers()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM drivers ORDER BY staff_name ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getSingleStaffList($staff_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM drivers WHERE staff_number=:staff_number");
            $query->bindValue(":staff_number", $staff_number);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getSingleStafEmail($email)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM drivers WHERE staff_email=:email");
            $query->bindValue(":email", $email);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getSingleStaff($staff_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM drivers WHERE staff_number=:staff_number");
            $query->bindValue(":staff_number", $staff_number);
			$query->execute();
			return $query->fetch();
        }


    }
?>