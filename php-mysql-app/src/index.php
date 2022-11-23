<?php require_once 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP MySQL Docker Application</title>
    <style>
        table {
            border: 1px solid;
        }
        table td {
            border: 1px solid #e3e3e3;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
	<h3>Hello & Welcome!</h3>

	<p>Available users:</p>
	<table>
		<thead>
			<th>ID</th>
			<th>User Name</th>
			<th>Email</th>
		</thead>
		<tbody>
			<?php
				$query   = 'SELECT * FROM users';
				$results = $conn->query( $query );
			if ( $results->num_rows > 0 ) :
                
				?>
            <?php while ( $rows = $results->fetch_object() ) : ?>
                <tr>
                    <td><?= $rows->id; ?></td>
                    <td><?= $rows->name; ?></td>
                    <td><?= $rows->email; ?></td>
                </tr>
            <?php endwhile; ?>
			<?php else : ?>
				<tr>
					<td colspan="100%">
						No record found
					</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
</body>
</html>

