<?php 
    class Car {

        public function deleteCar($slug)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM cars WHERE slug=:slug");
			$query->bindValue(":slug", $slug);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllCar()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM cars ORDER BY car_id desc");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function generateSlug($text){
			// replace non letter or digits by -
			$text = preg_replace('~[^\pL\d]+~u', '-', $text);
			// transliterate
			$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
			// remove unwanted characters
			$text = preg_replace('~[^-\w]+~', '', $text);
			// trim
			$text = trim($text, '-');
			// remove duplicate -
			$text = preg_replace('~-+~', '-', $text);
			// lowercase
			$text = strtolower($text);
			if (empty($text)) {
				return 'n-a';
			}
			return $text."-".rand(1111,9999);		
		}	

        public function addCar($slug, $name, $brand_id, $category_id, $capacity, $facilities, $description, $car_image, $status, $color)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("INSERT INTO cars(slug, name, brand_id, category_id, capacity, facilities, description, car_image, status, color)
                 VALUES (:slug, :name, :brand_id, :category_id, :capacity, :facilities, :description, :car_image, :status, :color)");
            $query->bindValue(":name", $name);
            $query->bindValue(":brand_id", $brand_id);
            $query->bindValue(":category_id", $category_id);
            $query->bindValue(":capacity", $capacity);
            $query->bindValue(":facilities", $facilities);
            $query->bindValue(":description", $description);
            $query->bindValue(":car_image", $car_image);
            $query->bindValue(":status", $status);
            $query->bindValue(":color", $color);
            $query->bindValue(":slug", $slug);

            if(!empty($query->execute())){
				return true;
			}else{
                return false;
            }
        }

        public function updateCar($name, $brand_id, $category_id, $capacity, $facilities, $description, $car_image, $status, $color, $slug)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("UPDATE cars SET name=:name, brand_id=:brand_id, category_id=:category_id, capacity=:capacity, facilities=:facilities, description=:description, 
			car_image=:car_image, status=:status, color=:color WHERE slug=:slug");
            $query->bindValue(":name", $name);
            $query->bindValue(":brand_id", $brand_id);
            $query->bindValue(":category_id", $category_id);
            $query->bindValue(":capacity", $capacity);
            $query->bindValue(":facilities", $facilities);
            $query->bindValue(":description", $description);
            $query->bindValue(":car_image", $car_image);
            $query->bindValue(":status", $status);
            $query->bindValue(":color", $color);
            $query->bindValue(":slug", $slug);

            if(!empty($query->execute())){
				return true;
			}else{
                return false;
            }
        }

        public function getSingleCarList($slug)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM cars WHERE slug=:slug");
            $query->bindValue(":slug", $slug);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSingleCar($slug)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM cars WHERE slug=:slug");
            $query->bindValue(":slug", $slug);
			$query->execute();
			return $query->fetch();
        }
        
        public function getPaginateACrs($start, $itemsPerPage)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM cars ORDER BY car_id desc LIMIT :start, :items_per_page");
			$query->bindValue(":start", $start, PDO::PARAM_INT);
			$query->bindValue(":items_per_page", $itemsPerPage, PDO::PARAM_INT);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
        }
        
        public function getAllCarSideBar()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM cars ORDER BY car_id desc LIMIT 0,6");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
    }
?>