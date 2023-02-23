<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment Form</title>

    <!--links-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
    <header>
        <?php @include 'Header.php'; ?>
    </header>

<?php
$nameErr=$nic_noErr=$typeErr=$placeErr=$acknowledge_noErr=NULL;
$name=$nic_no=$type=$place=$acknowledge_no=$mobile_no=NULL;
$row=NULL;
$result=NULL;
$itemN=NULL;

$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr="*Please enter a name";
        $flag=false;

    }
    else{
        $name=test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameErr="*Only letters and white spaces allowed";
            $flag=false;
        }
    }

if(empty($_POST["nic_no"])){
    $nic_noErr="*Please enter a valid number";
    $flag=false;

}
else{
    $nic_no=test_input($_POST["nic_no"]);
   if(!preg_match('/^([0-9])*$/', $nic_no)){
        $nic_noErr="*Only numbers allowed";
       $flag=false;
    }
}

if(empty($_POST["type"])){
    $typeErr="*Please select a type";
    $flag=false;

}
else{
    $type=test_input($_POST["type"]);
}

if(empty($_POST["place"])){
    $placeErr="*Please select a place";
    $flag=false;

}
else{
    $placeErr=test_input($_POST["place"]);
}

if(empty($_POST["acknowledge_no"])){
    $acknowledge_noErr="*Please enter a number";
    $flag=false;

}
else{
    $acknowledge_no=test_input($_POST["acknowledge_no"]);
}
$mobile_no =$_POST['mobile_no'];
//$acknowledge_no=$_POST['acknowledge_no'];

}


//Submit form if validate successfully
if($flag){
    
    if(isset($_POST['submit'])){
    $sql="INSERT INTO appoinmentdetails(name,acknowledge_no,nic_no,mobile_no,type,place) 
    VALUES ('$name','$acknowledge_no','$nic_no','$mobile_no','$type','$place')";

    $conn=new mysqli("localhost","root","","passport");
    if ($conn->connect_error){
        die("connection falied error:" . $conn->connect_error);
    }
    if($conn->query($sql)===TRUE){
       
      
        $sql="SELECT * FROM `appoinmentdetails` WHERE `acknowledge_no` = $acknowledge_no ";
        if($result = mysqli_query($conn, $sql))
        {
        if(mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_array($result))
        {
           $itemN =  $row['id'];
         
       }
    }}
      
      
       //echo $itemN;
        class Stack {

            protected $stack;
            protected $limit;
            
            public function __construct($limit = 20) {
                // initialize the stack
                $this->stack = array();
                // stack can only contain this many items
                $this->limit = $limit;
            }
        
            public function push($item) {
                // trap for stack overflow
                if (count($this->stack) < $this->limit) {
                    // prepend item to the start of the array
                    array_unshift($this->stack, $item);
                } else {
                    throw new RunTimeException('Stack is full!'); 
                }
            }
            
            public function top() {
                return current($this->stack);
             }

    }
   
    $stack=new Stack();
    for($i=0; $i<strlen((string)$nic_no); $i++){
        $stack->push($nic_no[$i]);
    }
    //print_r ($stack);
    $NumDay=$stack->top();
    //echo $NumDay;
    if ($NumDay==0 || $NumDay==1){
       $day= "Monday";
    }
    else if($NumDay==2 || $NumDay==3) {
        $day= "Tuesday";
    }
    else if($NumDay==4 || $NumDay==5) {
        $day= "Wednesday";
    }
    else if($NumDay==6 || $NumDay==7) {
        $day= "Thursday";
    }
    else if($NumDay==8 || $NumDay==9) {
        $day= "Friday";
    }

    //echo $day;
   if(isset($_POST['submit'])){
        echo "<script type=\"text/javascript\">
        window.onload = function() {
          document.getElementById('fullPopup').style.display = 'flex';
        };
      </script>";
    }

   /* class Queue {
        private $queue;
        private $size;
        private $front;
        private $rear;
        
        public function __construct($size){
            $this->size = $size;
            $this->queue = array();
            $this->front = -1;
            $this->rear = -1;
        }
        
        public function enqueue($element) {
            if ($this->isfull())
                throw new Exception("Error: Queue is full");
            else if ($this->isempty()) {
                $this->front = $this->rear = 0;
            }
            else {
            $this->rear = ($this->rear + 1) % $this->size;
            }
            $this->queue[$this->rear] = $element;
        }
        
        public function isfull() {
            if ($this->front == (($this->rear+1) % $this->size))
                return true;
            return false;
        }
        
        public function isempty() {
            if ($this->front == -1 && $this->rear == -1) {
                return true;
            }
            return false;
        }
    }
    
    $queue = new Queue(20);
       
        if (isset($_POST['submit'])){
            $queue->enqueue($nic_no);
          
        }*/
      
   
}
}
}
function test_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    return $data;
}
?>

    
    <div class="form" >
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="form-appoinment" method="post" style="height:750px; padding-top:10px;">
            
            <div class="inputBox">
                <h2 style="text-align:center; font-size:35px; letter-spacing:4px; padding-bottom:20px">Application</h2>
                <div class="input">
                    <span>Applicant Name</span>
                    <input type="text" name="name" id="name" placeholder="Enter your name..." value="<?=$name;?>" >
                    <span class="error" style="font-size:13px; top:44%; right:40.5%; position:absolute;"  > <?php echo $nameErr;?></span>
                </div>

                <div class="input">
                    <span>Photo Acknowledgement No</span>
                    <input type="text" name="acknowledge_no" id="acknowledge_no" placeholder="Enter acknowledge number..." value="<?=$acknowledge_no;?>">
                    <span class="error" style="font-size:13px; top:60.5%; right:38%; position:absolute;"> <?php echo $acknowledge_noErr;?></span>
                </div>

                <div class="input">
                    <span>NIC Number</span>
                    <input type="text" name="nic_no" id="nic_no" placeholder="Enter NIC number..."value="<?=$nic_no;?>"> 
                    <span class="error" style="font-size:13px; top:60.5%; right:38%; position:absolute;"> <?php echo $nic_noErr;?></span>
                </div>
                
                <div class="input">
                    <span>Mobile Number</span>
                    <input type="text" name="mobile_no" id="mobile_no" placeholder="Enter mobile number..." value="<?=$mobile_no;?>">
                </div>

                <div class="type-radio">
                    <span>Application Type</span>
                    <div class="flex-div">
                        <input type="radio" name="type" id="type" ><span>One Day Service</span>
                         <input type="radio" name="type" id="type" > <span>Normal Service</span>
                         <span class="error" style="font-size:13px; top:76%; right:38%; position:absolute;"  > <?php echo $typeErr;?></span>
                        
                    </div>    
                </div>

                <div class="place-radio">
                    <span>Preferred Location</span>
                    <div class="flex-div-2">    
                        <input type="radio" name="place" id="place"> <span>Head office - Battaramulla</span><br>
                        <input type="radio" name="place" id="place"> <span>Matara branch</span><br>
                        <input type="radio" name="place" id="place"> <span>Kandy branch</span><br>
                        <input type="radio" name="place" id="place"> <span>Vavuniya branch</span><br>
                        <!--<span class="error" style="font-size:13px; top:109%; right:28%; position:absolute;"><//?php echo $placeErr;?></span>-->
                       
                    </div>
                </div>
                   <button type="submit" id="submit" class="btn-submit" name="submit" >Submit</button>
            </div>
        </form>
        <p class="warning"><i class="fa-solid fa-star-of-life" style="font-size:12px"></i>Please be present on time for the appointment for your convenience.
            Early or late arrival will not be accepted. Please carefully read the instructions to submit the passport 
            application before you arrive.</p>
    </div>

    <div class="fullPopup" id="fullPopup" style="background-color:rgba(0,0,0,0.7); width:100%; height:150%;  top:0; left:0; position:absolute; display:none">
    <div class="popup" id="popup" style="background-color:white; opacity:1; color:black; width:600px; padding:60px; border-radius:2rem; height:320px; top:35%; left:30%;position:absolute;" >
        <i class="fa-solid fa-circle-check" style="font-size:90px; background-color:white; color:green; margin-left:190px; "></i>
        <h1 style="text-align:center;">Your Appoinment is successfull!!</h1>
        <h3 style="margin-left:80px; margin-top:10px;">Your Appoinment day is: <?php echo $day;?> </h3>
        <h3 style="margin-left:80px; margin-top:10px;">Your Appoinment number is: <?php echo $itemN;?> </h3>

    </div>
    </div>
    

</body>
</html>