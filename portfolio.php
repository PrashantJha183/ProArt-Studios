<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forportfolio.css" />
    <link rel="javascript" href="js/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Open+Sans:wght@300;500;700;800&family=Poppins:wght@400;500;700&family=Work+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <title>ProArt Studios</title>

</head>
<style>
    .all {
        display: block;
    }

    .still {
        display: none;
    }

    .interior {
        display: none;
    }

    .product {
        display: none;
    }

    .render {
        display: none;
    }

    .show {

        display: none;
    }
</style>
<script>
    sessionStorage.setItem("active_page", "2");
    function showAdvertisement() {
        var elems = document.getElementsByClassName('all');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('still');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('interior');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('product');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('render');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('show');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
    }
    function showFood() {
        var elems = document.getElementsByClassName('all');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('still');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('interior');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('product');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('render');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('show');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
    }
    function showFashion() {
        var elems = document.getElementsByClassName('all');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('still');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('interior');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('product');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('render');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('show');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
    }
    function showCreatives() {
        var elems = document.getElementsByClassName('all');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('still');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('interior');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('product');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('render');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('show');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
    }
    function showIndustrial() {
        var elems = document.getElementsByClassName('all');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('still');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('interior');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('product');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('render');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('show');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
    }

    function showStill() {
        var elems = document.getElementsByClassName('all');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('still');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('interior');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('product');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('render');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('show');
        for (var i = 0; i < elems.length; i += 1) {
            elems[i].style.display = 'block';
        }
    }
</script>
<script src="js/selector.js"></script>

<body>
    <?php include 'header.php' ?>
    <main>

        <section class="section-hero">
            <div class="service-hero-1">
                <div class="text">
                    <text class="land-text">Portfolio</text><br>
                </div>
                <text class="subtext">Our awesome projects</text>
            </div>
        </section>
    </main>
    <selector>
        <div class="selector">
            <ul class="selector-list">
                <li class="options" onclick="showAdvertisement()">Advertisement</li>
                <li class="options" onclick="showCreatives()">Creatives</li>
                <li class="options" onclick="showFashion()">Fashion & Lifestyle</li>
                <li class="options" onclick="showFood()">Food & Beverages</li>
                <li class="options" onclick="showIndustrial()">Interior & Industrial</li>
                <li class="options" onclick="showStill()">Still</li>
            </ul>

            <div class="view-panel">
                <div class="all">
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Advertising\Ad_1.jpg" alt=""
                            class="start card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Advertising\Ad_2.jpg" alt=""
                            class="card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Advertising\Ad_3.jpg" alt=""
                            class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="Photos\Final Images for website\Final Images for website\Advertising\Ad_4.jpg" alt=""
                            class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Advertising\Ad_5.jpg" alt=""
                            class="card-2">
                    </div>
                    <div class="layer-2">
                        <img src="Photos\Final Images for website\Final Images for website\Advertising\Ad_6.jpg" alt=""
                            class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Advertising\Ad_7.jpg" alt=""
                            class="card-2">
                    </div>
                </div>
                <div class="product">
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_1.jpg"
                            alt="" class="start card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_2.jpg"
                            alt="" class="card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_3.jpg"
                            alt="" class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_4.jpg"
                            alt="" class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_6.jpg"
                            alt="" class="card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_10.jpg"
                            alt="" class="card-2">

                    </div>
                    <!-- <div class="layer-3"> -->
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_7.jpg"
                            alt="" class="card-2">
                    </div>
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_9.jpg"
                            alt="" class="card-2">

                    </div>
                    <!-- </div> -->
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Creative_15.jpg"
                            alt="" class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Creatives\Kids_1.jpg" alt=""
                            class="card-2">
                    </div>


                </div>
                <div class="interior">
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\Fashion_1.jpg"
                            alt="" class="start card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\Fashion_2.jpg"
                            alt="" class="card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\Fashion_4.jpg"
                            alt="" class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\Fashion_5.jpg"
                            alt="" class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\Fashion_6.jpg"
                            alt="" class="card-2">
                    </div>
                    <div class="layer-2">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\Fashion_8.jpg"
                            alt="" class="start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\Kids_2.jpg"
                            alt="" class="card-2">
                    </div>
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Fashion & Lifestyle\MB 1.jpg"
                            alt="" class="card-3">
                    </div>

                </div>
                <div class="still">
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_1.jpg"
                            alt="" class="start card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_3.jpg"
                            alt="" class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_04.jpg"
                            alt="" class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_5.jpg"
                            alt="" class="card-2">
                    </div>
                    <!-- <div class="layer-3">
                        <div class="sublayer-3">
                            <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_7.jpg"
                                alt="" class="start change card-2">
                            <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_11.jpg"
                                alt="" class="change card-2">
                        </div>
                    </div> -->
                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_12.jpg"
                            alt="" class="start card-2">
                    </div>
                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_2.jpg"
                            alt="" class="card-2">
                    </div>
                    <!-- </div> -->

                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\Food_14.jpg"
                            alt="" class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Food & Beverages\PISTACHIO_SOCIAL.jpg"
                            alt="" class="card-2">
                    </div>

                </div>
                <div class="render">
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_3.jpeg"
                            alt="" class="start card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_7.jpeg"
                            alt="" class="card-1">
                    </div>
                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_4.jpg"
                            alt="" class=" start card-2">
                    </div>
                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_5.jpg"
                            alt="" class="card-2">
                    </div>
                    <div class="sublayer-3-2">

                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_6.jpg"
                            alt="" class="start card-2">
                    </div>
                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_8.jpg"
                            alt="" class="card-2">
                    </div>

                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_9.jpg"
                            alt="" class=" start card-2">
                    </div>

                    <div class="sublayer-3-2">
                        <img src="Photos\Final Images for website\Final Images for website\Interior & Industrial\II_10.jpg"
                            alt="" class="card-2">
                    </div>
                </div>


                <div class="show">
                    <div class="layer-1">
                        <img src="Photos\Final Images for website\Final Images for website\Still\Product_1.jpg" alt=""
                            class="start card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Still\Product_2.jpg" alt=""
                            class="card-1">
                        <img src="Photos\Final Images for website\Final Images for website\Still\Product_3.jpg" alt=""
                            class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="Photos\Final Images for website\Final Images for website\Still\Product_4.jpg" alt=""
                            class=" start card-2">
                        <img src="Photos\Final Images for website\Final Images for website\Still\Product_5.jpg" alt=""
                            class="card-2">
                    </div>
                    <div class="layer-3">
                        <div class="sublayer-3">
                            <img src="Photos\Final Images for website\Final Images for website\Still\Product_7.jpg"
                                alt="" class="start card-2">
                            <img src="Photos\Final Images for website\Final Images for website\Still\Product_8.jpg"
                                alt="" class="card-2">
                        </div>

                        <div class="sublayer-3-2">
                            <img src="Photos\Final Images for website\Final Images for website\Still\Product_16.jpg"
                                alt="" class="start card-2">
                            <img src="Photos\Final Images for website\Final Images for website\Still\Product_13.jpg"
                                alt="" class="card-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </selector>

</body>
<?php include 'footer.php' ?>

</html>