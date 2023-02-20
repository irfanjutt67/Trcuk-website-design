<link rel="stylesheet" type="text/css" href="common/header.css">

                <!-------------------- Nav Start ------------------>
  <nav>
    <div class="navbar">
      <i class="fas fa-bars"></i>
      <div class="logo"><a href="truckindex.php"><img src="image/logo.png"></a>
      </div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <i class="fas fa-times"></i>
        </div>
        
        <!-------------------- Nav tags Start ------------------>

        <ul class="links"">
          <li><a href="truckindex.php">HOME</a></li>
          <li><a href="sevicess.php">SERVICES</a></li>
          <li><a href="becometrucker.php">BECOME A TRUCKER</a></li>
          <li><a href="becomecustomer.php">BECOME A CUSTOMER</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="contct.php">CONTACT</a></li>
        </ul>
      </div>

      <!-------------------- Search box Start ------------------>

      <div class="search-box" style="z-index:100;">
        <i class="fas fa-search"></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
    </div>
  </nav>
  <script>  // search-box open close js code
    let navbar = document.querySelector(".navbar");
    let searchBox = document.querySelector(".search-box .fa-search");
    // let searchBoxCancel = document.querySelector(".search-box .bx-x");
    
    searchBox.addEventListener("click", ()=>{
      navbar.classList.toggle("showInput");
      if(navbar.classList.contains("showInput")){
        searchBox.classList.replace("fa-search" ,"fa-times");
      }else {
        searchBox.classList.replace("fa-times" ,"fa-search");
      }
    });
    
    // sidebar open close js code
    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector(".navbar .fa-bars");
    let menuCloseBtn = document.querySelector(".nav-links .fa-times");
    menuOpenBtn.onclick = function() {
    navLinks.style.left = "0";
    }
    menuCloseBtn.onclick = function() {
    navLinks.style.left = "-100%";
    }
    
    
    // sidebar submenu open close js code
    // let htmlcssArrow = document.querySelector(".htmlcss-arrow");
    // htmlcssArrow.onclick = function() {
    //  navLinks.classList.toggle("show1");
    // }
    // let moreArrow = document.querySelector(".more-arrow");
    // moreArrow.onclick = function() {
    //  navLinks.classList.toggle("show2");
    // }
    // let jsArrow = document.querySelector(".js-arrow");
    // jsArrow.onclick = function() {
    //  navLinks.classList.toggle("show3");
    // }
     </script>