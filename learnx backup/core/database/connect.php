    <?php
     
	$con = mysqli_connect("localhost","username","password","learnx"); //mysql_select_db("learnx");
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
	?>
