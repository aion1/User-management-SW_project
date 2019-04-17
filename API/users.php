<?php
include("/opt/lampp/htdocs/test/swe/connection.php");
	$db = new connection();
	$db->connect();
	$connection2 =  $db->getConnect();

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
				if($_GET["id"]=="0")
				   break;
				get_user();
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
  function get_user()
	{
		global $connection2;
		$query="SELECT * FROM users";
		$response=array();
		$result=mysqli_query($connection2, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

function get_users($id)
{
	     global $connection2;
	      $query='SELECT * FROM users WHERE ID="'.$id.'"';
	     $response=array();
	     $result=mysqli_query($connection2, $query);
	 while($row=mysqli_fetch_array($result))
	{
		      $response[]=$row;
	 }
	   header('Content-Type: application/json');
	   echo json_encode($response);
  }

  function update_user($id)
	{
		global $connection2;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$user_name=$post_vars["Firstname"];
		$user_email=$post_vars["Email"];
		$user_phoneno=$post_vars["phoneno"];
		$query="UPDATE users SET Firstname='".$user_name."',Email ='".$user_email."', phoneno='".$user_phoneno."' WHERE ID=".$id;
		if(mysqli_query($connection2, $query))
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
