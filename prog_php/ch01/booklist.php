<?php
	Define ('DB_USER', 'root');     // or whatever userid you created
	Define ('DB_PASSWORD', 'Pa55w0rd!');    // or whatever password you created
	Define ('DB_HOST', 'localhost');
	Define ('DB_NAME', 'library');
	try {
        $dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($dbcon, 'utf-8');
        
        // make sure that above credentials are correct for your environment
        if ( $dbcon->connect_error ) {
            die( "Connect Error ({$dbcon->connect_errno}) {$dbcon->connect_error}" );
        }
        
        $sql = "SELECT * FROM books WHERE available = 1 ORDER BY title";
        $result = $dbcon->query($sql);
?>

<html lang="en">
	<body>
		<table cellSpacing="2" cellPadding="6" align="center" border="1">
			<tr>
				<td colspan="4">
					<h3 align="center">These Books are currently available</h3>
				</td>
			</tr>
			<tr>
				<td align="center">Title</td>
				<td align="center">Year Published</td>
				<td>ISBN</td>
			</tr>
			<?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo stripslashes($row['title']); ?></td>
                    <td align="center"><?php echo $row['pub_year']; ?></td>
                    <td><?php echo $row['ISBN']; ?></td>
                </tr>
			<?php }
                } catch (Exception $e) {
                    // print "An Exception occurred. Message: " . $e->getMessage();
                    print "The system is busy please try later";
                } catch(Error $e) {
                    print "An Exception occurred. Message: " . $e->getMessage();
                }
                ?>
		</table>
	</body>
</html>