
    <?php include 'db.php'; 
    $conn = new mysqli($host, $username, $password, $dbname);
    
    $sql = "SELECT * FROM students join classes on students.class_id = classes.id";
    $result = mysqli_query($conn, $sql);
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Class</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['class_name']; ?></td>
        </tr>
        <?php } ?>