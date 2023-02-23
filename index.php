<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport Appoinment</title>

    <!--links-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <!--Header section starts-->
    <header>
        <?php @include 'header.php'; ?>
    </header>
     <!--Header section end-->

    <!--Main section starts-->
    <main>
        <div class="main">
            <img class="img-2" src="images/6.png">

            <div class="main-text">
                <h2>Welcome to the DFA Online Passport Appointment System.</h2>
                <p>In view of the current health emergency arising from the COVID-19 pandemic, 
                    applications for consular services are strictly by appointment only.
                This appointment and scheduling system allocates slots on a first come, first served basis.
                </p>
                <a href="schedule.php" class="btn-enroll">Schedule an Appoinment</a>
            </div>
            
        </div>


        <section class="categories">
            <div class="content">
                <h2>Issue of Passports</h2>
                <p>Passport Valid for All Countries</p>
                <a href="Requirements.php">See More</a>
            </div>
            
            <div class="category-right">
                <article class="category">
                    <span class="icon"><i class="fa-solid fa-passport"></i></span>
                    <h3>Ordinary Passport</h3>
                    <p>The most common variety are ordinary passports issued to individual citizens and other nationals.</p>
                </article>

                <article class="category">
                    <span class="icon"><i class="fa-solid fa-passport"></i></span>
                    <h3>Diplomatic Passports</h3>
                    <p>The  validity period is 10 years unless otherwise specified in the passport. 
                        This passport is issued to VVIPs, Members of Parliament and Persons Posted to prescribed positions at Sri Lankan Overseas Missions.</p>
                </article>

                <article class="category">
                    <span class="icon"><i class="fa-solid fa-passport"></i></span>
                    <h3>Official Passports </h3>
                    <p>Purpose is to let officials in the destination country know that the bearer is 
                        entering the country on official business, representing their country in an official capacity.</p>
                </article>
            </div>
        </section>


        <section class="faqs">
            <h2>Frequently asked questions</h2>
        <div class="faqs-container">
            
            <article class="faq">
                <div class="faq-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="question-answer">
                    <h4>I have lost my passport.What should I do ?</h4>
                    <p>If your passport has been lost or stolen you should immediately report it to the nearest Police Station and forward a copy of the police report to the Controller General of Immigration & Emigration.
                        If applying for a fresh passport, this police report must be submitted along with the application form.</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="question-answer">
                    <h4>Validity Period of a Passport</h4>
                    <p>Currently issuing N series passports are valid 10 years unless otherwise specified. Validity period of passports for minors below 16 years of age are 03 years.
                        Emergency Certificates are valid two (02) years but can be extended for further two years.</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="question-answer">
                    <h4>Am I eligible for a Sri Lankan Passport ?</h4>
                    <p>You can obtain a Sri Lankan Passport if you are - A Sri Lankan Citizen by descent or by registration.</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How do I apply for a Sri Lankan passport?</h4>
                    <p>Set an appointment at this website. Appear on the actual date of appointment and bring the complete set of requirements appropriate to your application.</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="question-answer">
                    <h4>What if my passport is damaged?</h4>
                    <p>If your passport is damaged, it is the responsibility of the holder (owner) of passport to inform the concerned authorities immediately and to obtain a new passport.
                        Never use a damaged passport for travel.</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="question-answer">
                    <h4>How much is the passport fee?</h4>
                    <p>
                        Re-Issue of 36 Pages Passport<span  style="margin-left: 150px;">27500</span><br>     
                        Re-issue of 60 Pages Passport<span  style="margin-left: 150px;">37000</span> <br> 
                        Renewal of minor Passport<span style="margin-left: 175px;">18500</span><br> 
                        Lost/Damage 36 Pages Passport<span style="margin-left: 135px;">55500</span><br>
                        Lost/Damage 60 Pages Passport<span   style="margin-left: 135px;">64750</span><br>  
                        Fresh Passport<span style="margin-left:263px ;">16650</span>  
                    </p>
                </div>
            </article>
        </div>
    </section>
</main>

    <!--Main section end-->
    
    
    <footer>
    <section class="footer">
        <h4 class="footer-text"><span><i class="fa-solid fa-copyright"></i></span> 2022 Department of foreign affairs. All Rights Reserved</h4>
   </section>
</footer>
    <!--Javascript link-->
    <script src="home.js"></script>
</body>
</html>