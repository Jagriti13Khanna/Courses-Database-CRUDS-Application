<?php

$page_title = "Insert Courses";
$body_class ="insert";
$page_heading = "Insert Courses";

include("../includes/connect.php");

session_start();

if (isset($_POST['submit']))
{
    extract($_POST);
    // echo "$course_code $course_name $course_desc";

    if ($course_code && $course_name && $course_desc)
    {
        $course_code = strtoupper($course_code);
        $course_name = ucwords($course_name);
        $course_desc = ucfirst($course_desc);
        $sql = "INSERT into `courses_EDT` (course_code, course_name, course_desc) VALUES ('$course_code', '$course_name', '$course_desc')";

        // echo $sql;

        if ($conn->query($sql))
        {
            $message = "Record inserted successfuly";
            $course_code = $course_name = $course_desc ="";
        }
        else {
            $message = "There was a problem inserting: $conn->error";
        }
    }
    // else 
    // {
    //     $message = "<p class='msg'>All fields are required</p>";
    // }

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

include("../includes/header2.php");

include("../includes/welcome.html"); 
?>

    <form class="insert" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <?php echo $message; ?>

        <div class="no-flex">
            <div class="iblock">
                <label for="course_code">Course Code</label>
                <input type="text" id="course_code" name="course_code" value="<?php echo $course_code; ?>">
                <?php echo $codeValid; ?>
            </div>
            <div class="iblock">
                <label for="course_name">Course Name</label>
                <input type="text" id="course_name" name="course_name" value="<?php echo $course_name; ?>">
                <?php echo $nameValid; ?>
            </div>
            <div class="iblock">
                <label for="course_desc">Course Description</label>
                <textarea id="course_desc" name="course_desc"><?php echo $course_desc; ?></textarea>
                <?php echo $descValid; ?>
            </div>
            <input type="submit" value="Add Course" name="submit">
        </div>

    </form>
  

<?php include("../includes/footer.php"); ?>