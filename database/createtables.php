<?php

$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
function clearTable($dbo,$tabName)
{
    $c="delete from :tabname";
    $s=$dbo->conn->prepare($c);
    try{
    $s->execute([":tabname"=>$tabName]);
    }
    catch(PDOException $oo)
    {

    }
}
$dbo=new Database();
$c="create table student_details
(
    id int auto_increment primary key,
    roll_no varchar(20) unique,
    name varchar(50)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>student_details created");
}
catch(PDOException $o)
{
echo("<br>student_details not created");
}

$c="create table course_details
(
    id int auto_increment primary key,
    code varchar(20) unique,
    title varchar(50),
    credit int
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_details created");
}
catch(PDOException $o)
{
echo("<br>course_details not created");
}


$c="create table faculty_details
(
    id int auto_increment primary key,
    user_name varchar(20) unique,
    name varchar(100),
    password varchar(50)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>faculty_details created");
}
catch(PDOException $o)
{
echo("<br>faculty_details not created");
}


$c="create table session_details
(
    id int auto_increment primary key,
    year int,
    term varchar(50),
    unique (year,term)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>session_details created");
}
catch(PDOException $o)
{
echo("<br>session_details not created");
}



$c="create table course_registration
(
    student_id int,
    course_id int,
    session_id int,
    primary key (student_id,course_id,session_id)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_registration created");
}
catch(PDOException $o)
{
echo("<br>course_registration not created");
}

$c="create table course_allotment
(
    faculty_id int,
    course_id int,
    session_id int,
    primary key (faculty_id,course_id,session_id)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_allotment created");
}
catch(PDOException $o)
{
echo("<br>course_allotment not created");
}

$c="create table attendance_details
(
    faculty_id int,
    course_id int,
    session_id int,
    student_id int,
    on_date date,
    status varchar(10),
    primary key (faculty_id,course_id,session_id,student_id,on_date)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>attendance_details created");
}
catch(PDOException $o)
{
echo("<br>attendance_details not created");
}

$c="insert into student_details
(id,roll_no,name)
values
(1, '12212001', 'JYOTI KUMARI MEENA'),
(2, '12212002', 'PRACHI YADAV'),
(3, '12212003', 'POONAM'),
(4, '12212004', 'SHOBITA BHARDWAJ'),
(5, '12212005', 'MEENA'),
(6, '12212006', 'ARYAN PAREEK'),
(7, '12212007', 'HARSHIT THAKUR'),
(8, '12212008', 'SUSHANT AHUJA'),
(9, '12212009', 'AYUSH BAIDYA'),
(10, '12212010', 'ATHARVA PARWAL'),
(11, '12212011', 'PRIKSHIT'),
(12, '12212012', 'SWASTIK BHOWMICK'),
(13, '12212013', 'NIKHIL SHARMA'),
(14, '12212014', 'PIYUSH GUPTA'),
(15, '12212015', 'PULUGU JOSHANTH SAI'),
(16, '12212016', 'HITESH'),
(17, '12212017', 'ABHISHEK KUMAR'),
(18, '12212018', 'KHALID AHMAD RAZA'),
(19, '12212019', 'LOKESH'),
(20, '12212020', 'RAVI SHANKAR YADAV'),
(21, '12212021', 'RAUSHAN RAJ'),
(22, '12222002', 'AARJU SAH'),
(23, '12212022', 'BHUMIKA MISHRA'),
(24, '12212023', 'JYOTI'),
(25, '12212024', 'ANJALI'),
(26, '12212025', 'GUNJAN JAISWAL'),
(27, '12212026', 'NITIN YADAV'),
(28, '12212027', 'SATVIK'),
(29, '12212028', 'MOKSH'),
(30, '12212029', 'DIVYANSH PANKHOLI'),
(31, '12212030', 'AYUSH KUMAR'),
(32, '12212031', 'NAMAN NEGI'),
(33, '12212032', 'MD ZISHAN ALAM'),
(34, '12212033', 'ARIHANT JAIN'),
(35, '12212034', 'UTSAV SAINI'),
(36, '12212035', 'LOLATENDU CHIRANJIBI NAYAK'),
(37, '12212036', 'SARTHAK VATSA'),
(38, '12212037', 'UTKARSH SWAROOP SHRIVASTAVA'),
(39, '12212038', 'AMAN'),
(40, '12212039', 'NIHAL RAWAT'),
(41, '12212040', 'PRANSHUL PAHWA'),
(42, '12212041', 'ARJIT'),
(43, '12222007', 'MANYA DOGRA'),
(44, '12212042', 'HARNOOR KAUR SAINI'),
(45, '12212043', 'KAMNA RAIKWAL'),
(46, '12212044', 'VANSHIKA KAUSHIK'),
(47, '12212045', 'PALAK'),
(48, '12212046', 'GAURAV'),
(49, '12212047', 'YOGESH'),
(50, '12212048', 'ANSH MISHRA'),
(51, '12212049', 'DIVYANSHU TUNGRIYA'),
(52, '12212050', 'UTTAM'),
(53, '12212051', 'HIMANSHU GOSWAMI'),
(54, '12212052', 'MADHAV VISHIST'),
(55, '12212053', 'HARSH KISHOR'),
(56, '12212054', 'AMAN VERMA'),
(57, '12212055', 'KRISHNA VAMSHI GALETI'),
(58, '12212056', 'LAKSHAY DAHIYA'),
(59, '12212057', 'ARPIT YADAV'),
(60, '12212058', 'SUMIT KUMAR'),
(61, '12212059', 'KATHANSH JAIN'),
(62, '12212061', 'PRASHAN JEET KUMAR'),
(63, '12222008', 'ALAN K. C.'),
(64, '12212062', 'MUSKAN'),
(65, '12212063', 'CHHAVI KUMARI MEENA'),
(66, '12212064', 'KHUSHBU YADAV'),
(67, '12212065', 'MUSKAN'),
(68, '12212066', 'PRINCE KATARIA'),
(69, '12212067', 'ARYAWART KATHPAL'),
(70, '12212068', 'ANKUR SONI'),
(71, '12212070', 'DEBATREYA DAS'),
(72, '12212071', 'RABINDRA SINGH MEHRA'),
(73, '12212072', 'RITESH KUMAR'),
(74, '12212073', 'ABHISHEK MALIK'),
(75, '12212074', 'UMESH KUMAR JANGIR'),
(76, '12212075', 'ANSH VARSHNEY'),
(77, '12212076', 'SIDDHANTH MANISH SRIVASTAVA'),
(78, '12212077', 'MAYANK SHEKHAWAT'),
(79, '12212078', 'VISHAL KAUSHAL'),
(80, '12212079', 'AVENDER SHARMA'),
(81, '12212080', 'JITESH GUPTA'),
(82, '12212081', 'JITENDER KUMAR')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into faculty_details
(id,user_name,password,name)
values
    (1,'shwetasharma@nitkkr.ac.in','12345','Shweta Sharma'),
    (2,'akp@nitkkr.ac.in','21342','A.K. Patel'),
    (3,'mkmurmu@nitkkr.ac.in','12321','M.K. Murmu'),
    (4,'ritu.59@nitkkr.ac.in','12563','Ritu Garg'),
    (5,'skj.nith@gmail.com','12426','Sanjay Jain')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into session_details
(id,year,term)
values
(1,2024,'Odd Semester'),
(2,2024,'Even Semester')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into course_details
(id,title,code,credit)
values
(1,'Scripting Language','CSPC214',4),
(2,'Artificial Intelligence and Soft Computing','CSPC204',4),
(3,'Computer Networks','CSPC202',4),
(4,'Operating System','CSPC200',4),
(5,'Database Management System','CSPC206',4)";
  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }

  //if any record already there in the table delete them
  clearTable($dbo,"course_registration");
  $c="insert into course_registration
  (student_id,course_id,session_id)
  values
  (:sid,:cid,:sessid)";
  $s=$dbo->conn->prepare($c);
  //iterate over all the 24 students
  //for each of them chose max 3 random courses, from 1 to 6

  // for($i=1;$i<=82;$i++)
  // {
  //   for($j=0;$j<3;$j++)
  //   {
  //       $cid=rand(1,5);
  //       //insert the selected course into course_registration table for 
  //       //session 1 and student_id $i
  //       try{
  //          $s->execute([":sid"=>$i,":cid"=>$cid,":sessid"=>1]); 
  //       }
  //       catch(PDOException $pe)
  //       {

  //       }

  //       //repeat for session 2
  //       $cid=rand(1,5);
  //       //insert the selected course into course_registration table for 
  //       //session 2 and student_id $i
  //       try{
  //          $s->execute([":sid"=>$i,":cid"=>$cid,":sessid"=>2]); 
  //       }
  //       catch(PDOException $pe)
  //       {

  //       }
  //   }
  // }


  // //if any record already there in the table delete them
  // clearTable($dbo,"course_allotment");
  // $c="insert into course_allotment
  // (faculty_id,course_id,session_id)
  // values
  // (:fid,:cid,:sessid)";
  // $s=$dbo->conn->prepare($c);
  // //iterate over all the 6 teachers
  // //for each of them chose max 2 random courses, from 1 to 6

  // for($i=1;$i<=6;$i++)
  // {
  //   for($j=0;$j<2;$j++)
  //   {
  //       $cid=rand(1,6);
  //       //insert the selected course into course_allotment table for 
  //       //session 1 and fac_id $i
  //       try{
  //          $s->execute([":fid"=>$i,":cid"=>$cid,":sessid"=>1]); 
  //       }
  //       catch(PDOException $pe)
  //       {

  //       }

  //       //repeat for session 2
  //       $cid=rand(1,6);
  //       //insert the selected course into course_allotment table for 
  //       //session 2 and student_id $i
  //       try{
  //          $s->execute([":fid"=>$i,":cid"=>$cid,":sessid"=>2]); 
  //       }
  //       catch(PDOException $pe)
  //       {

  //       }
  //   }
  // }
  $sessionId = 2; // Assuming you want to register for semester with id 2 (change if needed)

$courseIdArr = [1, 2, 3, 4, 5]; // Array containing course IDs

$studentIdSql = "SELECT id FROM student_details";
$studentIds = [];
try {
  $s = $dbo->conn->prepare($studentIdSql);
  $s->execute();
  $studentIds = $s->fetchAll(PDO::FETCH_COLUMN);
} catch(PDOException $o) {
  echo "<br>Error fetching student IDs: " . $o->getMessage();
}

$values = "";
foreach ($studentIds as $studentId) {
  foreach ($courseIdArr as $courseId) {
    $values .= "($studentId, $courseId, $sessionId),";
  }
}

$values = rtrim($values, ","); // Remove trailing comma

$c = "INSERT INTO course_registration (student_id, course_id, session_id) VALUES $values";

try {
  $s = $dbo->conn->prepare($c);
  $s->execute();
  echo "<br>Courses allotted to all students successfully.";
} catch(PDOException $o) {
  echo "<br>Error allotting courses: " . $o->getMessage();
}

$facultyIdCourseIdMap = [
  1 => [1], // Faculty 1 teaches course 1
  2 => [2], // Faculty 2 teaches course 2
  3 => [3], // Faculty 3 teaches course 3
  4 => [4], // Faculty 4 teaches course 4
  5 => [5], // Faculty 5 teaches course 5
];

$sessionId = 2; // Assuming semester ID 2 (change if needed)

$values = "";
foreach ($facultyIdCourseIdMap as $facultyId => $courseIds) {
  foreach ($courseIds as $courseId) {
    $values .= "($facultyId, $courseId, $sessionId),";
  }
}

$values = rtrim($values, ","); // Remove trailing comma

$c = "INSERT INTO course_allotment (faculty_id, course_id, session_id) VALUES $values";

try {
  $s = $dbo->conn->prepare($c);
  $s->execute();
  echo "<br>Subjects allotted to faculty members successfully.";
} catch(PDOException $o) {
  echo "<br>Error allotting subjects: " . $o->getMessage();
}