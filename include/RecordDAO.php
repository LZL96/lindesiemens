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


}