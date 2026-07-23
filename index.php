<?php

require "config.php";

$sql = "SELECT * FROM plans";
$result = $conn->query($sql);

// Print all rows
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Carrier: " . $row["gen_carrier"] . "<br>";
        echo "Category: " . $row["gen_category"] . "<br>";
        echo "Contract Term: " . $row["gen_contract_term"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No records found.";
}
