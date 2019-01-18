<?php

class OperatorDAO {

    public function retreiveAll() {
        $sql = "select * from operator";

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $output = [];
        while ($row = $stmt->fetch(PDO::ASSOC)) {
            $result[] = new Operator($row["id"], $row["operator_name"], $row["points"]);
        }
        return $output;
    }

    public function retreive($name) {
        $all = $this->retreiveAll();
        foreach ($all as $temp) {
            if (strtolow($temp) == strtolower($name)) {
                return $temp; 
            }
        }
    }

}