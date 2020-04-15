<?php

/**
  QUESTION 1
  Step 1
  Create a simple HTML table that has 3 rows and 2 columns.
 
  Step 2
  Into the first column, enter labels for Firstname, Surname and ID Number and in the second column
  put in input fields where a user can enter their Firstname, Surname and ID Number.

 
  Step 3
  Create a form that will submit this information to the same page

  


  Step 4
  On the same page, take the submitted information and write a SQL query
  that will insert the posted information into a table called tbl_Person, that has columns
  col_firstname, col_surname, col_idnumber.

  Note: It's optional whether you want to write code that connects to a database and code
  that inserts into the database. We just want to see the SQL query, that uses the posted
  variables to insert into table person
* */
  
/*  Display form  */
echo '<table>
 <tr>
 <th>Firstname</th>
 <th>Surname</th>
 <th>ID Number</th>
 </tr>
 <form action="question1.php" method="post">
 <tr> 
 <td>
 <input type="text" name="firstname" /></td>
 <td><input type="text" name="surname" /></td>
 <td><input type="text" name="idnumber" /></td>
 </tr>

<tr>
<td>
<input type="submit" name="submit" />
</td>
</tr>
 </form>
  </table>
';


/** checks if the form fields are field and the insert into table */
if(isset($_POST['submit'])) {
  if(empty($_POST['firstname']) || empty($_POST['surname']) || empty($_POST['idnumber']))
  {
		echo "<p><h2><font color='red'>Fill in all the text boxes!</font></h2></p>";
	}
	else{
		$firstname = $_POST['firstname'];
		$surname = $_POST['first_name'];
		$id_number = $_POST['idnumber'];
		
		$query = "INSERT INTO tbl_Person VALUES ('$firstname','$surname','$idnumber')";
		$statement = $db->prepare($query);
		$statement->execute();
		
		echo "Record has been added<br>.";
	}
}


?>
<!-- SUPPLY YOUR ANSWER BELOW THIS COMMENT -->