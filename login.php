<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="login.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
  </head>
  <body>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <section class="bg-gray-50 min-h-screen flex items-center justify-center" id="satu">
  <!-- login container -->
  <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
    <!-- form -->
    <div class="md:w-1/2 px-8 md:px-16">
      <h2 class="font-bold text-2xl text-[#002D74]">Login</h2>
      <p class="text-xs mt-4 text-[#002D74]">If you are already a member, easily log in</p>
      
      <form autocomplete="off" action="" class="flex flex-col gap-4" method="post">
        <input type="hidden" id="action" value="login">
        <input class="p-2 mt-8 rounded-xl border" type="text" id="username" value="" placeholder="Username">
        <div class="relative">
          <input class="p-2 rounded-xl border w-full" type="password" id="password" value="" placeholder="Password">
        </div>
        <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300" type="button" onclick="submitDatalog();">Login</button>
      </form>
      <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
        <a href="#">Forgot your password?</a>
      </div>

      <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
        <p>Don't have an account?</p>
        <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300" onclick="toregis()">
        Register</button>
      </div>
    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="eldenring.jpg">
    </div>
  </div>
</section>

<script>
    function toregis(){
        document.getElementById("satu").style.display = "none"
        document.getElementById("dua").style.display = "flex"
    }
</script>


<section class="bg-gray-50 min-h-screen flex items-center justify-center" id="dua">
  <!-- register container -->
  <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
    <!-- form -->
    <div class="md:w-1/2 px-8 md:px-16">
      <h2 class="font-bold text-2xl text-[#002D74] mb-4">Register</h2>
      
      
      <input type="hidden" id="action2" value="register">
        
        <input class="p-2 rounded-xl border w-full mb-4" type="text" id="name2" value="" placeholder="Fullname">
        <div class="relative">
          <input  class="p-2 rounded-xl border w-full mb-4" type="text" id="username2" value="" placeholder="Username">
        </div>

        <div class="relative">
          <input class="p-2 rounded-xl border w-full mb-4" type="password" id="password2" value="" placeholder="Password">
        </div>
        <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300 w-60" onclick="submitData();">Register</button>

      <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
        <hr class="border-gray-400">
        <p class="text-center text-sm">OR</p>
        <hr class="border-gray-400">
      </div>

      <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]">
        <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
          <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
          <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
          <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
          <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
        </svg>
        Login with Google
      </button>
      <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
        <p>Have account?</p>
        <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300" onclick="tologin()">
        Login</button>
      </div>
    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="eldenring.jpg">
    </div>
  </div>
</section>

<script>
//   function user(){
//     if(document.getElementById('username').value != 'farizra'){
//         document.getElementById('user').innerHTML = 'Username Salah';
//     }else{
//         document.getElementById('user').innerHTML = '';
//     }
// }

// // Cek Password
// function pass(){
//     if(document.getElementById('password').value != '1234'){
//         document.getElementById('pass').innerHTML = 'Password Salah';
//     }else{
//         document.getElementById('pass').innerHTML = '';
//     }
// }
    function tologin(){
        document.getElementById("satu").style.display = "flex"
        document.getElementById("dua").style.display = "none"
    }
    </script>
<script src="asset/script.js"></script>
  </body>
</html>