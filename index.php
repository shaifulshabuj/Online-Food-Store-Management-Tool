<html>
<title>Food Zone</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.fz-bar-block .fz-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="fz-sidebar fz-bar-block fz-card-2 fz-top fz-xlarge fz-animate-left" 
	 style="display:none;z-index:2;width:20%;min-width:300px" 
	 id="mySidebar">
  <a href="javascript:void(0)" onclick="fz_close()"
     class="fz-bar-item fz-button">|||</a>
  <a href="#food" onclick="fz_close()" class="fz-bar-item fz-button">Food</a>
  <a href="form.html" onclick="fz_close()" class="fz-bar-item fz-button">Order Here</a>
  <a href="#about" onclick="fz_close()" class="fz-bar-item fz-button">About</a>
  
</nav>

<!-- Top menu -->
<div class="fz-top">
  <div class="fz-white fz-xlarge" style="max-width:1200px;margin:auto">
    <div class="fz-button fz-padding-16 fz-left" onclick="fz_open()">&#9776;</div>
    <a href="form.html" class="fz-right fz-padding-16 fz-bar-item fz-button">Sign In Or Login</a>
    <div class="fz-center fz-padding-16">FOODZONE</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="fz-main fz-content fz-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="fz-row-padding fz-padding-16 fz-center" id="food">
    <div class="fz-quarter">
      <img src="1.jpg" alt="Food of Puran Dhaka" style="width:100%">
      <h3>The Perfect Morog Polao, A Real Classic Food</h3>
      <p>History start from then Mughol era and continue through Puran Dhaka </p>
	  
    </div>
    <div class="fz-quarter">
      <img src="2.jpg" alt="Food of Puran Dhaka" style="width:100%">
      <h3>Chicken Biriani, Lalbag.</h3>
      <p>Once again, In Puran Dhaka history with food. Visiting Lalbag fort and eat Chicken Biriani make you happy </p>
    </div>
    <div class="fz-quarter">
      <img src="Beauty.jpg" alt="Deshi Drinks" style="width:100%">
      <h3>Beauty Lassi, traditional drinks in Puran Dhaka</h3>
      <p>Lassi makes comfort feel after taking spicy foods.</p>
    </div>
    <div class="fz-quarter">
      <img src="nurani.jpg" alt="Deshi Drinks" style="width:100%">
      <h3>Once Again, puran Dhaka Drinks with nurani sorbot.</h3>
      <p> Special lebur sorbot called nurani sorbot.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="fz-row-padding fz-padding-16 fz-center">
    <div class="fz-quarter">
      <img src="pizza.jpg" alt="Western Foods in Bangladesh" style="width:100%">
      <h3>Pizza, Western Food in Bangladesh,</h3>
      <p>Pizza is a popular food item in Dhaka. It also called hangout food.</p>
    </div>
    <div class="fz-quarter">
      <img src="pasta.jpg" alt="Western Foods in Bangladesh" style="width:100%">
      <h3>Chinese Food item, Pasta.</h3>
      <p>Pasta at khilgaon, It is mainly inherited food of Chine but also popular in Bangladesh.</p>
    </div>
    <div class="fz-quarter">
      <img src="icecream.jpg" alt="Western Drinks in Bangladesh" style="width:100%">
      <h3>Icecream, A Real Classic item for all ages of people.</h3>
      <p>Icecreams are popular in Bangladesh for many years.</p>
    </div>
    <div class="fz-quarter">
      <img src="coldcoffe.jpg" alt="Western Drinks in Bangladesh" style="width:100%">
      <h3>Cold Coffe at khilgaon, Dhaka</h3>
      <p>Cold coffe is popular wester drinks in Bangladesh.</p>
    </div>
	<p>For viewing more items <a href="#" class="fz-bar-item fz-black fz-button">Click Here</a><p>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="fz-container fz-padding-32 fz-center">  
    <h3>About</h3><br>
    <img src="foodzone.png" alt="FOODZONE" class="fz-image" style="display:block;margin:auto" width="800" height="533">
    <div class="fz-padding-32">
      <h4><b>FoodZone is combining the all food of Bangladesh in one platform.</b></h4>
      <h6><i>Anyone can see the food items, order the items and get news of new food items by sign up here.</i></h6>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="fz-row-padding fz-padding-32">
    <div class="fz-third fz-right">
      <h3>Thanks</h3>
      <p>Powered by karnelock (Shaiful Islam Shabuj)</p>
    </div>
  
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function fz_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function fz_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>