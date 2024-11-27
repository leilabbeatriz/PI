<?php 

class Produtos{
    protected $connection;

    public function __construct(mysqli $connection) {
        $this->connection = $connection;
    }

    // determinar o atributo determinante que será usado p realizar a busca de um produto, pq n da p usar email.
    // function find (string $email) : Array | bool {  
    //     $query = 'SELECT * FROM users WHERE email=:email';

    //     $sttm = $this->connection->prepare($query);
    //     $sttm->bindValue(':email', $email);  
    //     $result = $sttm->execute();
    //     return $result->fetchArray(SQLITE3_ASSOC);
    // }

    function save (string $name, string $description, string $supplier, string $price) : SQLite3Result | bool{
        $query = "INSERT INTO products (name, description, supplier, price) values(?,?,?,?)";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ssss", $name, $description, $supplier, $price);

        // $sttm->bindValue(":name", $name);
        // $sttm->bindValue(":description", $description);
        // $sttm->bindValue(":supplier", $supplier);
        // $sttm->bindValue(":price", $price);
        $result = $stmt->execute();
        return $result;
    }

    public function allProducts () {

        $result = $this->connection->query('SELECT * FROM products');

        $products_list = array();
        while ($products = $result->fetch_assoc()) {
            array_push($products_list, [
                'id' => $products['id'],
                'name' => $products['name'],
                'description' => $products['description'],
                'supplier' => $products['supplier'],
                'price' => $products['price'],
            ]);
        }
        return $products_list;
    }
}