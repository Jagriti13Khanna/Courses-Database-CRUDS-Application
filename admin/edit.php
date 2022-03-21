<?php include("../includes/connect.php");

$page_title = "Edit Courses";
$body_class ="edit";
$page_heading = "Edit Courses";

$row_to_edit = $_GET['row_to_edit'];

if(isset($_POST['save']))
{
    extract($_POST);
    
    // echo "$course_code $course_name $course_desc";

    if ($code && $name && $desc)
    {
        $code = strtoupper($course_code);
        $name = ucwords($course_name);
        $desc = ucfirst($course_desc);
        
        // $sql = "INSERT into `courses_EDT` (course_code, course_name, course_desc) VALUES ('$course_code', '$course_name', '$course_desc')";

        $update_sql  = "UPDATE courses_EDT SET course_code = '$code', course_name = '$name', course_desc = '$desc' WHERE c_id = $row_to_edit";

        // echo $sql;

        if ($conn->query($update_sql))
        {
           $message = "<p class='msg'>Record updated successfuly</p>";
            $course_code = $course_name = $course_desc = "";
        }
        else {
            $message = "<p class='msg'>There was a problem updating: $conn->error</p>";
        }
    }
    
    else 
    {
        // $course_code = trim($_POST['course_code']);
	    // $course_name = trim($_POST['course_name']);
		// $course_desc = trim($_POST['course_desc']);	
        // $form_valid = TRUE;

	
        if ((strlen($course_code) < 3) || (strlen($course_code) > 10)) {
			$codeValid = "<p class='msg'>Please enter the Course code from 3 to 6 characters.</p>";
            $form_valid = FALSE;
	    }

	    if ((strlen($course_name) < 5) || (strlen($course_name) > 81)) {
			$nameValid = "<p class='msg'>Please add a Course Name from 5 to 81 characters.</p>";
            $form_valid = FALSE;
	    }

	    if ((strlen($course_desc) < 20) ) {
			$descValid = "<p class='msg'>Please enter a Course description above 20 characters.</p>";
            $form_valid = FALSE;
        }
    }

}


?>



<?php include("../includes/header2.php"); ?>

<?php include("../includes/welcome.html"); ?>

<div class="edit-flex">
    <div class="edit">
        <h3>Courses in System</h3>
        <?php
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
                echo "<a class='edit-links' href='edit.php?row_to_edit=$c_id'>";
                echo "$course_name ($course_code)";
                echo "</a>";
                echo "</li>";
            }
            echo "</ul>";
        }
    
    
    
        ?>
    </div>
    
    <div class="edit-form">
        <?php if ($row_to_edit): ?>
            <?php
                $row_to_edit_sql = "SELECT course_code, course_desc, course_name FROM `courses_EDT` WHERE c_id = $row_to_edit";
                $row_to_edit_result = $conn->query($row_to_edit_sql);
                $row_to_edit_row = $row_to_edit_result->fetch_assoc();
    
                extract($row_to_edit_row);
    
                // echo $row_to_edit_sql;
    
            ?>
    
    
            <form class="edit-form" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="POST">
    
                <?php echo $message; ?>
    
                <div class="iblock">
                    <label for="course_code">Course Code</label>
                    <input type="text" id="course_code" name="course_code" value="<?php if ($code) echo $code; else echo $course_code; ?>">
                    <?php echo $codeValid; ?>
                </div>
    
                <div class="iblock">
                    <label for="course_name">Course Name</label>
                    <input type="text" id="course_name" name="course_name" value="<?php if ($name) echo $name; else echo $course_name; ?>">
                    <?php echo $nameValid; ?>
                </div>
    
                <div class="iblock">
                    <label for="course_desc">Course Description</label>
                    <textarea id="course_desc" name="course_desc"><?php if ($desc) echo $desc; else echo $course_desc; ?></textarea>
                    <?php echo $descValid; ?>
                </div>
    
                <input type="submit" value="Save Changes" name="save">
    
            </form>
        <?php endif ?>
    </div>
</div>













<?php include("../includes/footer.php"); ?>