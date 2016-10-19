<!-- Individual page content must go between the header and footer PHP elements -->

<?php
$page_title='The Big Lebowski'; // Change page title for each page here
$background_class='bg1'; // Change HTML background image class for each page here
$body_class='homepage'; // Change body class for each page here
include ('lebowski-header.html');
?>

    
<!-- Slick Slider -->
<div class="grid grid-pad">
    <div class="col-1-1">
        <div class="slick-slider">
        <div><img src="img/mt1.jpg" /></div>
        <div><img src="img/mt2.jpg" /></div>
        <div><img src="img/mt3.jpg" /></div>
        </div><!-- End slick-slider -->
    </div>
</div>
    
    <!-- Features -->
    <div class="grid grid-pad features">
    
    <div class="col-1-3">
        <a class="feature-pic-link" href="#"><img src="img/nature-01.jpg" /></a>
        <h3 class="feature-title"> Feature Item One</h3>
        <p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam repellendus necessitatibus, ratione adipisci omnis eligendi? Voluptas dolor velit, officia nobis quam veritatis rem! Nisi repellendus quidem pariatur laudantium culpa.</p>
    </div>
    
    <div class="col-1-3">
        <a class="feature-pic-link" href="#"><img src="img/nature-02.jpg" /></a>
        <h3 class="feature-title">Feature Item Two</h3>
        <p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus pariatur quam veritatis commodi voluptatum, obcaecati ab quod consequatur labore ipsum, debitis nesciunt. Quo magnam nisi, earum vitae voluptas dolores libero!</p>
    </div>
    
    <div class="col-1-3">
        <a class="feature-pic-link" href="#"><img src="img/nature-03.jpg" /></a>
        <h3 class="feature-title">Feature Item Three</h3>
        <p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, recusandae deleniti voluptatem quia ea, atque? Odio unde officiis magnam, distinctio, rem deleniti. Libero molestiae voluptatem, dolore provident, ipsam delectus natus.</p>
    </div>
    
    </div><!-- End features -->
      
    
<?php
include ('lebowski-footer.html');
?>