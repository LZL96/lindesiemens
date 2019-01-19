<?php

class RecordDAO {

    public function retrieveAll() {
        $sql = "select * from record";

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $output = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output[] = new Record($row["id"], $row["description"], $row["points"]);
        }
        return $output;
    }

    public function retrieve($name) {
        $sql = "select * from record where operator_name='$name'";
        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $output = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output[] = new Record($row["id"], $row["description"], $row["points"]);
        }
        return $output;
    }

    public function add($record) {
        $sql = "insert into record(operator_name, description, points) values (:operator_name, :description, :points)";

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':operator_name', $record->operator_name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $record->description, PDO::PARAM_STR);
        $stmt->bindParam(':points', $record->points, PDO::PARAM_STR);

        if ($stmt->execute()) return "wuhu";
        else return $sql;
    }

}
