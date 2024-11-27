<?php 

class Parceiros{
    protected $connection;

    public function __construct(mysqli $connection) {
        $this->connection = $connection;
    }

    function find (string $email) : Array | bool {  
        $query = 'SELECT * FROM users WHERE email= ?';

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('s', $email);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();

        // $sttm = $this->connection->prepare($query);
        // $sttm->bindValue(':email', $email);  
        // $result = $sttm->execute();
        // return $result->fetchArray(SQLITE3_ASSOC);
    }

    function save (string $name, int $age, string $email, string $function){
        $query = "INSERT INTO partners (name, age, email, function) values(?, ?, ?, ?)";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("siss", $name, $age, $email, $function);

        // $sttm->bindValue(":name", $name);
        // $sttm->bindValue(":age", $age);
        // $sttm->bindValue(":email", $email);
        // $sttm->bindValue(":function", $function);
        $result = $stmt->execute();
        return $result;
    }

    public function allPartners () {


        $result = $this->connection->query('SELECT * FROM partners');

        $partners_list = array();
        while ($partners = $result->fetch_assoc()) {
            array_push($partners_list, [
                'id' => $partners['id'],
                'name' => $partners['name'],
                'age' => $partners['age'],
                'email' => $partners['email'],
                'function' => $partners['function'],
            ]);
        }
        return $partners_list;
    }
}