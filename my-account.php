<?php include('header.php') ?>

<div class="w-full flex flex-row flex-wrap">

    <!-- Begin Navbar -->
    <div class="w-full md:w-1/4 lg:w-1/5 p-5 bg-white shadow-lg ">
        <div class=" bg-white">
            <img class="border border-indigo-100 shadow-lg rounded-full w-3/6 md:w-full mx-auto" src="http://lilithaengineering.co.za/wp-content/uploads/2017/08/person-placeholder.jpg">
            <div class="pt-2 mt-5 w-full text-center text-xl text-gray-600">
            Jon Doe 
            </div>
            <div class="pt-1 mt-1 w-full text-center text-sm text-gray-600">
                <i class="fas fa-envelope mr-2 text-teal-500"></i>jondoe@haya.com
            </div>
            <div class="pt-1 mt-1 w-full text-center text-sm text-gray-600">
                <i class="fas fa-phone-alt mr-2 text-teal-500"></i>12347568
            </div>
        </div>
        <div class="w-full flex flex-col hover:cursor-pointer">
            <form class=" w-5/6 mx-auto" method="POST" action="#">
                <div class="flex flex-col mt-4">
                    <input id="old_password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="old_password" required placeholder="Old Password">
                </div>
                <div class="flex flex-col mt-4">
                    <input id="new_password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="new_password" required placeholder="New Password">
                </div>
                <div class="flex flex-col mt-4">
                    <input id="cnf_password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="cnf_password" required placeholder="Confirm Password">
                </div>
                <div class="flex flex-col mt-8">
                    <button type="submit" class="bg-teal-500 hover:bg-teal-700 text-white text-sm font-semibold py-2 px-4 rounded">
                        Change Password
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Navbar -->
    
    <div class="w-full md:w-3/4 lg:w-4/5 p-5 md:px-12 ">
        <!--Offers section starts-->
        <section id="offersSec" class="container mx-auto w-full md:w-5/6 bg-white ">
        <div class="w-full content">
            <h5 class="text-gray-800 text-3xl my-3 text-center w-full">Redeem <span class="text-teal-500">History</span></h5>
        </div>

        <!-- Single Redeem starts -->
        <a href="" class="w-full flex mb-4 hover:shadow-md rounded-lg border border-gray-200 offer content">
            <div class="w-1/3 md:w-1/12 flex items-center p-2 img ">
                <img src="assets/imgs/restaurant/kinta.jpg" class="w-full" alt="" srcset="">
            </div>
            <div class="w-2/3 h-auto md:w-11/12 py-2 px-2">
                <h3 class="text-lg mb-1">50% off buffet lunch or dinner</h3>
                <p class="text-gray-700 text-sm mb-1">
                    Kintamani Indonesian Restaurant
                </p>
                <p class="text-gray-500 font-normal text-xs ">
                    2019-11-13 07:02:40
                </p>
            </div>
        </a>
        <!-- Single Redeem ends -->

        <!-- Single Offers starts -->
        <a href="" class="w-full flex mb-4 hover:shadow-md rounded-lg border border-gray-200 offer content">
            <div class="w-1/3 md:w-1/12 flex items-center p-2 img ">
                <img src="assets/imgs/restaurant/hannas.jpg" class="w-full" alt="" srcset="">
            </div>
            <div class="w-2/3 h-auto md:w-11/12 py-2 px-2">
                <h3 class="text-lg mb-1">Every 2 paying adults, 1 kid dines for free.</h3>
                <p class="text-gray-700 text-sm mb-1">
                    Hanna's Fusion & Japnese Restaurant
                </p>
                <p class="text-gray-500 font-normal text-xs ">
                    2019-11-13 07:02:40
                </p>
            </div>
        </a>
        <!-- Single Offers ends -->

        <!-- Single Redeem starts -->
        <a href="" class="w-full flex mb-4 hover:shadow-md rounded-lg border border-gray-200 offer content">
            <div class="w-1/3 md:w-1/12 flex items-center p-2 img ">
                <img src="assets/imgs/restaurant/yolo.jpg" class="w-full" alt="" srcset="">
            </div>
            <div class="w-2/3 h-auto md:w-11/12 py-2 px-2">
                <h3 class="text-lg mb-1">50% off buffet lunch or dinner</h3>
                <p class="text-gray-700 text-sm mb-1">
                    YOLO
                </p>
                <p class="text-gray-500 font-normal text-xs ">
                    2019-11-13 07:02:40
                </p>
            </div>
        </a>
        <!-- Single Redeem ends -->

        <!-- Single Offers starts -->
        <a href="" class="w-full flex mb-4 hover:shadow-md rounded-lg border border-gray-200 offer content">
            <div class="w-1/3 md:w-1/12 flex items-center p-2 img ">
                <img src="assets/imgs/restaurant/gogo.jpg" class="w-full" alt="" srcset="">
            </div>
            <div class="w-2/3 h-auto md:w-11/12 py-2 px-2">
                <h3 class="text-lg mb-1">Every 2 paying adults, 1 kid dines for free.</h3>
                <p class="text-gray-700 text-sm mb-1">
                    Hanna's Fusion & Japnese Restaurant
                </p>
                <p class="text-gray-500 font-normal text-xs ">
                    2019-11-13 07:02:40
                </p>
            </div>
        </a>
        <!-- Single Offers ends -->


        </section>
        <!--Offers section ends-->
    </div>


</div>


<?php include('footer.php') ?>