<?php include("../includes/connect.php"); 

$page_title = "Delete Courses";
$body_class ="delete";
$page_heading = "Delete Courses";

$row_to_edit = $_GET['row_to_edit'];

if ($row_to_edit && is_numeric($row_to_edit))
{
    $update_sql = "UPDATE courses_EDT SET deletedYN ='Y' WHERE c_id = $row_to_edit";
    if($conn->query($update_sql))
    {
        $message = "<p onclick='myFunction()'>Record deleted</p>";
    }
    else
    {
        $message = "<p>There was a problem deleting that course: $conn->error</p>";
    }
}


?>



<?php include("../includes/header2.php"); ?>

<?php include("../includes/welcome.html"); ?>


<div class="delete-flex">
    <h3>Courses in System</h3>
    <?php
    echo $message;
    $list_sql = "SELECT course_code, course_name, c_id FROM `courses_EDT` WHERE deletedYN = 'N'";
    // echo $list_sql;
    $list_result = $conn->query($list_sql);

    if($list_result->num_rows > 0)
    {
        echo "<ul>";
        while($list_row = $list_result->fetch_assoc())
        {
            extract($list_row);
            echo "<li>";
            echo "<a onclick='deleteRecord()' class='delete-links' href='delete.php?row_to_edit=$c_id'>";
            echo "$course_name ($course_code)";
            echo "</a>";
            echo "</li>";            
        }
        echo "</ul>";
    }



    ?>
</div>


<?php include("../includes/footer.php"); ?>