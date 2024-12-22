<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class = "Searchdiv">
 <?php
    $conn = mysqli_connect("localhost", "root", "", "pagesdb");

    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM pages WHERE page_name LIKE '%$search%'";

        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>
                    <h3><a href=".$row['links'].">".$row['page_name']."</a></h3>
                </div>";
            }
        } else {
            echo "There are no results matching your search!";
        }
    }
    ?>
 </div>   
 <?php
      include "footer.php";
      ?>
   
</body>
</html>
