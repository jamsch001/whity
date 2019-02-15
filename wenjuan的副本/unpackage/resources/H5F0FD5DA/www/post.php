

 Welcome <?php echo $_POST["fname"]; ?>!<br>
 You are <?php echo $_POST["age"]; ?> years old.
 <?php 
 $n1=$_POST["fname"];
 $a1=$_POST["age"];
 $g1=$_POST["gender"];
 $q1=$_POST["q01"];
 $q2=$_POST["q02"]+$q1;
 $q3=$_POST["q03"]+$q2;
 $q4=$_POST["q04"]+$q3;
 $q5=$_POST["q05"]+$q4;
 $q6=$_POST["q06"]+$q5;
 $q7=$_POST["q07"]+$q6;
 $q8=$_POST["q08"]+$q7;
 $q9=$_POST["q09"]+$q8;
 $q10=$_POST["q10"]+$q9;
 $q11=$_POST["q11"]+$q10;
 $q12=$_POST["q12"]+$q11;
 $q13=$_POST["q13"]+$q12;
 $q14=$_POST["q14"]+$q13;
 $q15=$_POST["q15"]+$q14;
 echo "you get $q15 point";
 
 
/*$servername = "localhost";
$username = "root";
$password = "nogameno1ife";
$dbname = "wenjuan";

$conn = new mysqli($servername, $username, $dbname);

if ($conn->connect_error) {
	die("连接挂了" . $conn->connect_error);
}

$sql = "INSERT INTO wenjuan (fname, age, gender, mark) 
VALUES ($n1, $a1, $g1, $q15)"; 

if ($conn->query($sql) === TRUE) { 
    echo "into the brians"; 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
} 

$conn->close(); 
 */?>
 
 
 
 

