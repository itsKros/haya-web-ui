<?php include('header.php') ?>

<!--Page title section starts-->
<section id="pageTitleSec" class="in-grid py-10 md:py-24 bg-cover" style="background-image:url(https://images.pexels.com/photos/6267/menu-restaurant-vintage-table.jpg);">
  <div class="container mx-auto flex flex-col justify-end w-full mx-auto" style="z-index: 1;position: relative;">
    <h2 class="text-white text-center text-4xl">Places</h2>
  </div>
</section>
<!--Page Title section ends-->


<!--Search section starts-->
<section id="searchSec" class="bg-gray-100 py-5 md:py-10">
 <div class="container mx-auto flex flex-wrap flex-row w-4/6 justify-between content">
    <div class="relative text-gray-600 w-5/6">
      <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 w-full pr-10 rounded-full text-sm focus:outline-none shadow focus:shadow-md">
      <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
          <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
        </svg>
      </button>
    </div>
    <div id="filterBtn" class="w-1/6 md:w-32 bg-white rounded-full flex flex-row justify-center md:justify-between items-center px-5 shadow hover:shadow-md cursor-pointer">
      <span class="hidden md:inline">Filter</span>
      <i class="fas fa-sliders-h text-teal-500"></i>
    </div>
  </div>
</section>
<!--Search section ends-->

<!--Filter section starts-->
<section id="filterSec" class="bg-white py-5 md:py-10" style="display:none;">
 <div class="container mx-auto flex flex-wrap flex-row w-5/6 justify-between shadow content md:px-16 px-0 py-5">
    <!--Categories Start-->
    <div class="w-full md:w-1/3 flex flex-wrap flex-col md:flex-row px-4">   
        <h1 class="text-xl  w-full md:h-8 md:mt-2 mt-0 py-2 mb-4">Categories</h1>

        <div class="flex w-full justify-between mx-auto mb-4">
          <label class="custom-label flex w-1/2">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Central</span>
          </label>
          <label class="custom-label flex w-1/2">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> West</span>
          </label>
        </div>

        <div class="flex w-full justify-between mx-auto mb-4">
          <label class="custom-label flex w-1/2">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> East</span>
          </label>
          <label class="custom-label flex w-1/2">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> North</span>
          </label>
        </div>
    </div> 
    <!--Categories Ends-->

    <!--Cuisines Start-->
    <div class="w-full md:w-2/3 flex flex-wrap flex-col md:flex-row px-4">   
        <h1 class="text-xl w-full py-2 mb-4">Cuisines</h1>

        <!--First Row starts-->
        <div class="flex flex-wrap w-full justify-between mx-auto mb-4">
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Malay</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Korean</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Lebanese</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> International</span>
          </label>
        </div>
        <!--First Row ends-->

        <!--Second Row starts-->
        <div class="flex flex-wrap w-full justify-between mx-auto mb-4">
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> North Indian</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Mexican</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Steakhouse</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Indonesian</span>
          </label>
        </div>
        <!--Second Row ends-->

        <!--THird Row starts-->
        <div class="flex flex-wrap w-full justify-between mx-auto mb-4">
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Local</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Asian</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Fusion</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Japanese</span>
          </label>
        </div>
        <!--Third Row ends-->

        <!--Fourth Row starts-->
        <div class="flex flex-wrap w-full justify-between mx-auto mb-4">
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> KIOSK</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Dessert</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Western</span>
          </label>
          <label class="custom-label flex w-1/2 md:w-1/4 mb-4 md:mb-0">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none"> Vietnamese</span>
          </label>
        </div>
        <!--Fourth Row ends-->
    </div> 
    <!--Cuisines Ends-->
  </div>
</section>
<!--Filter section ends-->



<!--Popular Places section starts-->
<section id="popularPlacesSec" class="container mx-auto w-full md:w-5/6 bg-white py-20 md:pt-10 md:pb-30">
  <div class="w-full content">
    <h5 class="text-gray-800 text-3xl mb-3 text-center w-full">Explore <span class="text-teal-500">Places</span></h5>
    <h5 class="text-gray-800 text-3xl mb-3 text-center w-full"><span class="text-teal-500">Explore</span> Deals</h5>
    <p class="text-gray-600 mb-10 w-full text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-center bg-no-repeat img" style="background-image:url('assets/imgs/restaurant/kinta.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1"><a href="single-place.php">Kintamani Indonesian Restaurant</a></h3>
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
      <a href="single-place.php" class="kbtn transparent icon right  block w-32 text-gray-800">View Offers <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <!-- Single places starts -->

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-no-repeat bg-center img" style="background-image:url('assets/imgs/restaurant/hannas.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1"><a href="single-place.php">Hanna's Fusion & Japnese Restaurant</a></h3>
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
      <a href="single-place.php" class="kbtn transparent icon right  block w-32 text-gray-800">View Offers <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <!-- Single places starts -->

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-no-repeat bg-center img" style="background-image:url('assets/imgs/restaurant/yolo.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1"><a href="single-place.php">YOLO</a></h3>
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
      <a href="single-place.php" class="kbtn transparent icon right  block w-32 text-gray-800">View Offers <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <!-- Single places starts -->

  <!-- Single places starts -->
  <div class="w-full flex flex-col md:flex-row mb-4 box-shadow content">
    <div class="w-full h-auto md:w-1/6 bg-cover bg-no-repeat bg-center img" style="background-image:url('assets/imgs/restaurant/gogo.jpg')">
      <img src="assets/imgs/west.jpg" class="invisible" alt="" srcset="">
    </div>
    <div class="w-full h-auto md:w-5/6 p-5">
      <h3 class="text-lg mb-1"><a href="single-place.php">GoGo Frank (Takashimaya)</a></h3>
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
