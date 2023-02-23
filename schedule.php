<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule an Appoinment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php @include 'Header.php'; ?>
    </header>

    <div class="terms-conditions" >
        <h2 class="title"> Terms and Conditions</h2>
        <p>Welcome to the DFA Online Passport Appointment System. Review all fields in the online form carefully and provide complete and accurate information
            This appointment and scheduling system allocates slots on a first come, first served basis.
            Users accept the responsibility for supplying, checking, and verifying the accuracy and correctness of the information they provide on 
            this system in connection with their application. Incorrect or inaccurate information supplied may result in forfeiture of passport application.</p>

            <form action="">
                <input type="checkbox" name="agree" id="agree" value="yes" onclick='handleChange(this);'>
                <label for="terms & conditions" class="text-terms">By proceeding with this application, I understand that I am signifying my unequivocal consent to the disclosure, 
                     collection and use of my personal informations and the data required under Sri Lanka Passport Act as amended and its implementing Rules and Regulations.
                    My consent effectively constitutes a wavier of any and all privacy rights pertaining to the disclosure,collection and use of my personal information 
                    and data under the specific terms and condition of the DFA Online Passport Appoinment System Website's privacy policy,the Data Privacy Act on 2012
                    and its Implementing Rules and Regulations,and other pertinet DFA rules,regulations,policies on the matter.  </label>
                
            </form>
            <a id="btn-start" style="cursor:pointer; display:none; top:95%; position:absolute;" href="Appoinment.php">Start Appoinment</a>
    </div>

    <script>
        
        function handleChange(checkbox) {
    if(checkbox.checked == true){
      document.getElementById('btn-start').style.display='block';
    }
}        
    </script>
</body>
</html>