<?php


require_once 'class.db.php';

class MySql
{
	//check row exists
	public static function checkRowExists($sql) {
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$stmt = $mysqli->prepare($sql);

		if (!$stmt) {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$mysqli->error,
					'message'	=>	'invalid query or no result'
					);
			return $res;
			exit();
		}
		$stmt->execute();
		$result = $stmt->get_result();
		$rows   = $result->num_rows;
		$error = mysqli_error($mysqli);
		// $mysqli->close();

		if($error == NULL) {
			if ($rows>0) {
				$res = array(
					'success'	=>	'1',
					'error'		=>	NULL,
					'message'	=>	'row exists'
					);
			} else {
				$res = array(
					'success'	=>	'0',
					'error'		=>	$error,
					'message'	=>	'no row exists'
					);
			}
		} else {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$error,
					'message'	=>	'execution error'
					);
		}

		return $res;
		exit();
		
	}



	//insert data into database
		public static function InsertData($tablename,$dataarray)
	{
		$sql = "INSERT INTO `".$tablename."`(";
		foreach ($dataarray as $key=>$value){
			$sql .= "`" . $key . "`,";
		}
		$sql  = trim($sql,",");
		$sql .= ") VALUES (";
		foreach($dataarray as $key=>$value){
			$sql .= $value . ",";
		}
		$sql  = trim($sql,",");
		$sql .= ");";

		// return $sql;


		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		
		$stmt = $mysqli->prepare($sql);


		if (!$stmt) {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$mysqli->error,
					'message'	=>	'invalid query'
					);
			return $res;
			exit();
		}
		$stmt->execute();
		$result = $stmt->get_result();
		$error = mysqli_error($mysqli);
		$id = $mysqli->insert_id;

		if( $id != 0 ){

			$res = array(
					'success'	=>	'1',
					'id'		=>	$id,
					'error'		=>	NULL,
					);
		} else {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$error,
					);
		}

		return $res;
	}

	

	//fetchrow single row

	public static function fetchRow($sql) {
		

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		// $error = mysqli_error($mysqli);
		$stmt = $mysqli->prepare($sql);
		
		if (!$stmt) {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$mysqli->error,
					'message'	=>	'invalid query'
					);
			return $res;
			exit();
		}
		$stmt->execute();
		$result = $stmt->get_result();
		$numrow = $result->num_rows;
		$error = mysqli_error($mysqli);


		if($result->num_rows > 0){
			$rows = $result->fetch_assoc();
			$res = array(
					'success'	=>	'1',
					'data'		=> 	$rows,
					'error'		=>	NULL,
					);
			
			
		} else {
			$res = array(
					'success'	=>	'0',
					'data'		=> 	NULL,
					'error'		=>	$error,
					);
		}

		return $res;

	
	}




	//fetch multiple rows
	public static function fetchAllRows($sql) {
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		
		$stmt = $mysqli->prepare($sql);
		if (!$stmt) {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$mysqli->error,
					'message'	=>	'invalid query'
					);
			return $res;
			exit();
		}
		$stmt->execute();
		$result = $stmt->get_result();

		$numrow = $result->num_rows;
		$error = mysqli_error($mysqli);
		if($result->num_rows > 0){
			
			$res = array(
					'success'	=>	'1',
					'data'		=> 	$result,
					'error'		=>	NULL,
					);
			
		} else {
			$res = array(
					'success'	=>	'0',
					'data'		=> 	$result,
					'error'		=>	$error,
					);
		}

		return $res;
	}

	public static function updateData($tablename,$dataArray,$condition) {
		$sql = "UPDATE `".$tablename."` SET ";
		foreach($dataArray as $key=>$value) {
			$sql .= "`".$key."`=".$value.",";
		}
		$sql  = trim($sql,",");
		$sql .= " WHERE ";
		foreach($condition as $key=>$value) {
			$sql .= "`".$key."`=".$value." AND ";
		}
		$sql  = substr($sql, 0, -4);
		
		$sql .= ";";

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$result = $mysqli->query($sql);
		if (!$result) {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$mysqli->error,
					'message'	=>	'invalid query'
					);
			return $res;
			exit();
		}
		$error = mysqli_error($mysqli);

		if($error == NULL) {
			if (!empty($result)) {
				$res = array(
					'success'	=>	'1',
					'error'		=>	NULL,
					'message'	=>	'row updated successfully'
					);
			} else {
				$res = array(
					'success'	=>	'0',
					'error'		=>	$error,
					'message'	=>	'no row updated'
					);
			}
		} else {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$error,
					'message'	=>	'execution error'
					);
		}

		return $res;
		exit();


	}
	public static function deleteData($tablename,$condition) {
		$sql = "DELETE FROM `".$tablename."` WHERE ";
		foreach($condition as $key=>$value) {
			$sql .= "`".$key."`=".$value." AND ";
		}
		$sql  = substr($sql, 0, -4);
		
		$sql .= ";";

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$error = mysqli_error($mysqli);

		if ($mysqli->query($sql) === TRUE) {

			$res = array(
					'success'	=>	'1',
					'error'		=>	NULL,
					);
		} else {
			$res = array(
					'success'	=>	'0',
					'error'		=>	$error,
					);
		}

		return $res;
	}
}

class Utility {


	public static function str2img($strImage,$upload_path) {

		list($type, $data) = explode(';', $strImage);
		list(, $data)      = explode(',', $data);

		$rand1 = Utility::generateRandomString(10);
		$rand2 = Utility::generateRandomString(10);
		$newName = $rand1 . "-" . $rand2;
		$extension = "";

		if ($type=="data:image/png") {
			$extension = ".png";
			$name = $newName . $extension;
			$location   = $upload_path . $name;
			$img       = Utility::convertStrToPNG($data,$location);
			return $name;
		} else if ($type=="data:image/jpg") {
			$extension = ".jpg";
			$name = $newName . $extension;
			$location   = $upload_path . $name;
			$img       = Utility::convertStrToJPG($data,$location);

			return $name;
		} else if ($type=="data:image/jpeg") {
			$extension = ".jpg";
			$name = $newName . $extension;
			$location   = $upload_path . $name;			
			$img       = Utility::convertStrToJPEG($data,$location);

			return $name;
		} else if ($type=="data:image/gif") {
			$extension = ".gif";
			$name = $newName . $extension;
			$location   = $upload_path . $name;			
			$img       = Utility::convertStrToGIF($data,$location);
			return $name;
		}		
	}

	public static function convertStrToJPG($img,$location) {
		$imageData = base64_decode($img);
		$source = imagecreatefromstring($imageData);
		$angle = 0;
		$rotate = imagerotate($source, $angle, 0); // if want to rotate the image
		$imageSave = imagejpeg($rotate,$location,100);
		imagedestroy($source);
		if(!empty($imageSave))
			return true;
		return false;
	}

	public static function convertStrToJPEG($img,$location) {
		$imageData = base64_decode($img);
		$source = imagecreatefromstring($imageData);
		$angle = 0;
		$rotate = imagerotate($source, $angle, 0); // if want to rotate the image
		$imageSave = imagejpeg($rotate,$location,100);
		imagedestroy($source);
		if(!empty($imageSave))
			return true;
		return false;
	}

	public static function convertStrToPNG($img,$location) {
		$imageData = base64_decode($img);
		$img = file_put_contents($location, $imageData);
		if(!empty($img))
			return true;
		return false;
	}

	public static function convertStrToGIF($img,$location) {
		$imageData = base64_decode($img);
		$source = imagecreatefromstring($imageData);
		$imageSave = imagegif($source,$location);
		imagedestroy($source);
		return true;
	}

	public static function png2jpg($originalFile, $outputFile, $quality) {
	    $image = imagecreatefrompng($originalFile);
	    imagejpeg($image, $outputFile, $quality);
	    imagedestroy($image);
	}

	public static function jpg2png($originalFile, $outputFile) {
		imagepng(imagecreatefromstring(file_get_contents($originalFile)), $outputFile);
	}

	public static function gif2png($originalFile, $outputFile) {
		imagepng(imagecreatefromstring(file_get_contents($originalFile)), $outputFile);
	}

	public static function png2gif($originalFile, $outputFile, $quality) {
		imagegif(imagecreatefrompng(file_get_contents($originalFile)), $outputFile);
	}

	public static function str2png($strImage) {
		$imageData = $strImage;
		$imageData = explode(',', $imageData);
		$imageData = $imageData[1];

		$imageData = base64_decode($imageData);

		$rand1 = Utility::generateRandomString(10);
		$rand2 = Utility::generateRandomString(10);
		$imageName = $rand1 . "-" . $rand2 . ".png";
		$newImage  = "final/" . $imageName;

		file_put_contents($newImage, $imageData);

		return $imageName;
	}

	public static function str2jpg($strImage) {
		$imageData = $strImage;
		$imageData = explode(',', $imageData);
		$imageData = $imageData[1];

		$imageData = base64_decode($imageData);
		$source    = imagecreatefromstring($imageData);

		$angle     = 0;
		$rotate    = imagerotate($source, $angle, 0); // if want to rotate the image

		$rand1 = Utility::generateRandomString(10);
		$rand2 = Utility::generateRandomString(10);
		$imageName = $rand1 . "-" . $rand2 . ".jpg";
		$newImage  = "uploads/" . $imageName;

		file_put_contents($newImage, $imageData);
		$imageSave = imagejpeg($rotate,$newImage,100);
		imagedestroy($source);

		return $newImage;
	}

	public static function generateRandomString($length) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

}
?>