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
</style>
<script>
    sessionStorage.setItem("active_page", "2");
    function showall() {
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
    }
    function showstill() {
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
    }
    function showint() {
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
    }
    function showprod() {
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
    }
    function showrend() {
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
                <li class="options" onclick="showall()">All</li>
                <li class="options" onclick="showstill()">Still</li>
                <li class="options" onclick="showint()">Interior</li>
                <li class="options" onclick="showprod()">Product</li>
                <li class="options" onclick="showrend()">Render</li>
            </ul>

            <div class="view-panel">
                <div class="all">
                    <div class="layer-1">
                        <img src="images/Product/Product_1.jpg" alt="" class="start card-1">
                        <img src="images/still/9_16/Creative_2.jpg" alt="" class="card-1">
                        <img src="images/3d Render/9_16/3D_11.jpg" alt="" class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="images/interior/16_9/IMG_0289-HDR.jpg" alt="" class=" start card-2">
                        <img src="images/3d Render/16_9/Untitled-3.jpg" alt="" class="card-2">
                    </div>
                    <div class="layer-3">
                        <!-- <div class="sublayer-3"> -->
                        <img src="images/still/16_9/Creative_3.jpg" alt="" class="start card-2">
                        <img src="images/product/Product_17.jpg" alt="" class="start card-2">
                        <!-- </div> -->
                        <div class="sublayer-3-2">
                            <img src="images/interior/9_16/IMG_0266-HDR.jpg" alt="" class="card-3">
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="layer-1">
                        <img src="images/Product/Product_1.jpg" alt="" class="start card-1">
                        <img src="images/Product/Product_5.jpg" alt="" class="card-1">
                        <img src="images/Product/Product_9.jpg" alt="" class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="images/Product/Product_4.jpg" alt="" class=" start card-2">
                        <img src="images/Product/Product_2.jpg" alt="" class="card-2">
                    </div>
                    <div class="layer-3">
                        <div class="sublayer-3">
                            <img src="images/Product/Product_17.jpg" alt="" class="start change card-2">
                            <img src="images/Product/Product_33.jpg" alt="" class="start change card-2"
                                style="margin-top:4%;">
                        </div>
                        <div class="sublayer-3-2">
                            <img src="images/Product/Product_16.jpg" alt="" class="card-3">
                        </div>
                    </div>
                </div>
                <div class="interior">
                    <div class="layer-1">
                        <img src="images/Interior/9_16/IMG_0149-HDR.jpg" alt="" class="start card-1">
                        <img src="images/Interior/9_16/IMG_0159-HDR.jpg" alt="" class="card-1">
                        <img src="images/Interior/9_16/IMG_0166-HDR.jpg" alt="" class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="images/Interior/16_9/IMG_0184-HDR.jpg" alt="" class=" start card-2">
                        <img src="images/Interior/16_9/IMG_0233-HDR.jpg" alt="" class="card-2">
                    </div>
                    <div class="layer-3">
                        <div class="sublayer-3">
                            <img src="images/Interior/16_9/IMG_0289-HDR.jpg" alt="" class="start change card-2">
                            <img src="images/Interior/16_9/IMG_0108-HDR.jpg" alt="" class="start change card-2">
                        </div>
                        <div class="sublayer-3-2">
                            <img src="images/Interior/9_16/IMG_0441-HDR.jpg" alt="" class="card-3">
                        </div>
                    </div>
                </div>
                <div class="still">
                    <!-- <div class="layer-1"> -->
                    <img src="images/still/9_16/Creative_10.jpg" alt="" class="start card-1">
                    <img src="images/still/9_16/Creative_12.jpg" alt="" class="card-1">
                    <img src="images/still/9_16/Creative_2.jpg" alt="" class="card-1">
                    <!-- </div> -->
                    <div class="layer-2">
                        <img src="images/still/16_9/Creative_1.jpg" alt="" class=" start card-2">
                        <img src="images/still/16_9/Creative_11.jpg" alt="" class="card-2">
                    </div>
                    <div class="layer-3">
                        <div class="sublayer-3">
                            <img src="images/still/16_9/Creative_3.jpg" alt="" class="start change card-2">
                            <img src="images/still/16_9/Creative_7.jpg" alt="" class="start change card-2">
                        </div>
                        <div class="sublayer-3-2">
                            <img src="images/still/9_16/Creative_6.jpg" alt="" class="card-3">
                        </div>
                    </div>
                </div>
                <div class="render">
                    <div class="layer-1">
                        <img src="images/3d render/9_16/3D_1.jpg" alt="" class="start card-1">
                        <img src="images/3d render/9_16/3D_10.jpg" alt="" class="card-1">
                        <img src="images/3d render/9_16/3D_11.jpg" alt="" class="card-1">
                    </div>
                    <div class="layer-2">
                        <img src="images/3d render/16_9/Untitled-1.jpg" alt="" class=" start card-2">
                        <img src="images/3d render/16_9/Untitled-2.jpg" alt="" class="card-2">
                    </div>
                    <div class="layer-3">
                        <div class="sublayer-3">
                            <img src="images/3d render/16_9/Untitled-3.jpg" alt="" class="start change card-2">
                            <img src="images/3d render/16_9/Untitled-4.jpg" alt="" class="start change card-2">
                        </div>
                        <div class="sublayer-3-2">
                            <img src="images/3d render/9_16/3D_22.jpg" alt="" class="card-3">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </selector>

</body>
<?php include 'footer.php' ?>

</html>