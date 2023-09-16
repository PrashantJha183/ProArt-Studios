<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forhome.css" />
    <link rel="javascript" href="js/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Open+Sans:wght@300;500;700&family=Poppins:wght@400;500;700&family=Work+Sans&display=swap"
        rel="stylesheet">
    <title>ProArt Studios</title>

</head>
<script>
    sessionStorage.setItem("active_page", "0");
    function gotoservices() {
        console.log("Somehting clicks");
        window.location.replace("http://localhost/Proart%20Studios/services.php")
    }
    function gotocontact() {
        console.log("Somehting clicks");
        window.location.replace("http://localhost/Proart%20Studios/contactus.php")
    }
    function gotoportfolio() {
        console.log("Somehting clicks");
        window.location.replace("http://localhost/Proart%20Studios/portfolio.php")
    }
</script>
<?php include 'header.php' ?>

<body>
    <main>
        <section class="section-hero">
            <div class="hero">
                <img src="images/homepageimage1.png" alt="A nice welcoming pic here">
            </div>
        </section>

        <section class="section-services">
            <div class="hero">

                <text style="font-size:31px;font-family: 'Work Sans', sans-serif;">Welcome to</text><br><text
                    style="color:#99C34D; font-size:7.2rem; font-family: 'Open Sans', sans-serif; font-weight:700;">Proart</text>
                <text style="font-size:6.7rem; font-family: 'Open Sans', sans-serif;">Studios</text><br>
                <text class="subtext">Bringing your vision to life, One pixel at a time</text>
                <hr class="hor-line">
            </div>
            <div class="box">
                <div class="box-1">
                    <img src="images/homeicon1.png" alt="small icon">
                    <p>Client satisfaction is our top priority, and we strive to exceed expectations with every project.
                    </p>
                </div>
                <div class="box-2">
                    <img src="images/homeicon2.png" alt="small icon">
                    <p>Our experienceed team is commited to delivering exceptional services</p>
                </div>
            </div>
            <button type="button" class="button1" href="services.php" onclick="gotocontact()">Book a call</button>

        </section>
    </main>
    <vision>
        <section class="section-vision-1">
            <div class="hero" style="margin-left:20%;">
                <text style="font-size:4.5rem; font-family: 'Open Sans', sans-serif; font-weight:500;">We live for our
                </text><text
                    style="color:#99C34D; font-size:4.5rem; font-family: 'Open Sans', sans-serif;">Passion</text>
                <br><br><br><br>
                <text style="font-size: 1.6rem; font-family: 'Open Sans', sans-serif; font-weight:100;">We here at
                    PROART believe in
                    simplifying your essentials for your business by utilising all our specialisations in such a way
                    that we both gain success. Our aim
                    here is to assemble all the necessities that are required all around the business field and bring
                    them together making our
                    Company "one door for all".<br /><br />

                    We are glad to announce that this year we are expanding our services from photo graphy, digital
                    rendering and photo
                    editing to cinematography, videography, Social media marketing, 360 degree videos, 3D rendering, Web
                    designing, Website development, Graphics
                    Designing, and many more....
                </text><br><br><br><br><br>
                <button class="button2" href="services.php" onclick="gotoservices()">Learn More</button>
            </div>



        </section>

        <section class="section-vision-2">
            <div class="hero">
                <img class="vis-img" src="images/vision.jpg" alt="A nice welcoming pic here">
            </div>

        </section>
    </vision>
    <services>
        <div class="service-1n2">
            <div class="hero2">
                <div class="hero2-sub-1">
                    <img class="numbers" src="images/num1.png" alt="img here">
                </div>
                <div class="hero2-sub-2">
                    <div class="text1"><text
                            style="font-size:2.3rem; font-family: 'Open Sans', sans-serif; font-weight:500;">PHOTOGRAPHY</text>
                    </div>

                    <div class="text2">With tones of experience by our side with Pankaj Patil, we are all set to help
                        you in all your photographic work from your product shoots to your event shoots.</div>
                </div>
            </div>
            <div class="hero2">
                <div class="hero2-sub-1">
                    <img class="numbers" src="images/num2.png" alt="img here">
                </div>
                <div class="hero2-sub-2">
                    <div class="text1"><text
                            style="font-size:2.3rem; font-family: 'Open Sans', sans-serif; font-weight:500; margin-left: 4px;">VIDEOGRAPHY</text>
                    </div>

                    <div class="text2">With tones of experience we also have our young blood Ayush Parab and Raj Patil,
                        stepping into the field with thier new skills and knowledge to capture all your stories.</div>
                </div>
            </div>
        </div>
        <div class="service-3n4">
            <div class="hero2">
                <div class="hero2-sub-1">
                    <img class="numbers" src="images/num3.png" alt="img here">
                </div>
                <div class="hero2-sub-2">
                    <div class="text1"><text
                            style="font-size:2.3rem; font-family: 'Open Sans', sans-serif; font-weight:500;">Graphic
                            Designing</text></div>

                    <div class="text2">With all our skilled editors we have our team all ready to fulfill all your
                        demands by creating your imaginations in our images.</div>
                </div>
            </div>
            <div class="hero2">
                <div class="hero2-sub-1">
                    <img class="numbers" src="images/num4.png" alt="img here">
                </div>
                <div class="hero2-sub-2">
                    <div class="text1"><text
                            style="font-size:2.3rem; font-family: 'Open Sans', sans-serif; font-weight:500;">Web
                            Development</text></div>

                    <div class="text2">Best way to showcase what you do is not by telling them but by showing them,
                        Built your own website now with our team to show your display in best way</div>
                </div>
            </div>
        </div>
    </services>
    <portfolio>

        <text style="font-family: 'Open Sans', sans-serif; font-weight:700;">Our Exceptional </text><text
            style="color:#99C34D; font-family: 'Open Sans', sans-serif; font-weight:700;">Creative</text><br>
        <text style="font-family: 'Open Sans', sans-serif; font-weight:700;">Work Profile</text>
        <div class="caraosel">
            <div class="gallery" data-bs-interval="5000" data-bs-touch="true" data-bs-ride="ride">
                <div class="gallery-container">
                    <img class="gallery-item gallery-item-1" src="images/Product_1.jpg" data-index="1">
                    <img class="gallery-item gallery-item-2" src="images/Product_2.jpg" data-index="2">
                    <img class="gallery-item gallery-item-3" src="images/Product_3.jpg" data-index="3"
                        onclick="gotoportfolio()"><text
                        style="color:#99C34D;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Click
                        for<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Portfolio</text></img>
                    <img class="gallery-item gallery-item-4" src="images/Product_6.jpg" data-index="4">
                    <img class="gallery-item gallery-item-5" src="images/Product_5.jpg" data-index="5">
                </div>
                <div class="gallery-controls"></div>
            </div>
            <script src="js/script.js"></script>
        </div>
    </portfolio>
</body>
<?php include 'footer.php' ?>

</html>