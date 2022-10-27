            <?php
			include ('db/dbcon.php');
                if (isset($_POST['save'])){

                    $branch_location=$_POST['branch_location'];
					
                    mysql_query("insert into branch (branch_location,date_added)
                        values ('$branch_location',DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p'))") or die(mysql_error()); 
					echo "<script>alert('Branch Added!'); window.location='branch.php'</script>";
					
                }
            ?>