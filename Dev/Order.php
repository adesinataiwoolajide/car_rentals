<?php
	class Order {		
		private $orderId;
		private $amount;
		private $orderStatus;
		private $quantity;
		private $slug;


		

		public function getSlug($slug){
			$this->slug = $slug;
		}

		public function getQuantity($quantity){
			$this->quantity = $quantity;
		}

		public function getOrderId($orderId){
			$this->orderId = $orderId;
		}

		public function getAmount($amount){
			$this->amount = $amount;
		}		

		public function getSingleOrder()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE order_id = :order_id");
			$query->bindValue(":order_id", $this->orderId);			
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getCustomerOrder()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE customer_id = :customer_id ORDER BY id DESC");
			$query->bindValue(":customer_id", $this->customerId);			
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function ckeckExitenceOrder()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE customer_id = :customer_id ORDER BY id DESC");
			$query->bindValue(":customer_id", $this->customerId);			
			$query->execute();
			if($query->rowCount()==0){
				return true;
			}else{
				return false;
			}
		}

		public function getCustomerOrderDetails($orderId)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE order_id = :orderId");
			$query->bindValue(":orderId", $orderId);			
			$query->execute();
			return $query->fetch();
		}


		public function saveOrder($customer_id, $order_id, $paystack_reference, $paid_status, $order_status, $amount)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO customer_order (customer_id, order_id, paystack_reference, paid_status, order_status,amount) VALUES 
			(:customer_id, :order_id, :paystack_reference, :paid_status, :order_status, :amount)");
			$query->bindValue(":customer_id", $customer_id);
			$query->bindValue(":order_id", $order_id);
			$query->bindValue(":paystack_reference", $paystack_reference);
			$query->bindValue(":paid_status", $paid_status);
			$query->bindValue(":order_status", $order_status);
	
			$query->bindValue(":amount", $amount);
			
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function saveOrderDetails($orderId, $slug, $quantity, $amount)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO customer_order_details (order_id, slug, quantity, amount) 
			VALUES (:order_id, :slug, :quantity, :amount)");
			$query->bindValue(":order_id", $orderId);
			$query->bindValue(":slug", $slug);
			$query->bindValue(":quantity", $quantity);
			$query->bindValue(":amount", $amount);

			if($query->execute()){
				return true;
			}
			return false;			
		}
		public function updateOnlinePaymentStatus($customer_id, $reference)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET paid_status = 1, order_status=1 WHERE customer_id = :customer_id AND paystack_reference=:reference");
			$query->bindValue(':customer_id', $customer_id);
			$query->bindValue(':reference', $reference);
			if(!empty($query->execute())){
				return true;
			}else{
				return false;
			}
			
		}

		public function deleteOrders($order_id){
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM customer_order WHERE order_id = '$order_id'");
			$query->execute();
			$query = $db->prepare("DELETE FROM customer_order_details WHERE order_id = '$order_id'");
			$query->execute();
			return true;
		}

		public function updateOrderWithPaystackReference($order_id, $paystack)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET paystack_reference = '$paystack' WHERE order_id = '$order_id'");
			$query->bindValue(':order_id', $order_id);
			$query->bindValue(':paystack', $paystack);
			$query->execute();
			return true;
		}

		public function updateOrderPaymentStatus($customer_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET paid_status = 1 WHERE customer_id = '$customer_id'");
			$query->bindValue(':customer_id', $customer_id);
			$query->execute();
			return true;
		}
		
		public function updateOrderStatus()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET order_status = :status WHERE order_id = :order_id");
			$query->bindValue(":status", $this->status);
			$query->bindValue(":order_id", $this->orderId);
			if($query->execute()){
				return true;
			}
			return false;
		}			

		public function getAllOrders()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->query("SELECT * FROM customer_order ORDER BY id DESC");
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}		

		
		public function updateCustomerOrderId()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET order_id = :new_orderId WHERE order_id = :order_id");
			$query->bindValue(":new_orderId", $this->newOrderId);
			$query->bindValue(":order_id", $this->orderId);			
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function updateCustomerOrderDetailsId()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order_details SET order_id = :new_orderId WHERE order_id = :order_id");
			$query->bindValue(":new_orderId", $this->newOrderId);
			$query->bindValue(":order_id", $this->orderId);			
			if($query->execute()){
				return true;
			}
			return false;
		}
		
		public function shipCustomerOrder()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE order_status=1 AND shipping =0 ORDER BY time_created ASC");		
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function unshippedCustomerOrder()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE order_status=1 AND shipping =1 ORDER BY time_created ASC");		
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function unDelivCustomerOrder()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE order_status=1 AND shipping =1 AND delivery=0 ORDER BY time_created ASC");		
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function singleCustomerOrder($orderId)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order_details WHERE order_id=:orderId");	
			$query->bindValue(":orderId", $orderId);	
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updatDeliverCustomerOrder($orderId, $customer_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET delivery=1 WHERE order_id=:orderId AND customer_id=:customer_id");	
			$query->bindValue(":orderId", $orderId);
			$query->bindValue(":customer_id", $customer_id);	
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function unshipCustomerOrder($orderId, $customer_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET shipping=0 WHERE order_id=:orderId AND customer_id=:customer_id");	
			$query->bindValue(":orderId", $orderId);
			$query->bindValue(":customer_id", $customer_id);	
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function unDeliCustomerOrder($orderId, $customer_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET delivery=0 WHERE order_id=:orderId AND customer_id=:customer_id");	
			$query->bindValue(":orderId", $orderId);
			$query->bindValue(":customer_id", $customer_id);	
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function deliverCustomerOrder()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE delivery =0 AND shipping=1 ORDER BY time_created ASC");		
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateDeliveryCustomerOrder($order_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET delivery=1 WHERE order_id=:order_id");	
			$query->bindValue(":order_id", $this->order_id);	
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function updatePaymentCustomerOrder($order_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE customer_order SET paid_status=1 WHERE order_id=:order_id");	
			$query->bindValue(":order_id", $order_id);	
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function singleOrder($customer_id, $orderId)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_order WHERE customer_id=:customer_id AND order_id=:orderId");	
			$query->bindValue(":customer_id", $customer_id);
			$query->bindValue(":orderId", $orderId);	
			$query->execute();
			return $query->fetch();
		}

		public function sumSingleOrder($orderId)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT sum(weight_pro) as weight_cost FROM customer_order_details WHERE order_id=:orderId");	
			$query->bindValue(":orderId", $orderId);	
			$query->execute();
			$lol=  $query->fetch();
			return $now= $lol['weight_cost'];
		}


															
	}
?>
