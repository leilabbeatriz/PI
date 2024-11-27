<?php 

class Planos{
    protected $connection;

    public function __construct(mysqli $connection) {
        $this->connection = $connection;
    }
    function find (string $planName) {  
        $query = 'SELECT * FROM plans WHERE planName= ?';

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('s', $email);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function managerPlan(){
        $plan = new Planos(connection());
        
        if ($plan->find('gestorPlan')) {
            exit;
        }else{
            $query = "INSERT INTO plans (planName, planDuration, planCost) values('gestorPlan',0,0)";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
        }
        
    }

    function save (string $planName, int $planDuration, float $planCost){
        $query = "INSERT INTO plans (planName, planDuration, planCost) values(?,?,?)";

        

        $stmt = $this->connection->prepare($query);

        $stmt->bind_param('sid', $planName, $planDuration, $planCost);
        
        $result = $stmt->execute();
        
        return $result;
    }

    public function allPlans () {
        $result = $this->connection->query('SELECT * FROM plans');

        $plan_list = array();
        while ($plan = $result->fetch_assoc()) {
            array_push($plan_list, [
                'name' => $plan['planName'],
                'id' => $plan['id'],
            ]);
        }
        return $plan_list;
    }

}

?>