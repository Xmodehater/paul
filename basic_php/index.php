
<?php 

    echo "Basic PHP";
    echo"<br>";
    echo "<br>";
   
    // It is all About me !

    $firstname = 'Firstname: Paul'."<br>";
    $Lastname  = 'Lastname: Maming'."<br>";
    $age       = 'Age: 23'."<br>";
    $gender    = 'Gender: Male'."<br>";
    $Status    = 'Status: Single'."<br>";
    $Address   = 'Address: Marinduque'."<br>";
    

    $ABC = 800;
    $XYZ = 700;
    $today = date("M");
    $num1=600;
    $num2=700;
    /////////
    echo "Personal Information";
    echo "<br>";
    $Information = $firstname . ' '. $Lastname .' '. $age . ' '. $gender. ' '. $Status.' '. $Address;
    echo"<br>";
    $Information;
    echo '' .$Information;;
    // My Favorite Color and brand of T-Shirt using Array
    echo"<br>";
    echo" The one of my favorite brand and color of t-shirt.";
    echo"<br>";
    echo"<br>";
    $Color= Array("black","white","blue","red");
    echo "Tribal :" . $Color[0];   

    //Computation of numbers usig floating type

    echo"<br>";
    echo"<br>";
    echo"Weekly Salary being a construction worker.";
    echo"<br>";
    echo"<br>"; 
    $weeklypayment = 350;
    $dayofwork = 6;
    $Salary = $weeklypayment * $dayofwork ;
    echo "Salary in a Week :" .$Salary;
    echo "<br>";
    echo "Work Hard Pay Later.";
    // function automatically call this function when you create an object from a class.
    echo"<br>";
    echo"<I want to build my own Company.>";
    echo"<br>";

    class salary {
        public $Company = "XYZ COMPANY";
    
        public $Tax = 0.32;
        private $Basic_pay = 600.00;
    // 
    public function show_tax(){
        return $this->Basic_pay * $this->Tax;

        }
    }
    $salary = new salary;
    echo " Tax : " . $salary->Company;
    echo "<br>";
    echo " My tax : " . $salary->show_tax();
    // conditional statement us of the switch case or if else   
    echo"<br>";
    echo"<br>";
    echo"Comparison of the salary.";
    echo"<br>";
    echo"<br>";
    if($ABC > $XYZ){
    echo $ABC. " is greater than ". $XYZ ;
    }
    elseif($ABC > $XYZ) {
    echo $ABC." is greater than ". $XYZ ;
    } 
    else {
        echo"<br>";
        echo "Maybe they are Equal";
    }

    echo"<br>";
    echo"<br>";
    echo"The month today :".$today ;
    echo"<br>";
    echo"<br>";
    switch ($today){
        case "jan";
    echo "The month today is January";
        break;
        case "Feb";
    echo "The month today is Febraury";
        break;
        case "Mar";
    echo"The month today is March";
        break;
        case "Apr";
    echo"The month today is April";
        break;
        case "May";
    echo"The month today is May";
        break;
        case "Jun";
    echo"The month today is June";
        break;
        case "Jul";
    echo"The month today is July";
        break;
        case "Aug";
    echo"The month today is August";
        break;
        case "Sep";
    echo"The month today is September";
        break;
        case "Oct";
    echo"The month today is October";
        break;
        case "Nov";
    echo"The month today is November";
        break;
        case "Dec";
    echo"The month today is December";
        break;
    echo "No information avialable for the date";
        break;
    }
    echo "<br>";
    echo "<br>";
    echo "Ternary Operation";
    echo "<br>";
    echo "<br>";
    

    echo($num1 > $num2) ? $num ." is greater than " : $num2 ." is greater than ".$num1;


//Control Flow (Loops)
echo "<br>";
echo "<br>";
echo "Loops";
echo "<br>";

echo "<br>";
echo "While loop";
echo "<br>";
echo "<br>";

$input = 1;

while($input <=5){
    $input ++ ;
    echo "The number input is ".$input . "<br>";
}
echo "<br>";
echo "While loop";
echo "<br>";
echo "<br>";
$input2 = 2;
do{
    $input2++;
    echo "The number input is ". $input2 . "<br>";
}
while($input2 <=5);

echo "<br>";
echo "For loop";
echo "<br>";
echo "<br>";
for($input =1 ;$input <= 5; $input++){
    echo "The number input is ".$input . "<br>";    
}
echo "<br>";
echo "For each loop";
echo "<br>";
echo "<br>";
 
$regions = array("gasan","boac","mogpog");

foreach($regions as $region){
    if($region = "gasenio"){
        echo "ay mandin ". "<br>"; ;
    }
    elseif($region = "gasan"){
        echo "mandin". "<br>"; ;
    }
    echo $region . "<br>"; 
}
    ?>

    
    