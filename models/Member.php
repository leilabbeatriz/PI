<?php 

// include 'Planos.php';

class Member{
    protected $connection;

    public function __construct(mysqli $connection) {
        $this->connection = $connection;
    }

    function find (string $email) {  
        $query = 'SELECT * FROM members WHERE email= ?';

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('s', $email);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    function delete ($id) {  
        $query = 'DELETE FROM members WHERE id= ?';

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);  
        $result = $sttm->execute();

        return $result;
        
    }

    function edit (string $name, string $user, int $age, string $email, string $password, string $type, int $plan, string $old_email)  {  
        
        $query = 'UPDATE members SET 
        name = :name, 
        user = :user, 
        age = :age, 
        email = :new_email, 
        password = :password, 
        type = :type, 
        plan = :plan 
        WHERE email = :old_email';
        
        $sttm = $this->connection->prepare($query);

        $sttm->bindValue(":name", $name);
        $sttm->bindValue(":user", $user);
        $sttm->bindValue(":age", $age);
        $sttm->bindValue(":new_email", $email);
        $sttm->bindValue(":password", password_hash($password, PASSWORD_ARGON2I));
        $sttm->bindValue(":type", $type);
        $sttm->bindValue(":plan", $plan);
        $sttm->bindValue(":old_email", $old_email);
        $result = $sttm->execute();
    
        return $result;
        
    }

    function findAll() {
        $query = "SELECT id, name, user, age, email, type, plan FROM members";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }


    function save (string $name, string $user, int $age, string $email, string $password, string $type, int $plan) : SQLite3Result | bool{
        $query = "INSERT INTO members (name, user, age, email, password, type, plan) values (?,?,?,?,?,?,?)";

        $stmt = $this->connection->prepare($query);
        $hashed_password = password_hash($password, PASSWORD_ARGON2I);
        $stmt->bind_param("ssisssi", $name, $user, $age, $email, $hashed_password, $type, $plan);
        $result = $stmt->execute();
        return $result;
    }

    function insertManager (){

        $manager = new Member(connection());
        $plan = new Planos(connection());
        $plan->managerPlan();
        $query = $manager->save('gestor', 'gestor', 0, 'smartfitPI@gmail.com', '000', 'admin', 1);

        $_SESSION['profile'] = 'admin';

        return $query;
    }
    
}
?>