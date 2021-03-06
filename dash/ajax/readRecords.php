<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>id</th>
							<th>razon</th>
							<th>apellido</th>
							<th>direccion</th>
							<th>telefono</th>
							<th>email</th>
							<th>cuit</th>
							<th>Editar</th>
							<th>Borrar</th>
						</tr>';

																		
	$query = "SELECT * FROM cli";

	if (!$result = mysqli_query($db, $query)) {
        exit(mysqli_error());
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['razon'].'</td>
				<td>'.$row['apellido'].'</td>
				<td>'.$row['direccion'].'</td>
				<td>'.$row['telefono'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['cuit'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Editar</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Borrar</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>