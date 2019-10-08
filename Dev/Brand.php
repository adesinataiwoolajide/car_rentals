<?php
	class Brand{
        private $brand_name;
        private $brand_id ; 

        public function getBrand($brand_name)
		{
			return $this->brand_name = $brand_name;
        }

        public function getBrandId($brand_id)
		{
			return $this->brand_id = $brand_id;
        }
        
        public function checkIfAlreadyAdded($brand_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM brands WHERE brand_name = :brand_name");
			$query->bindValue(":brand_name", $brand_name);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function createBrand($brand_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO brands (brand_name) VALUES (:brand_name)");
			$query->bindValue(":brand_name", $brand_name);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function updateBrand($brand_name, $brand_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE brands SET brand_name=:brand_name WHERE brand_id=:brand_id");
            $query->bindValue(":brand_name", $brand_name);
            $query->bindValue(":brand_id", $brand_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function deleteBrand($brand_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM brands WHERE brand_id=:brand_id");
			$query->bindValue(":brand_id", $brand_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllBrand()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM brands ORDER BY brand_name ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleBrand($brand_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM brands WHERE brand_id=:brand_id");
            $query->bindValue(":brand_id", $brand_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSingleBrandList($brand_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM brands WHERE brand_id=:brand_id");
            $query->bindValue(":brand_id", $brand_id);
			$query->execute();
			return $query->fetch();
		}

		public function getSingleBrandName($brand_name)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM brands WHERE brand_name=:brand_name");
            $query->bindValue(":brand_name", $brand_name);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getSinglebrandsL($brand_name)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM brands WHERE brand_name=:brand_name");
            $query->bindValue(":brand_name", $brand_name);
			$query->execute();
			return $query->fetch();
		}
    }

?>