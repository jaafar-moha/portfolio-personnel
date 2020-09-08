<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass/contact.css">
    <script src="https://kit.fontawesome.com/5e67adc73a.js" crossorigin="anonymous"></script>

    <title>contact</title>
</head>
<body>
<?php include 'navbar.php'; ?>

    <section class="all">
        <div class="contact">
            <div class="contact_info">
                <p class="contact_info_paragh">Si vous avez des missions freelance ou des projets à me proposez , ou si vous souhaitez me contacter pour un devis n’hésitez pas à me contacter directement ou en utilisant le formulaire, je serais heureuse de vous répondre dans les plus brefs délais.</p>
                <div class="contact_info_person">
                    <h3>M'HAMED JAAFAR</h3>
                    <p>mjaafar@student.youcode.ma</p>
                    <p>0638721074</p> 
                    <p>YOUSSOUFIA-MAROC</p>
                </div>

            </div>
        </div>
        <div class="message">
            <h2>CONTACT</h2>
            <form action=""></form>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." >

            <label for="lname">E-mail</label>
            <input type="email" id="mail" name="mail" placeholder="Your email..">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
        </div>
    </section>
    <div class="ensemble">
        <img src="images/logo.png" alt="" >
    </div>





    
    
</body>
</html>