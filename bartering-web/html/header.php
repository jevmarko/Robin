<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,900;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="hed">
  <header>
    <a href="#" class="logo"><span>R</span><span class="dis">obin</span></a>
    <div class="group">
    <div class="search">
            <span class="icon">
            <ion-icon name="search-outline" class="searchBtn"></ion-icon>
            <ion-icon name="close-outline" class="closeBtn"></ion-icon>
            </span>
        </div>
        <ul class="navigation">
            <li><a href="#">Join us!</a></li>
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
        <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
    </div>
  </header>
  <div class="searchBox"><input type="text" placeholder="search here ..."></div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
  let searchBtn = document.querySelector('.searchBtn');
  let closeBtn = document.querySelector('.closeBtn');
  let searchBox = document.querySelector('.searchBox');
  let navigation = document.querySelector('.navigation');
  let menuToggle = document.querySelector('.menuToggle');
  let header = document.querySelector('header');
  
searchBtn.onclick = function(){
  searchBox.classList.add('active');
  closeBtn.classList.add('active');
  searchBtn.classList.add('active');
  menuToggle.classList.add('hide');
  header.classList.remove('open');

}
closeBtn.onclick = function(){
  searchBox.classList.remove('active');
  closeBtn.classList.remove('active');
  searchBtn.classList.remove('active');
  menuToggle.classList.remove('hide');
}
menuToggle.onclick = function(){
  header.classList.toggle('open');
  searchBox.classList.remove('active');
  closeBtn.classList.remove('active');
  searchBtn.classList.remove('active');
}
</script>
</body>
</html>