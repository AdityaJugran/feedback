<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


require_once 'action.php';
class controller
{
	public function login($request,$response,$args)
	{
		$email = $request->getAttribute('email');
		$password = $request->getAttribute('password');

		$api = action::login($email,$password);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
    }

    public function profile($request,$response,$args)
	{
		$id = $request->getAttribute('id');

		$api = action::profile($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
    }

    public function signup($request,$response,$args)
	{
		$name = $request->getAttribute('name');
		$email = $request->getAttribute('email');
		$phone = $request->getAttribute('phone');
		$password = $request->getAttribute('password');
		$yoa = $request->getAttribute('yoa');
		$late = $request->getAttribute('late');
		$sem = $request->getAttribute('sem');
		$reg_id = $request->getAttribute('reg_id');
		$college_id = $request->getAttribute('college_id');
		$roll_no = $request->getAttribute('roll_no');
		$stream = $request->getAttribute('stream');
		$gender = $request->getAttribute('gender');

		$api = action::signup($name,$email,$phone,$password,$yoa,$late,$sem,$reg_id,$college_id,$roll_no,$stream,$gender);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
    }

     public function feedback($request,$response,$args)
	{
		$id = $request->getAttribute('id');

		$api = action::feedback($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
    }

    public function fbdrow($request,$response,$args)
	{
		$id = $request->getAttribute('sem');
		$stream = $request->getAttribute('stream');
		
		$api = action::fbdrow($id,$stream);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
	
	public function result($request,$response,$args)
	{
		$student_id = $request->getAttribute('student_id');
		$faculty = $request->getAttribute('faculty');
		$subject = $request->getAttribute('subject');
		$value = $request->getAttribute('value');
		$ques_id = $request->getAttribute('ques_id');
		
		$api = action::result($student_id,$faculty,$subject,$value,$ques_id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
	
    public function chk($request,$response,$args)
	{
		$id = $request->getAttribute('student_id');

		$api = action::chk($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function login1($request,$response,$args)
	{
		$email = $request->getAttribute('email');
		$password = $request->getAttribute('password');

		$api = action::login1($email,$password);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
    }
	
	public function profile1($request,$response,$args)
	{
		$id = $request->getAttribute('id');

		$api = action::profile1($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
	
	public function teacher_results($request,$response,$args)
	{
		$id = $request->getAttribute('id');

		$api = action::teacher_results($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
	
	public function average($request,$response,$args)
	{
		$faculty_id = $request->getAttribute('faculty_id');
		$subject_id = $request->getAttribute('subject_id');
		$ques_id = $request->getAttribute('ques_id');
		$stream = $request->getAttribute('stream');
		

		$api = action::average($faculty_id,$subject_id,$ques_id,$stream);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
	
	public function addfaculty($request,$response,$args)
	{
		$name = urldecode($request->getAttribute('name'));
		$email = $request->getAttribute('email');
		$password = $request->getAttribute('password');
		$gender = $request->getAttribute('gender');
		
		
		$api = action::addfaculty($name,$email,$password,$gender);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function viewfac($request,$response,$args)
	{
		
		
		$api = action::viewfac();

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function removef($request,$response,$args)
	{
		
		$id = $request->getAttribute('id');
		
		$api = action::removef($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
	public function viewsub($request,$response,$args)
	{
		
		
		$api = action::viewsub();

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function removes($request,$response,$args)
	{
		
		$id = $request->getAttribute('id');
		
		$api = action::removes($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
	
	public function addsub($request,$response,$args)
	{
		$name = urldecode($request->getAttribute('name'));
		$code = $request->getAttribute('code');
		$sem = $request->getAttribute('sem');
		
		
		
		$api = action::addsub($name,$code,$sem);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function asign($request,$response,$args)
	{
		$sub_id = $request->getAttribute('sub_id');
		$faculty_id = $request->getAttribute('faculty_id');
		$stream = $request->getAttribute('stream');
		$sem = $request->getAttribute('sem');
		
		
		$api = action::assign($sub_id,$faculty_id,$stream,$sem);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function assignview($request,$response,$args)
	{
		
		
		$api = action::assignview();

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function unassign($request,$response,$args)
	{
		
		$id = $request->getAttribute('id');
		
		$api = action::unassign($id);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}

	public function viewstudent($request,$response,$args)
	{
		
		$stream = $request->getAttribute('stream');
		$sem = $request->getAttribute('sem');
		
		
		$api = action::viewstudent($stream,$sem);

		return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write("$api");	
	}
}
?>