<?php include('header.php') ?>

<!--Page title section starts-->
<section id="pageTitleSec" class="in-grid py-10 md:py-24 bg-cover" style="background-image:url(https://images.pexels.com/photos/6267/menu-restaurant-vintage-table.jpg);">
  <div class="container mx-auto flex flex-col md:flex-row w-full mx-auto text-center md:text-left" style="z-index: 1;position: relative;">
    <div class="rest_image_wrap mb-4 md:mb-0 md:mx-2 flex flex-col justify-center items-center w-full md:w-1/6">
      <img src="assets/imgs/restaurant/kinta.jpg" class="w-3/6 md:w-5/6 rounded-full" alt="">
    </div>
    <div class="rest_desc_wrap md:mx-2 flex flex-col justify-end w-full md:w-5/6">
      <h2 class="rest_name text-white md:text-2xl text-base mb-1 font-semibold">Kintamani Indonesian Restaurant</h2>
      <div class="rest_info flex flex-col md:flex-row flex-wrap mb-3">
        <p class="text-xs text-white font-semibold md:mr-2 md:mb-0 mb-1">
          <i class="far fa-clock font-semibold"></i>
          <span>Opening Hours: </span>
          <span class="font-normal">12:00 PM-02:00 PM - 05:00 PM-09:00 PM</span>
        </p>
        <p class="text-xs text-white font-semibold md:mr-2 md:mb-0 mb-1">
          <i class="fas fa-utensils font-semibold"></i>
          <span>Cuisines: </span>
          <span class="font-normal">Indonesian</span>
        </p>
        <p class="text-xs text-white font-semibold md:mr-2 md:mb-0 mb-1">
          <i class="fas fa-car font-semibold"></i>
          <span>Amenties: </span>
          <span class="font-normal">Halal Certified, Deals Available</span>
        </p>
      </div>
      <p class="rest_detail text-white text-xs md:text-sm w-full md:w-4/6 mb-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        Consequuntur dolorum eveniet veritatis aperiam voluptate praesentium, illo aliquam. 
        Sapiente molestiae harum aut rem ab, tenetur tempora, iure itaque expedita modi.
      </p>
      <div class="rest_contact btnGroup">
        <a href="" class="bg-white hover:bg-grey justify-between md:w-4 text-teal-500 font-bold py-2 px-4 rounded-full  inline-flex items-center call">
          <i class="fas fa-phone-alt"></i>
          <span>Call</span>
        </a>
        <a href="" class="bg-white hover:bg-grey justify-between md:w-4 text-teal-500 font-bold py-2 px-4 rounded-full  inline-flex items-center direction">
          <i class="fas fa-location-arrow"></i>
          <span>Direction</span>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Page Title section ends-->



<!--Redeem section starts-->
<section id="redeemSec" class="container mx-auto w-full md:w-5/6 bg-white py-20 md:pt-10 md:pb-30">
    

    <div class="block flex flex-col bg-white box-shadow rounded-lg w-full md:w-5/6 p-6 mx-auto">
        <div class="w-full content mb-10 ">
            <h5 class="text-gray-800 text-3xl mb-3 w-full"><span class="text-teal-500">50% off buffet lunch or dinner</span></h5>
            <p class="text-gray-600 mb-3 w-full ">
                T&C: Valid for dine in only. Not valid on 11 & 12 May, 15 & 16 June, 24, 25 & 31 December 2019.
                Not valid in conjuction with other discount, promotion or deals.
            </p>
            <p class="text-teal-500 font-medium text-base ">
                Valid Till: 31/12/2019
            </p>
        </div>
        <form class="w-full">
            <div class="mb-4">
                <label for="customer_code" class="block mb-2 text-sm text-gray-800">Enter Customer's Code</label>
                <input type="text" name="customer_code" id="customer_code" class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" autocomplete="email" required>
            </div>
            <div class="mb-4">
                <label for="vendor_code" class="block mb-2 text-sm text-gray-800">Enter Vendor's Code</label>
                <input type="text" name="vendor_code" id="vendor_code" class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" autocomplete="email" required>
            </div>
            
            <div class="block md:flex items-center justify-between">
                <button type="submit" class="align-middle bg-teal-500 hover:bg-teal-600 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">REDEEM</button>
            </div>
        </form>
    </div>
    

</section>
<!--Offers section ends-->

<?php include('footer.php') ?>
