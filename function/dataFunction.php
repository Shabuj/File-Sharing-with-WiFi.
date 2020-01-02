<?php 
include "lib/Database.php";
include "helpers/helper.php";
?>

<?php
  
  class dataFunction{
  private $db;
 	private $sql_injection;

 public function __construct()
 	{
 	   $this->db = new Database();
 	   $this->sql_injection = new sql_injection();

 	}
  public function getStudentData(){
       if (isset($_GET['session']) && $_GET['session'] == "2014-15"){
        	 $query = "SELECT * 
             FROM student_list
             WHERE session_year = '2014-15'";
            
             $result = $this->db->select($query);
             return $result; 	
        }
       if (isset($_GET['session']) && $_GET['session'] == "2015-16"){
        	 $query = "SELECT * 
             FROM student_list
             WHERE session_year = '2015-16'";
            
             $result = $this->db->select($query);
             return $result; 	
        }
       if (isset($_GET['session']) && $_GET['session'] == "2016-17"){
        	 $query = "SELECT * 
             FROM student_list
             WHERE session_year = '2016-17'";
            
             $result = $this->db->select($query);
             return $result; 	
        }
    }
  public function getResult(){
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 1st semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '1st'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 2nd semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '2nd'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 3rd semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '3rd'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 4th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '4th'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 5th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '5th'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 6th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '6th'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 7th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '7th'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2014-15 8th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '8th'";
            $result = $this->db->select($query);
            return $result;
      }




       if (isset($_GET['session']) && $_GET['session'] == "2015-16 1st semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '1st' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2015-16 2nd semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '2nd' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2015-16 3rd semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '3rd' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2015-16 4th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '4th' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2015-16 5th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '5th' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2015-16 6th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '6th' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2015-16 7th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '7th' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2015-16 8th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '8th' AND session_year = '2015-16'";
            $result = $this->db->select($query);
            return $result;
      }

      if (isset($_GET['session']) && $_GET['session'] == "2016-17 1st semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '1st' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2016-17 2nd semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '2nd' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2016-17 3rd semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '3rd' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2016-17 4th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '4th' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2016-17 5th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '5th' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2016-17 6th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '6th' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2016-17 7th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '7th' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }
      if (isset($_GET['session']) && $_GET['session'] == "2016-17 8th semester"){
         $query = "SELECT * 
                   FROM total_result
                   WHERE semester = '8th' AND session_year = '2016-17'";
            $result = $this->db->select($query);
            return $result;
      }

  }

    
  }
?>
