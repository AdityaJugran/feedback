<?php
require_once '../vendor1/autoload.php';
class action
{
	public function login($email,$password)
	{
		if(!empty($email)&&!empty($password))
		{
			$sql = "SELECT * FROM `student_details` WHERE `email`='".$email."' AND `password`='".$password."';";
			$row = MySql::fetchRow($sql);
			if($row['success']==1)
			{
				$arr = array(
					'success' => 1,
					'id'	=>	$row['data']['id'],
					'message' => 'LOGIN SUCCESS',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'EMAIL OR PASSWORD INCORRECT',
					'code'    => '001'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
		$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}

	public function profile($id)
	{
		if(!empty($id))
		{
			$sql = "SELECT * FROM `student_details` WHERE `id`='".$id."';";
			$row = MySql::fetchRow($sql);
			if($row['success']==1)
			{
				$array = array(
					'name' 					=> $row['data']['name'],
					'email'					=> $row['data']['email'],
					'phone'					=> $row['data']['phone'],
					'year_of_admission' 	=> $row['data']['admission_year'],
					'registration_id'		=> $row['data']['registration_id'],
					'roll_no'				=>$row['data']['roll_no'],
					'stream'				=>$row['data']['stream'],
					'sem'					=>$row['data']['semester'],
					'gender'				=>$row['data']['gender']
					);
				$arr = array(
					'success' => 1,
					'message' => 'user details',
					'data'	  => $array,
					'code'    => '002'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'no such user_id found',
					'code'    => '002'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
			$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}
	public function signup($name,$email,$phone,$password,$yoa,$late,$sem,$reg_id,$college_id,$roll_no,$stream,$gender)
	{
		if(!empty($name) && !empty($email) && !empty($password) && !empty($yoa) && !empty($late) && !empty($sem) && !empty($reg_id) && !empty($college_id) && !empty($roll_no) && !empty($stream) && !empty($gender))
		{
			$dataarray=array(
				'name' =>'\''.$name.'\'',
				'email'=>'\''.$email.'\'',
				'phone'=>'\''.$phone.'\'',
				'password'=>'\''.$password.'\'',
				'admission_year'=>'\''.$yoa.'\'',
				'lateral_entry'=>'\''.$late.'\'',
				'semester'=>'\''.$sem.'\'',
				'registration_id'=>'\''.$reg_id.'\'',
				'college_id'=>'\''.$college_id.'\'',
				'roll_no'=>'\''.$roll_no.'\'',
				'stream'=>'\''.$stream.'\'',
				'gender'=>'\''.$gender.'\'',
				);
			$row = MySql::InsertData('student_details',$dataarray);
			if($row['success']==1)
			{
				$arr = array(
					'success' => 1,
					'message' => 'signup successfull',
					'code'    => '002'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'signup failed',
					'code'    => '002'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
			$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}
	public function feedback($id)
	{
		if (!empty($id)) 
		{
			$sql = "SELECT * FROM `feedback_chk` WHERE `student_id`='".$id."';";
			$row = MySql::checkRowExists($sql);
			if($row['success']==1)
			{
				$arr = array(
					'success' => 1,
					'message' => 'feedback given',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'feedback yet to do',
					'code'    => '001'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
			$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}

	public function fbdrow($id,$stream)
	{
		if(!empty($id)&& !empty($stream))
		{
			$sql ="SELECT `sub`.`id` AS `subject_id`,`sub`.`subject_name`, `fd`.`id` AS `faculty_id`,`fd`.`name` FROM `subjects` AS `sub` 
			LEFT JOIN `assign_subject` AS `ass` ON ass.`subject_id`=`sub`.`id`
			LEFT JOIN `faculty_details` AS `fd` ON `fd`.`id`=`ass`.`faculty_id` 
			LEFT JOIN `STREAM` AS `st` ON `st`.`id`=`ass`.`stream`
			WHERE `st`.`stream`='".$stream."' && `semester`='".$id."';";
			$row = MySql::fetchAllRows($sql);
			$faculty = array();
			while($result = $row['data']->fetch_assoc())
			{
				$temp = array(
					'faculty_id' => $result['faculty_id'],
					'faculty' => $result['name'],
					'subject_id' => $result['subject_id'],
					'subject_name' => $result['subject_name'],
					);
				array_push($faculty, $temp);
			}
			// print_r($faculty);ssss
			// exit();
			$arr = array(
					'success' => 1,
					'data'	  => $faculty,
					'message' => 'faculty and subject details',
					'code'    => '001'
					);

				
				return json_encode($arr);
		}
		else
		{
			$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}

	public function result($student_id,$faculty,$subject,$value,$ques_id)
	{
		if(!empty($student_id) && !empty($faculty) && !empty($subject) && !empty($value) && !empty($ques_id))
		{
			$dataarray = array(
				'student_id' => '\''.$student_id.'\'',
				'faculty_id' => '\''.$faculty.'\'',
				'subject_id' => '\''.$subject.'\'',
				'ques_id' => '\''.$ques_id.'\'',
				'score' => '\''.$value.'\'',
			);
			// print_r($dataarray);
			$row = MySql::InsertData('result_cal',$dataarray);
			// print_r($row);
			if($row['success']==1)
			{
				
				$arr = array(
					'success' => 1,
					'message' => 'Feedback successfull',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
						'success' => 0,
						'message' => 'something went wrong',
						'code'    => '002'
						);
	
					
					return json_encode($arr);
			}

		}
		else
		{
			$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}	

	public function chk($id)
	{
		if(!empty($id))
		{
			$data = array(
				  'student_id' => '\''.$id.'\'',
				    'time' => '\''.date("Y-m-d h:i:s").'\''
				);
				$row = MySql::InsertData('feedback_chk',$data);
				if($row['success']==1)
				{
					$arr = array(
						'success' => 1,
						'message' => 'success',
						'code'    => '002'
						);
		
					
					return json_encode($arr);
				}
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
		
	}

	public function login1($email,$password)
	{
		if(!empty($email)&&!empty($password))
		{
			$sql = "SELECT * FROM `faculty_details` WHERE `email`='".$email."' AND `password`='".$password."';";
			$row = MySql::fetchRow($sql);
			if($row['success']==1)
			{
				$arr = array(
					'success' => 1,
					'id'	=>	$row['data']['id'],
					'message' => 'LOGIN SUCCESS',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'EMAIL OR PASSWORD INCORRECT',
					'code'    => '001'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
		$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}

	
	public function profile1($id)
	{
		if(!empty($id))
		{
			$sql = "SELECT * FROM `faculty_details` WHERE `id`='".$id."';";
			$row = MySql::fetchRow($sql);
			if($row['success']==1)
			{
				$array = array(
					'name' 					=> $row['data']['name'],
					'email'					=> $row['data']['email'],
					'gender'				=>$row['data']['gender']
					);
				$arr = array(
					'success' => 1,
					'message' => 'user details',
					'data'	  => $array,
					'code'    => '002'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'no such user_id found',
					'code'    => '002'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
			$arr = array(
					'success' => 0,
					'message' => 'required data missing',
					'code'    => '002'
					);

				
				return json_encode($arr);
		}
	}
	public function teacher_results($id)
	{
		if(!empty($id))
		{
			$sql="select distinct `rc`.`subject_id`,`rc`.`student_id`, `sd`.`stream`,`sd`.`semester`,`sub`.`subject_name`
			from `result_cal` as `rc` 
			LEFT JOIN `student_details` as `sd` on `sd`.`id`=`rc`.`student_id`
			LEFT JOIN `subjects` as `sub` on `sub`.`id`=`rc`.`subject_id` WHERE `faculty_id`='".$id."';";
			$row = MySql::fetchAllRows($sql);
			$fresult = array();
			
			while($result=$row['data']->fetch_assoc())
			{
				$temp = array(
					'subject_id' =>$result['subject_id'],					
					'subject_name' =>$result['subject_name'],
					'stream' =>$result['stream'],
					'semester' =>$result['semester'],					
				);
				array_push($fresult,$temp);
			}
			$arr = array(
				'success' => 1,
				'data' => $fresult,
				'code'    => '002'
				);

			
			return json_encode($arr);
			
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}

	public function average($faculty_id,$subject_id,$ques_id,$stream)
	{
		if(!empty($faculty_id) && !empty($subject_id) && !empty($ques_id) && !empty($stream))
		{
			$sql = "SELECT score FROM `result_cal` as `rc`
			LEFT JOIN `assign_subject` AS `as` ON `as`.`subject_id`=`rc`.`subject_id`
			LEFT JOIN `STREAM` AS `st` ON `st`.`id`=`as`.`stream`
			WHERE `st`.`stream`='".$stream."' && `rc`.`faculty_id`='".$faculty_id."' && `rc`.`subject_id`='".$subject_id."' && `rc`.`ques_id`='".$ques_id."';";
			$count=0;
			$student=0;
			$row = MySql::fetchAllRows($sql);
			while($result = $row['data']->fetch_assoc())
			{
				$count = $count + $result['score'];
				$student++;
			}
			
			
			if($row['success']==1)
			{
				$avg=$count/$student;
				$arr = array(
					'success' => 1,
					'average' => $avg,
					'total_students'=>$student,
					'code'    => '001'
					);
	
				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'Something went wrong',
					'code'    => '003'
					);
	
				
				return json_encode($arr);
			}
			
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}

	public function addfaculty($name,$email,$password,$gender)
	{
		if(!empty($name) && !empty($email)&&!empty($password)&&!empty($gender))
		{
			$sql= "SELECT * FROM `faculty_details` WHERE `name`='".$name."';";
			$row1= MySql::fetchRow($sql);
			if($row1['success']==1)
			{
				$arr = array(
					'success' => 0,
					'message' => 'faculty already exists',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			$dataarray=array(
				'name' =>'\''.$name.'\'',
				'email'=>'\''.$email.'\'',
				'password'=>'\''.$password.'\'',
				'gender'=>'\''.$gender.'\'',
				);
			$row = MySql::InsertData('faculty_details',$dataarray);
			if($row['success']==1)
			{
				$arr = array(
					'success' => 1,
					'message' => 'faculty added',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'signup failed',
					'code'    => '001'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}

	public function viewfac()
	{
		$sql = "SELECT * FROM `faculty_details`;";
		$row = MySql::fetchAllRows($sql);
		// print_r($row['data']->fetch_assoc());
		// exit();
		$faculty=array();
		while($result = $row['data']->fetch_assoc())
		{
			$data =array(
				'name' =>$result['name'],
				'id'=>$result['id'],
				'email'=>$result['email'],
			);
			array_push($faculty,$data);
		}
		
		if($row['success']==1)
		{
			$arr = array(
				'success' => 1,
				'data' => $faculty,
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'something went wrong',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}
	public function removef($id)
	{
		if(!empty($id))
		{
			$sql = "SELECT * FROM `faculty_details` WHERE `id`='".$id."'; ";
			$row = MySql::fetchRow($sql);
			if($row['success']!=1)
			{
				$arr = array(
					'success' => 0,
					'message' => 'No faculty found',
					'code'    => '001'
					);
	
				
				return json_encode($arr);
			}
			$condition = array(
				'id' => $id
				);
				$delete = MySql::deleteData('faculty_details',$condition);
				$conditions = array(
					'faculty_id' => $id
					);
				$delete1=MySql::deleteData('assign_subject',$conditions);
				// print_r($delete);
				// exit();
				if($delete['success']==1)
				{
					$arr = array(
						'success' => 1,
						'message' => 'Faculty deleted',
						'code'    => '000'
						);
		
					
					return json_encode($arr);
				}
				else
				{
					$arr = array(
						'success' => 0,
						'message' => 'No faculty found',
						'code'    => '001'
						);
		
					
					return json_encode($arr);
				}
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}

	public function viewsub()
	{
		$sql = "SELECT * FROM `subjects`;";
		$row = MySql::fetchAllRows($sql);
		// print_r($row['data']->fetch_assoc());
		// exit();
		$subject=array();
		while($result = $row['data']->fetch_assoc())
		{
			$data =array(
				'name' =>$result['subject_name'],
				'id'=>$result['id'],
				'code'=>$result['subject_code'],
				'sem'=>$result['semester']
			);
			array_push($subject,$data);
		}
		
		if($row['success']==1)
		{
			$arr = array(
				'success' => 1,
				'data' => $subject,
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'something went wrong',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}
	public function removes($id)
	{
		if(!empty($id))
		{
			$sql = "SELECT * FROM `subjects` WHERE `id`='".$id."'; ";
			$row = MySql::fetchRow($sql);
			if($row['success']!=1)
			{
				$arr = array(
					'success' => 0,
					'message' => 'No faculty found',
					'code'    => '001'
					);
	
				
				return json_encode($arr);
			}
			$condition = array(
				'id' => $id
				);
				$delete = MySql::deleteData('subjects',$condition);
				// print_r($delete);
				// exit();
				$conditions = array(
					'subject_id' => $id
					);
				$delete1=MySql::deleteData('assign_subject',$conditions);
				if($delete['success']==1)
				{
					$arr = array(
						'success' => 1,
						'message' => 'Faculty deleted',
						'code'    => '000'
						);
		
					
					return json_encode($arr);
				}
				else
				{
					$arr = array(
						'success' => 0,
						'message' => 'No faculty found',
						'code'    => '001'
						);
		
					
					return json_encode($arr);
				}
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}

	public function addsub($name,$code,$sem)
	{
		if(!empty($name) && !empty($code)&&!empty($sem))
		{
			$sql= "SELECT * FROM `subjects` WHERE `subject_name`='".$name."';";
			$row1= MySql::fetchRow($sql);
			if($row1['success']==1)
			{
				$arr = array(
					'success' => 0,
					'message' => 'faculty already exists',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			$dataarray=array(
				'subject_name' =>'\''.$name.'\'',
				'subject_code'=>'\''.$code.'\'',
				'semester'=>'\''.$sem.'\'',
				);
			$row = MySql::InsertData('subjects',$dataarray);
			if($row['success']==1)
			{
				$arr = array(
					'success' => 1,
					'message' => 'subject added',
					'code'    => '000'
					);

				
				return json_encode($arr);
			}
			else
			{
				$arr = array(
					'success' => 0,
					'message' => 'failed to upload',
					'code'    => '001'
					);

				
				return json_encode($arr);
			}
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}

	public function assign($sub_id,$faculty_id,$stream,$sem)
	{
		$sql = "SELECT * FROM `subjects` WHERE `id`='".$sub_id."' AND `semester`='".$sem."';";
		$row = MySql::fetchRow($sql);
		if($row['success']!=1)
		{
			$arr = array(
				'success' => 0,
				'message' => 'Please check the semester in which you want to assign the subject',
				'code'    => '001'
				);

			
			return json_encode($arr);
		}
		$sql1 = "SELECT * FROM `assign_subject` WHERE `subject_id`='".$sub_id."' AND `stream`='".$stream."';";
		// print_r($sql1);
		// exit();
		$row1 = MySql::fetchRow($sql1);
		if($row1['success']==1)
		{
			$arr = array(
				'success' => 0,
				'message' => 'Subject Already Assigned to this branch',
				'code'    => '001'
				);

			
			return json_encode($arr);
		}
		
		$dataarray=array(
			'subject_id' =>'\''.$sub_id.'\'',
			'faculty_id'=>'\''.$faculty_id.'\'',
			'stream'=>'\''.$stream.'\'',
			);
		$row2 = MySql::InsertData('assign_subject',$dataarray);
		// print_r($row2);
		// print_r($dataarray);
		
		// exit();
		if($row2['success']==1)
		{
			$arr = array(
				'success' => 1,
				'message' => 'success',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'Please check the again',
				'code'    => '003'
				);

			
			return json_encode($arr);
		}
	}

	public function assignview()
	{
		$sql="SELECT `as`.`id`,`sub`.`subject_name`,`sub`.`semester`,`sub`.`subject_code`,`fd`.`name`,`stream`.`stream`
		FROM `assign_subject` AS `as`
		LEFT JOIN `subjects` AS `sub`
		ON `sub`.`id`=`as`.`subject_id`
		LEFT JOIN `faculty_details` AS `fd`
		ON `fd`.`id`=`as`.`faculty_id`
		LEFT JOIN `STREAM` AS `stream`
		ON `stream`.`id`=`as`.`stream`;";
		$row = MySql::fetchAllRows($sql);
		$asubject=array();
		while($result = $row['data']->fetch_assoc())
		{
			$data =array(
				'id'=>$result['id'],
				'name' =>$result['subject_name'],
				'code'=>$result['subject_code'],
				'sem'=>$result['semester'],
				'faculty'=>$result['name'],
				'stream'=>$result['stream'],

			);
			array_push($asubject,$data);
		}
		
		if($row['success']==1)
		{
			$arr = array(
				'success' => 1,
				'data' => $asubject,
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'something went wrong',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}

	public function unassign($id)
	{
		if(!empty($id))
		{
			$sql = "SELECT * FROM `assign_subject` WHERE `id`='".$id."'; ";
			$row = MySql::fetchRow($sql);
			if($row['success']!=1)
			{
				$arr = array(
					'success' => 0,
					'message' => 'No Subject found',
					'code'    => '001'
					);
	
				
				return json_encode($arr);
			}
			$condition = array(
				'id' => $id
				);
				$delete = MySql::deleteData('assign_subject',$condition);
				// print_r($delete);
				// exit();
				
				if($delete['success']==1)
				{
					$arr = array(
						'success' => 1,
						'message' => 'Faculty deleted',
						'code'    => '000'
						);
		
					
					return json_encode($arr);
				}
				else
				{
					$arr = array(
						'success' => 0,
						'message' => 'No faculty found',
						'code'    => '001'
						);
		
					
					return json_encode($arr);
				}
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'required data missing',
				'code'    => '002'
				);

			
			return json_encode($arr);
		}
	}
	public function viewstudent($stream,$sem)
	{
		$sql = "SELECT * FROM `student_details` WHERE `semester`='".$sem."' AND `stream`='".$stream."';";
		$row = MySql::fetchAllRows($sql);
		$student= array();
		while($result = $row['data']->fetch_assoc())
		{
			$temp=array(
				'id'=>$result['id'],
				'name'=>$result['name'],
				'email'=>$result['email'],
				'registration_id'=>$result['registration_id'],
				'admission_year'=>$result['admission_year'],
			);
			array_push($student,$temp);
		}
		if($row['success']==1)
		{
			$arr = array(
				'success' => 1,
				'data' => $student,
				'code'    => '000'
				);

			
			return json_encode($arr);
		}
		else
		{
			$arr = array(
				'success' => 0,
				'message' => 'No student found',
				'code'    => '001'
				);

			
			return json_encode($arr);
		}
	}
}
?>