<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url()?>assets/img/logo.png" rel="icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/home.css">
    <title>HOME </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="awal" > 
            <img src="<?php echo base_url()?>assets/img/logo.png" alt="">
            <div class="nama">
                StartPlant
            </div>
        </div>
        <div class="tengah">
            <a class="menu" href="<?php echo base_url().'index.php/home'?>">HOME</a>
            <a class="menu" href="<?php echo base_url().'index.php/home/guide'?>">PLANT CARE GUIDE </a>
            <a class="menu" href="<?php echo base_url().'index.php/home/how_to_order'?>">HOW TO ORDER</a>
            <a class="menu" href="<?php echo base_url().'index.php/home/aboutus'?>">ABOUT US</a>

        </div>
        <div class="akhir">
            <a class="login" href="#"> <img src="<?php echo base_url()?>assets/img/login.png"> Hallo, <?= $user ['nama']; ?></a>
            <a class="buy" href="<?php echo base_url().'home/buy_plant'?>"><img src="<?php echo base_url()?>assets/img/carbon_shopping-cart.png"> Buy Plant Giude</a>
        </div>
    </nav>
    <header>
        <div class="heading">
            <p>NOW, EVERYONE CAN  GROW <br>
                <span> THEIR OWN PLANT!</span>
            </p>
            <p class="deskripsi"> Wondering how to start a garden? but you never gardened before?
            No problem. Make your grow-you-own dreams a reality with these 10 easy-to-follow tips
            these expert gardening tips. Let’s check this out!</p>
            <div class="tbl">
                <a class="tbl-buy" href="#"> Buy Plant Guide</a>
                <a class=" tbl-view" href="#"> View Tips</a>
            </div>
        </div>
        <div class="foto">
            <div>
                <img src="<?php echo base_url()?>assets/img/heder.png" alt="">
            </div>
        </div>
        <div class="sosmed">
            <div class="ig">
                <img src="<?php echo base_url()?>assets/img/ig.png" alt="">
            </div>
            <div class="fb">
                <img src="<?php echo base_url()?>assets/img/fb.png" alt="">
            </div>
            <div class="tw">
                <img class="tw"src="<?php echo base_url()?>assets/img/tw.png" alt="">
            </div>
        </div>
    </header>

    <div class="help">
        <div class="text">
            <p>How Plants Help You?</p>
        </div>
        <div class="emot">
            <div class="pict">
                <img src="<?php echo base_url()?>assets/img/mood.png" alt="">
                <img src="<?php echo base_url()?>assets/img/kreatif.png" alt="">
                <img src="<?php echo base_url()?>assets/img/stress.png" alt="">
                <img src="<?php echo base_url()?>assets/img/polutan.png" alt="">
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="type">
            <div class="judul">
                <p> Plant Type </p>
            </div>
            <div class="gambar">
                <div class="vege">
                    
                    <div class="tanda"></div>
                    <img src="<?php echo base_url()?>assets/img/vege.png" alt="">
                </div>
                <div class="fruit">
                    <img src="<?php echo base_url()?>assets/img/fruit.png" alt="">
                </div>
                <div class="medis">
                    <img src="<?php echo base_url()?>assets/img/medicine.png" alt="">
                </div>
                <div class="indor">
                    <img src="<?php echo base_url()?>assets/img/indor.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="judul">
            <p> Plants You May Like</p>
        </div>
        <div class="kotak">
            <div class="reco">
                <div class="tumbuhan">
                    <img src="<?php echo base_url()?>assets/img/nanas.png">
                </div>
                <p> Pinneple Plant</p>
            </div>
            <div class="reco">
                <div class="tumbuhan">
                    <img src="<?php echo base_url()?>assets/img/rak.png">
                </div>
                <p> Indor Plants</p>
            </div>
            <div class="reco">
                <div class="tumbuhan">
                    <img src="<?php echo base_url()?>assets/img/tomat.png">
                </div>
                <p> Tomato</p>
            </div>
            <div class="reco">
                <div class="tumbuhan">
                    <img src="<?php echo base_url()?>assets/img/letuce.png">
                </div>
                <p> Lettuce</p>
            </div>
        </div>

    </div>
    <div class="need">
        <div class="inner">
            <div class="paragrap">
                <p class="kapital">What do I need to plant a plant ?</p>
                <p>this is what you need for beginer, let’s find out !</p>
            </div>
            <div class="timeline">
                <div class="baris1">
                    <div class="isi">
                        <div class="picture">
                            <img src="<?php echo base_url()?>assets/img/kontener.png" alt="">
                              
                        </div>
                        <div class="baca">
                            <p class="time">Container</p>
                            <p>Start with a proper pot or seed tray. Choose a size that fits your plant. 
                                If you are starting from a seed, 
                                choose a small pot and transplant your plant later into a larger pot</p>
                        </div>
                      
                    </div>
                    <div class="isi">
                        <div class="picture">
                            <img src="<?php echo base_url()?>assets/img/water.png" alt="">
                        </div>
                        <div class="baca">
                            <p class="time">Water</p>
                            <p>Start with a proper pot or seed tray. Choose a size that fits your plant. 
                                If you are starting from a seed, 
                                choose a small pot and transplant your plant later into a larger pot</p>                           
                        </div>
                      
                    </div>

                </div>
                <div class="garis">
                    <div class="grs">
                        <div class="circle">
                        
                        </div>
                        <div class="circle">
                            
                        </div>
                        <div class="circle">
                            
                        </div>
                        <div class="circle">
                            
                        </div>

                    </div>


                </div>
                <div class="baris1 kanan">
                    <div class="isi">
                        <div class="picture">
                            <img src="<?php echo base_url()?>assets/img/soil.png" alt="">
                            
                        </div>
                        <div class="baca">
                            <p class="time">Soil</p>
                            <p>Good-quality soil is high in nutrients that plants require. Rather than use the dirt from your yard, which might be nutrient-poor and contain weed seeds, buy a potting soil mix, available at any garden center.</p>
                        </div>
                      
                    </div>
                    <div class="isi">
                        <div class="picture">
                            <img src="<?php echo base_url()?>assets/img/sun.png" alt="">
                        </div>
                        <div class="baca">
                            <p class="time">Sun and Nutrient</p>
                            <p>Like humans and animals, plants need both water and nutrients (food) to survive. Most all plants use water to carry moisture and nutrients back and forth between the roots and leaves.</p>
                            
                        </div>
                      
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="tips">
        <div class="heder">
            <p>8 Top Gardening Tips for Beginners</p>
        </div>
        <div class="konten">
            <div class="kiri">
                <div class="bagian">
                    <div class="angka">
                        <p>1</p>
                    </div>
                    <div class="desc">
                        <p><b>Site it right.</b><br>
                            Starting a garden it's all about location. Place your garden in a part of your yard where you'll see it 
                            regularly (out of sight, out of mind definitely applies to gardening). That way, you'll be much more likely to spend time in it.
                        </p>

                    </div>

                </div>
                <div class="bagian">
                    <div class="angka">
                        <p>2</p>
                    </div>
                    <div class="desc">
                        <p><b>Follow the sun.</b><br>
                            
                            Mis judging sunlight is a common pitfall when you're first learning to garden. 
                            Pay attention to how sunlight plays through your yard before choosing a spot
                            for your garden. Most edible plants, including many vegetables, herbs, and fruits,
                            need at least 6 hours of sun in order to thrive.
                        </p>
                    </div>

                </div>
                <div class="bagian">
                    <div class="angka">
                        <p>3</p>
                    </div>
                    <div class="desc">
                        <p><b>Stay close to water.</b><br>
                            
                            One of the best gardening tips you'll ever get is to plan your 
                            new garden near a water source. The best way to tell if plants 
                            need watering is to push a finger an inch down into the soil
                            (that's about one knuckle deep). If it's dry, it's time to water.

                        </p>

                    </div>

                </div>
                <div class="bagian">
                    <div class="angka">
                        <p>4</p>
                    </div>
                    <div class="desc">
                        <p><b>Start with great soil.</b><br>
                            One of the top pieces of advice is to invest in soil that is
                            nutrient-rich and well-drained. 
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="kiri">
                <div class="bagian">
                    <div class="angka">
                        <p>5</p>
                    </div>
                    <div class="desc">
                        <p><b>Consider containers.</b><br>
                            When space is at a premium, look to containers. You can grow many plants in pots, 
                            including vegetables, herbs, flowers, fruit trees, berries, and shrubs. 
                            When gardening in containers, use a pot that's large enough for the plant it's hosting.
                        </p>
                    </div>
                </div>
                <div class="bagian">
                    <div class="angka">
                        <p>6</p>
                    </div>
                    <div class="desc">
                        <p><b>Choose the right plants.</b><br>
                            It's important to select plants that match your growing conditions. 
                            This means putting sun-loving plants into a sunny spot, choosing 
                            heat-tolerant plants in warm climates, and giving ground-gobbling vines 
                            like pumpkins and melons ample elbow room (or a trellis to climb). 

                        </p>
                    </div>

                </div>
                <div class="bagian">
                    <div class="angka">
                        <p>7</p>
                    </div>
                    <div class="desc">
                        <p><b>Discover your zone.</b><br>
                            Knowing your "hardiness zone" can help you choose the best plants. Simply put, it describes the coldest place a plant can grow. The higher the zone number, the warmer the climate. So if a plant is "hardy to zone 4" and you garden in zone 5, that plant will survive in your yard. If, however, you're in zone 3, it's too cold to grow that particular plant. Find out your hardiness zone.
                            
                        </p>

                    </div>

                </div>
                <div class="bagian">
                    <div class="angka">
                        <p>8</p>
                    </div>
                    <div class="desc">
                        <p><b>Feed plants regularly.</b><br>
                            
                            We've already talked about the importance of starting with great soil, but that soil works best in concert with regular boosts of high-quality nutrition for your plants
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>
    
</body>
<footer>
    <div class="ft">
        <img src="<?php echo base_url()?>assets/img/vector 2.png">
        <h4>StartPlant</h4>
    </div>
    <div class="xx">
        <h3>Now, Everyone can grow their own plant</h3>
    </div>
    <div class ="grs1"></div>
    <div class="vv">
        <h4>Articel</h4>
        <p>Email Marketing Campaigns</p>
    </div>
    <div class="vs">    
        <h4>About</h4>
        <p> Our Story Benefits</p>
    </div>    
    <div class="lk">
        <h4>Follow Us</h4>
        <a class="xx" href ="https://www.instagram.com/rikyfaturozii/"><img src="<?php echo base_url()?>assets/img/fb.png"></a>
        <a class="xx" href ="https://www.instagram.com/rikyfaturozii/"><img src="<?php echo base_url()?>assets/img/ig.png"></a>
    </div> 
    <p class = "oo">Copyright © 2021. StarPlant BY Kelompok 4</p>
</footer>
</html>