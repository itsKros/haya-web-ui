<?php include('header.php') ?>


<div class="bg-white h-screen">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg box-shadow w-full sm:w-3/4 md:w-4/6 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-2xl text-center font-thin text-teal-500">Forgot Password?</h1>
                    <p class="my-3 text-sm text-center text-gray-700">
                        We get it, stuff happens. Just enter your email address below and we'll send you a
                        link to reset your password!
                    </p>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="POST" action="#">
                            <div class="flex flex-col mt-4">
                                <input id="email" type="text" class="flex-grow h-8 px-2 border rounded border-grey-400" name="email" value="" placeholder="Email">
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit" class="bg-teal-500 hover:bg-teal-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4 text-xs">
                            <a class="no-underline hover:underline text-teal-500 text-xs" href="signup.php">Create Account Now</a>
                        </div>
                        <div class="text-center text-xs mt-1">
                            Already have an account? 
                            <a class="no-underline hover:underline text-teal-500 text-xs" href="login.php">Signin Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url('https://images.pexels.com/photos/874242/pexels-photo-874242.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-size: cover; background-position: center center;"></div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>