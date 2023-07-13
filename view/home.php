<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/image/ban-ghe-cafe-banner-1024x512.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/image/Beige & Grey Minimalist Fashion Big Sale Banner Landscape (1).png" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/image/Beige & Grey Minimalist Fashion Big Sale Banner Landscape.png" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i=0;
            foreach($spnew as $sp){
                extract($sp);
                $hinh=$img_path.$img;
                if(($i==10)||($i==15)||($i==20)){
                    $mr="mr";
                }else{
                    $mr="";
                }
                echo '<div class="boxsp '.$mr.'">
                <div class="row img"><img src="'.$hinh.'" alt=""></div>
                <p>'.$price.'</p>
                <a href="">'.$name.'</a>
            </div>';
            $i+=1;
            }
            ?>
            <!-- <div class="boxsp mr">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
            <div class="boxsp ">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
        </div>
        <div class="row">
            <div class="boxsp mr">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
            <div class="boxsp ">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
        </div>
        <div class="row">
            <div class="boxsp mr">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>
            <div class="boxsp ">
                <div class="row img"><img src="view/image/balo10.jpg" alt=""></div>
                <p>$30</p>
                <a href="">mũ</a>
            </div>-->
        </div> 
    </div>
    <div class="boxphai ">
        <?php
        include_once "boxright.php";
        ?>
    </div>
</div>