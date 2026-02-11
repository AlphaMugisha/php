
    <?php include 'db.php'; 
    
    $sql = "SELECT * FROM students join classes on students.class_id = classes.id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Class: " . $row["class_name"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
