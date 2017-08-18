<?php
	/**
	*  CourseOffer CRUD
	*/
	require_once($_SERVER['DOCUMENT_ROOT'].'/se/includes/connect.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/se/includes/session.php');
	
	class DALCourseOffer
	{
		
		function __construct()
		{

			
		}

		public function get()
		{
			global $con;
			$sql = "SELECT * FROM offeredcourse WHERE 1 ORDER BY id ASC";
			$result = mysqli_query($con,$sql);

			return $result;
		}
		public function getById($id)
		{
			global $con;
			$sql = "SELECT * FROM  offeredcourse WHERE id=".$id;
			$result = mysqli_query($con,$sql);

			return $result;
		}


		public function insert($name)
		{
			global $con;
			$sql = "INSERT INTO varsity VALUES('','$name')";
			$result = mysqli_query($con,$sql);
			if($result)
			{
				return true;
			}
			else
			{
				//debug_backtrace();
				return false;
			}
		}
		public function insertMultiple($offered_term_id,$courses)
		{
			global $con;
			$count = count($courses);

			$sql = "INSERT INTO offeredcourse VALUES ";
			for($i=0;$i<$count-1;$i++)
			{
				$sql .= " (' ',".$offered_term_id.",".$courses[$i]."), ";
			}
			// For the last value no comma(,) 
			$sql .= " (' ',".$offered_term_id.",".$courses[$count-1].") ";

			$result = mysqli_query($con,$sql);
			if($result)
			{
				return true;
			}
			else
			{	
				//echo $sql;
				//echo mysqli_error($con);
				return false;
			}

		}

		public function update($id,$name)
		{
			global $con;
			$sql = "UPDATE varsity SET name = '$name' WHERE id=$id";
			$result = mysqli_query($con,$sql);
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function delete($id)
		{
			global $con;
			$sql = "DELETE FROM varsity WHERE id = $id";
			$result = mysqli_query($con,$sql);
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}


?>