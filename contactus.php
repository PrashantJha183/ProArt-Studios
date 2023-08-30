<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forcontact.css"/>
    <link rel="javascript" href="js/index.css"/>
    <title>ProArt Studios</title>

</head>
<script>
    sessionStorage.setItem("active_page", "5");
    
</script>
<?php include 'header.php' ?>
<body>
<main>
        <section class="section-hero">
            <div class="hero">
                <text style="font-size:25px; color:#99C34D;"> Feel Free To</text><br><text style="font-size:60px; color:#99C34D"><b>Contact Us</b></text><br>
                <text class="subtext">If you need to have help with our services, have questions about our work or experiencing any technical dificulties, please do not hesitate to contact us.</text>
                <div class="split">
                    <div class="split-1">
                        <img src="images/addressicon.png" class="icons" alt=""><text style="font-size:24px; color:#99C34D;"><b> Address</b></text>
                        <br>
                        <text class="subtext2">11/86, 1st Floor, C.C.I. Colony, Unnat Nagar, Goregaon West, Mumbai, Maharashtra</text>
                    </div>
                    <div class="split-2">
                    <img src="images/phoneicon.png" class="icon2" alt=""><text style="font-size:24px; color: #99C34D;"><b> Phone</b></text><br>
                    <text class="subtext2"><u>+91 99676 55210<br>+91 89998 99548</u></text>
                    </div>
                </div>
                <text style="font-size:24px; color:#99C34D;"><b>Others</b></text>
                <br>
                <div class="others">
                <img src="images/website.png" class="icon3" alt=""><text class="subtext3"> www.proartstudios.com</text>
                </div>
                <div class="others">
                <img src="images/emailicon.png"class="icon4" alt=""><text class="subtext3"> proartstudios@gmail.com</text>
                </div>
            </div>
            
        </section>

        <section class="section-services">
            <div class="hero">
           
                <form action="http://localhost:5500/example" method="POST">
                <h3>Name<h3><input class="inp" id="name" name="name" type="text" placeholder="Enter Your Full Name" oninput="this.value = this.value.replace(/[^a-z.][^A-Z]/g, '');"></input><br>
                <h3>E-Mail<h3><input class="inp" id="email" name="mail" type="text"placeholder="Enter Your Email Address" ></input><br>
                <h3>Mobile Number<h3><input class="inp" id="phn" name="phn" type="text" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Your Mobile Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '');" maxlength="10"></input><br>   
                <h3>Message<h3><textarea row="10" cols="10" class="inp2" placeholder="Enter Your Message Here" id="msg" name="mesg" type="text" ></textarea><br>
                        <button class="btn" >Send</button>
                </form>
    
            </div>
        </section>
</main>



</body>
<?php include 'footer.php' ?>
</html>

