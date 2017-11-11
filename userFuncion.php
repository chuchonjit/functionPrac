< php 

class User {
function db_query($query){
$db_host = 'sql1.njit.edu'; // Server Name
$db_user = 'jda29'; // Username
$db_pass = 'r4mZlygN'; // Password
$db_name = 'jda29'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

}

function InsertInTable($table,&$fields){
    $col = "insert into $table (`".implode("` , `",array_keys($fields))."`)";
    $val = " values('";     
    foreach($fields as $key => $value) { 
        $fields[$key] = mysqli_escape_string($value);
    }
    $val .= implode("' , '",array_values($fields))."');";       
    $fields = array();
    return;
}


function UpdateTable($table,&$fields,$condition) {

    $sql = "update $table set ";
    foreach($fields as $key => $value) { 
        $fields[$key] = " `$key` = '".mysqli_escape_string($value)."' ";
    }
    $sql .= implode(" , ",array_values($fields))." where ".$condition.";";  
    $fields = array();
}

function DeleteRecord($query){
    $result = mysqli_query ($query)
    return true;    
}

}
?>