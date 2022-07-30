<?php
$sql = "UPDATE projeto SET nome='a' WHERE id='1'";
if ($conn->query($sql) === TRUE) {
    echo "Atualizado";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
