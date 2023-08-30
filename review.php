<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forreview.css"/>
    <link rel="javascript" href="js/index.js"/>
    <link rel="javascript" href="js/script.js"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Open+Sans:wght@300;500;700&family=Poppins:wght@400;500;700&family=Work+Sans&display=swap" rel="stylesheet">
    <title>ProArt Studios</title>

</head>
<style>
    .hid1{
        display: none;
    }
    .hid2{
        display: none;
    }
    .show{
        display: block;
    }
</style>
<script>
    sessionStorage.setItem("active_page", "3");
    function showraj(){
        var elems = document.getElementsByClassName('show1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('hid1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('hid2');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
    }
    function showprav(){
        var elems = document.getElementsByClassName('hid1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('show1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('hid2');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
    }
    function showjjs(){
        var elems = document.getElementsByClassName('hid2');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('show1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('hid1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
    }
</script>
<?php include 'header.php' ?>
<body>
<main>
    <div class="block-1">
        <text class="heading">Customer Review</text><br><br>
        <text class="subheading">Customer Tales: Stories of Satisfaction and Success</text><br><br>
        <text class="subtext"> The experiences and stories shared by those who have chosen our products or services. From glowing reviews to personal accounts of success. We are grateful for the trust our customers place in us and invite you to explore their words of praise and firsthand encounters. Discover why our customers love us and how we strive to exceed their expectations every step of the way.</text>
    </div>
    <div class="block-2">
        <img src="images/Group.png" alt="">
    </div>
</main>
<testimonials>
    <div class="testimonials">
        
        <div class="block-3">
        <text class="testim">Testimonials</text>
            <ul>
                <li>
                    <div class="card" onclick="showraj()">
                        <div class="card-1">
                            <img src="images/rajsir.jpeg" alt="">
                        </div>
                        <div class="card-2">
                            <text class="name">Raj Mittal</text><br>
                            <text class="job">-Capital Foods</text>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" onclick="showprav()">
                        <div class="card-1">
                            <img src="images/pravinsir.jpeg" alt="">
                        </div>
                        <div class="card-2">
                            <text class="name">Pravin Basrur</text><br>
                            <text class="job">-Deadline Advertisement</text>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card" onclick="showjjs()">
                        <div class="card-1">
                            <img src="images/jjssir.png" alt="">
                        </div>
                        <div class="card-2">
                            <text class="name">Jayendra Jayant Salgaonkar</text><br>
                            <text class="job">-Sumangal Press (कालनिर्णय)</text>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="block-4 show1">
            <text class="heading-2">Raj Mittal<br></text><br>
            <text class="subtext">-Executive Creative Director & Founder member Forefront Advertising Creative Director at Capital Foods Ltd.</text><br>
          
            <br>
            <text class="subtext show1">"I have had the honor of working with Pankaj and his photography agency for the past 16 years and I can confidently say that they are one of the most talented, professional and experienced teams in the industry. Pankaj has an incredible eye for detail and a deep understanding of light and composition, which is reflected in the stunning photographs he and his team produce.<br><br>They have a wealth of experience and knowledge, and they are always willing to go the extra mile to ensure that the final images exceed expectations. The agency is also a pleasure to work with, being both personable and easy to communicate with. I highly recommend Pankaj and his photography agency to anyone in need of a skilled, experienced and professional team for their photography needs."</text>
        </div>
    
    <div class="block-4 hid1">
            <text class="heading-2">Pravin Basrur<br></text><br>
            <text class="subtext">-Director - Production at Deadline Advertising Private Limited</text><br>
            <br>
            <text class="subtext hid1">""Shooting with Pankaj ji is an absolute pleasure. He is someone who plans thoroughly for all eventualities in a shoot. His background in production is a huge advantage and you can see it in the results. I am immensely impressed with his understanding of photography and amazed at his passion and dedication to his craft. Wishing him and his team great success."</text>
        </div>
    <div class="block-4 hid2">
            <text class="heading-2">Jayendra Jayant Salgaonkar<br></text><br>
<text class="subtext">-Director Sumangal Press Pvt. Ltd. (कालनिर्णय)</text><br>
            <br>
            <text class="subtext hid2">“I have had the privilege of working with Pankaj for the last 17 years and I can confidently say that he is one of the most talented and experienced photographers in the industry. He has an eye for capturing the perfect shot and has a wealth of knowledge and expertise in various photography techniques. He is also incredibly professional, personable and easy to work with, soft spoken, hence making the entire experience a pleasurable one. I would highly recommend Pankaj to anyone who is in need of a skilled and experienced & well mannered photographer.”</text>
        </div>
    </div>
   
</testimonials>
</body>
<?php include 'footer.php' ?>
</html>

