<?php
/**
 * STUEDENT NAME = Mansi patel
 *  STUDENT NUMBER : 200351242
 *  AUTHOR NAME : MAnsi Patel
 *  WEBSITE purpose : Assginment 1
 * FileName = book_delete.PHP
 *  Description :  book_delete.PHP will Delete book detais from the database
 *
 *
 */

include_once('database.php');

/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/

$bookID = $_GET["bookID"]; // assigns the bookID from the URL

if($bookID != false) {
    $query = "DELETE FROM books WHERE bookID = :book_id ";
    $statement = $db->prepare($query);
    $statement->bindValue(":book_id", $bookID);
    $success = $statement->execute(); // execute the prepared query
    $statement->closeCursor(); // close off database
}

// redirect to index page
header('Location: index.php');

?>
