<?php

$page_title = "Search for Courses";
$body_class ="search";

include("includes/connect.php");

if (isset($_POST['searchButton']))
{
    $search =trim($_POST['search']);
    $search = filter_var($search, FILTER_SANITIZE_STRING);

    if(strlen($search) < 3)
    {
        $error = "Please try a longer word";
    }
    else{
        $sql = "SELECT course_code, course_name, course_desc FROM `courses_EDT` WHERE (course_code LIKE '%$search%' OR course_name LIKE '%$search%' OR course_desc LIKE '%$search%') AND deletedYN = 'N' ";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                extract($row);

                $course_code = strtoupper($course_code);
                $course_name = ucwords($course_name);

                $searchOutput .= "<div>";
                $searchOutput .= "<h2>$course_name - $course_code</h2>";
                $searchOutput .= "<p>$course_desc</p>";
                $searchOutput .= "</div";   
            }
        }
        else 
        {
            $error = "No records match your search. Please try again!";
        }
    }
}

include ("includes/header1.php");

?>

        <form class="search-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <?php echo $message; ?>
            <div class="flex-search">
                <label for="search">Add the course you want to search</label>
                <input type="text" id="search" name="search" value="<?php echo $search; ?>">
            </div>
            <input type="submit" value="Search" name="searchButton">
        </form>
        <?php echo $searchOutput; ?>
    </main>

<?php include ("includes/footer.php"); ?>