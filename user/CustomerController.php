<?php
    require_once(__DIR__."/../config/Database.php");
    class CustomerController {
        private $database = null;

        public function __construct() {
            $this->database = initDatabase();
        }

        public function __destruct() {
            $this->database->close();
        }

        public function getCustomers() {
            $query = "SELECT * FROM CUSTOMER";
            $customers[] = array();

            $query_results = $this->database->query($query);
            
            while ($customer = mysqli_fetch_assoc($query_results)) {
                $customers[] = $customer;
            }

            return $customers;
        }

        public function getCustomerById($username) {
            $query = "SELECT user_name, email, dob, gender FROM users WHERE id = ?";
            $stmt = $this->database->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($username, $email, $dob, $gender);
            
            $customer = [];
            while ($stmt->fetch()) {
                $customer = [
                    "username" => $username,
                    "email" => $email,
                    "dob" => $dob,
                    "gender" => $gender,
                ];
            }
            return $customer;
        }

        public function getTotalCustomers() {
            $total = 0;
            $query = "SELECT COUNT(*) as 'TOTAL' FROM CUSTOMER";
            $stmt = $this->database->prepare($query);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($total);
            
            $customer = [];
            while ($stmt->fetch()) {
                $total = $total;
            }

            return $total;
        }

        public function getTotalCustomerByType($type = 0) {
            $total = 0;
            $query = "SELECT COUNT(*) as 'TOTAL' FROM users WHERE LOCKED = ?";
            $stmt = $this->database->prepare($query);
            $stmt->bind_param("i", $type);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($total);
            
            $customer = [];
            while ($stmt->fetch()) {
                $total = $total;
            }

            return $total;
        }

        public function getCustomerByType($page = 0, $type = 0) {
            $query = "SELECT id, user_name, email, dob, gender location FROM users WHERE LOCKED = ? ORDER BY timestamp DESC LIMIT ? OFFSET ?";
            $offset = ($page * LIMIT_ON_PAGE);
            $limit = LIMIT_ON_PAGE;
            $customers = array();

            $stmt = $this->database->prepare($query);
            $stmt->bind_param("iii", $type, $limit, $offset);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $user_name, $email, $dob, $gender);
            while ($stmt->fetch()) {
                array_push($customers, [
                    "id" => $id,
                    "user_name" => $user_name,
                    "email" => $email,
                    "dob" => $dob,
                    "gender" => $gender,
                ]);
            }

            return $customers;
        }

        public function changeStateAccount($id, $state) {
            $query = "UPDATE users SET locked = ? WHERE id = ?";
            $stmt = $this->database->prepare($query);
            $stmt->bind_param("is", $state, $id);
            return $stmt->execute();
        }
    }
?>