<?php

class OperatorDAO {

    public function retrieveAll() {
        $sql = "select * from operator";

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $output = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output[] = new Operator($row["id"], $row["operator_name"], $row["points"]);
        }
        return $output;
    }

    public function retrieve($name) {
        $all = $this->retrieveAll();
        foreach ($all as $operator) {
            
            if (strtolower($operator->operator_name) == strtolower($name)) {
                return $operator; 
            }
        }
    }

}