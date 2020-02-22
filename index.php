<?php 
    include "header.php";
?>

<div class="directorSec">
    <div class="heading">
        <h1>director's desk</h1>
    </div>
    <div class="dirSection">
        <div class="imgbox">
            <img src="image/director.jpg" alt="">
        </div>

        <div class="content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ducimus quas, quasi et repudiandae ut! Ipsa, obcaecati non aspernatur qui eos consectetur error numquam libero, cupiditate ut soluta in reprehenderit sint assumenda eaque? Itaque, ullam?
            </p>
            <a href="#"> Read More</a>
        </div>
    </div>
</div>

<?php 
    include "course.php";
?>

<!-- --------------ACCORDION SECTION -------------- -->
<div class="newsSection container-fluid">
    <div class="newsArea">
        <div class="wrapper">
            
            <h3>Why choose us ?</h3>
            <div class="accordion_wrap">
                <div class="accordion_header">
                    <h5>What is your name ?</h5>
                </div>
                <div class="accordion_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem. Nisi labore vel quia ducimus soluta incidunt atque cupiditate officiis.</p> 
                </div>
            </div>
            <div class="accordion_wrap">
                <div class="accordion_header">
                    <h5>What is your father name ?</h5>
                </div>
                <div class="accordion_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem. Nisi labore vel quia ducimus soluta incidunt atque cupiditate officiis.</p> 
                </div>
            </div>
            <div class="accordion_wrap">
                <div class="accordion_header">
                    <h5>What is your mother name?</h5>
                </div>
                <div class="accordion_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem. Nisi labore vel quia ducimus soluta incidunt atque cupiditate officiis.</p> 
                </div>
            </div>
        </div>

        <div class="upcoming_box">
            <h3>Upcoming events</h3>
            <div class="upcoming">
                <div class="date">
                    <span>22</span>
                    <span class="month">Mar</span>
                </div>
                <div class="detail"><span>HSC Board Examination</span></div>
            </div>
            <div class="upcoming">
                <div class="date">
                    <span>28</span>
                    <span class="month">Apr</span>
                </div>
                <div class="detail"><span>SSC Board Examination</span></div>
            </div>
            <div class="upcoming">
                <div class="date">
                    <span>13</span>
                    <span class="month">Sep</span>
                </div>
                <div class="detail"><span>Pharmacy Examination</span></div>
            </div>
            
        </div>
    </div>
</div>

<!-- ------------------/ ACCORDION SECTION ---------------- -->

<!-- COUNTER SECTION -->

<!-- <div class="counting_section">
    makdoomshaikh
    <div class="slant"></div>
    <div class="slanted_div"></div>
</div> -->
    

<!-- / COUNTER SECTION -->
<?php
    include "footer.php";
?>