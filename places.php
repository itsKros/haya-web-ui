<?php include('header.php') ?>

<!--Hero section starts-->
<section id="pageTitleSec" class="in-grid py-24" style="background:url(assets/imgs/kintaBg.jpeg);">
  <div class="container mx-auto flex flex-col justify-end w-full mx-auto" style="z-index: 1;position: relative;">
    <h2 class="text-white text-center text-4xl">Places</h2>
  </div>
</section>
<!--Hero section ends-->


<!--Region section starts-->
<section id="searchSec" class="bg-gray-100 py-20 md:py-32">
 <div class="container mx-auto flex flex-wrap flex-col md:flex-row w-5/6 content">

    
    <div class="pt-2 relative mx-auto text-gray-600">
        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
          type="search" name="search" placeholder="Search">
        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
          <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>
      </div>
    
  </div>
</section>
<!--Region section ends-->



<!--Popular Places section starts-->
<section id="popularPlacesSec" class="container mx-auto w-full md:w-5/6 bg-white py-20 md:py-32">
  <div class="w-full content">
    <h5 class="text-gray-800 text-3xl mb-3">Popular <span class="text-teal-500">Places</span></h5>
    <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-center bg-no-repeat img" style="background-image:url('assets/imgs/restaurant/kinta.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1">Kintamani Indonesian Restaurant</h3>
      <div class="flex mb-1 rest_info">
        <!-- Address -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>405 Havlock Road</span></p>
        <!-- Category -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>Fusion</span></p>
        <!-- Tag -->
        <p class="text-gray-700 text-xs mr-3"><i class="fas fa-tags block md:inline mr-1 text-teal-500"></i><span>Halal Certified</span>, <span>Deals Available</span></p>
      </div>
      <p class="text-gray-500 text-sm mb-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <a href="" class="kbtn transparent icon right  block w-32 text-gray-800">View Offers <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <!-- Single places starts -->

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-no-repeat bg-center img" style="background-image:url('assets/imgs/restaurant/hannas.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1">Hanna's Fusion & Japnese Restaurant</h3>
      <div class="flex mb-1 rest_info">
        <!-- Address -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>405 Havlock Road</span></p>
        <!-- Category -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>Fusion</span></p>
        <!-- Tag -->
        <p class="text-gray-700 text-xs mr-3"><i class="fas fa-tags block md:inline mr-1 text-teal-500"></i><span>Halal Certified</span>, <span>Deals Available</span></p>
      </div>
      <p class="text-gray-500 text-sm mb-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <a href="" class="kbtn transparent icon right  block w-32 text-gray-800">View Offers <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <!-- Single places starts -->

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-no-repeat bg-center img" style="background-image:url('assets/imgs/restaurant/yolo.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1">YOLO</h3>
      <div class="flex mb-1 rest_info">
        <!-- Address -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>405 Havlock Road</span></p>
        <!-- Category -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>Fusion</span></p>
        <!-- Tag -->
        <p class="text-gray-700 text-xs mr-3"><i class="fas fa-tags block md:inline mr-1 text-teal-500"></i><span>Halal Certified</span>, <span>Deals Available</span></p>
      </div>
      <p class="text-gray-500 text-sm mb-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <a href="" class="kbtn transparent icon right  block w-32 text-gray-800">View Offers <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <!-- Single places starts -->

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-no-repeat bg-center img" style="background-image:url('assets/imgs/restaurant/gogo.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1">GoGo Frank (Takashimaya)</h3>
      <div class="flex mb-1 rest_info">
        <!-- Address -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>405 Havlock Road</span></p>
        <!-- Category -->
        <p class="text-gray-700 text-xs mr-3"><i class="far fa-map block md:inline mr-1 text-teal-500"></i><span>Fusion</span></p>
        <!-- Tag -->
        <p class="text-gray-700 text-xs mr-3"><i class="fas fa-tags block md:inline mr-1 text-teal-500"></i><span>Halal Certified</span>, <span>Deals Available</span></p>
      </div>
      <p class="text-gray-500 text-sm mb-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <a href="" class="kbtn transparent icon right  block w-32 text-gray-800">View Offers <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <!-- Single places starts -->

</section>

<!--Popular Places section ends-->

<?php include('footer.php') ?>
