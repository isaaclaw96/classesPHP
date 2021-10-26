<html>
    <body>
        <form action="firstclass.php" method="post">
            <input type="text" name="name" placeholder="Enter Name">
            <br>
            <input type="text" name="dob" placeholder="Enter Year of Birth">
            <br>
            <input type="text" name="hobby" placeholder="Enter Hobby">
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    
<?php

class People{

    //Properties
        public $name;
        public $dob;
        public $hobby;
        public $age;

    //Methods
        function set_name($name){
            $this->name = $name;
        }
        
        function set_age($age){
            // $dateAge = date($age);
            $curDate = date('Y');
            $newAge = $curDate - $age;
            $this->age = $newAge;
        }
        function set_hobby($hobby){
            $this->hobby = $hobby;
        }

        function get_name(){
            return $this->name;
        }
        
        function get_age(){
            return $this->age;
        }
        
        function get_hobby(){
            return $this->hobby;
        }

}

if(isset($_POST['submit'])){
    $newName = $_POST['name'];
    $newDOB = $_POST['dob'];
    $newHobby = $_POST['hobby'];
}

//Setting new Object with new keyword
// use __construct() to make it into one 
$newObject = new People();
$newObject->set_name($newName);
$newObject->set_age($newDOB);
$newObject->set_hobby($newHobby);

echo "My name is ".$newObject ->get_name();
echo "<br>";
echo "I am ".$newObject->get_age()." years old";
echo "<br>";
echo "I like to ".$newObject->get_hobby();

?>

    </body>
</html>