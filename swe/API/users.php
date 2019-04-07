<?php
include("/opt/lampp/htdocs/test/swe/connection.php");
	$db = new connect();
	$connection =  $db->getConnstring();

	$request_method=$_SERVER["REQUEST_METHOD"];

  switch($request_method)
	{
		case 'GET':
			// Retrive Products
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				get_users($id);
			}
			else
			{
				get_users();
			}
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;

    case 'PUT':
  // Update Product
    $id=intval($_GET["id"]);
    update_user($id);
    break;

	}
  function get_users()
	{
		global $connection;
		$query="SELECT * FROM users";
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

function get_users($id=0)
{
	     global $connection;
	      $query="SELECT * FROM users";
	     if($id != 0)
	 {
		$query.=" WHERE ID=".$id." LIMIT 1";
	 }
	     $response=array();
	     $result=mysqli_query($connection, $query);
	 while($row=mysqli_fetch_array($result))
	{
		      $response[]=$row;
	 }
	   header('Content-Type: application/json');
	   echo json_encode($response);
    }

  function update_user($id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$user_name=$post_vars["Firstname"];
		$user_email=$post_vars["Email"];
		$user_phoneno=$post_vars["phoneno"];
		$query="UPDATE users SET Firstname='".$user_name."',Email ='".$user_email."', phoneno='".$user_phoneno."' WHERE ID=".$id;
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'user Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'user Updation Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
  ?>
