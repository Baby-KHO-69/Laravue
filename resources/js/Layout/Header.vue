<script setup>

import { Link } from '@inertiajs/vue3';
</script>

<template>


<nav class="bg-gray-900 w-full shadow-2xl relative opacity-90 ">
  
  <div class="  w-full  left-0 flex items-center justify-between pr-10
  align-items-center  p-5  text-2xl">

    <a href="" class=" left-0 flex items-center space-x-3 rtl:space-x-reverse">
        <img src="../Img/Wire Logo _ SVG _ Real Company _ Alphabet, Letter W Logo (1).jpg" class="h-10 w-10  rounded-md" alt="Webo Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
            Web<span class=" text-2xl">O</span>    
        </span>
        <div class="border-l-2 border-white h-10 "></div>
    </a>

    <div class="hidden w-full md:block md:w-auto min-[60vh] left-0 top-[9%] flex-items center px-5 " id="navbar-default">
      <ul class="font-medium flex md:items-center md:gap-[4vw] gap-4 md:min-h-fit md:w-auto p-4 md:p-0 mt-4 border rounded-lg bg-gray-50 md:flex-row md:space-x-8 
       md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 ">

        <li class="flex place-items-center ">
          
          <a href="/" class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
           md:hover:text-blue-700 md:p-0 dark:text-white  dark:hover:bg-gray-700
            dark:hover:text-white md:dark:hover:bg-transparent hover:underline underline-offset-4" aria-current="page">Home
          </a>
        </li>

        <li class="flex flex-row gap-2 place-items-center  border-l-2 border-white h-10 pl-2">
          <a href="#contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
           md:hover:text-blue-700 md:p-0 dark:text-white  dark:hover:bg-gray-700
            dark:hover:text-white md:dark:hover:bg-transparent hover:underline underline-offset-4">Contact Us
          </a>
        </li>
        <div class="flex flex-row gap-5 ">
          <Link href="/SignIn"
       class="text-blue-500 border-2 border-white w-20 h-10 flex justify-center place-items-center rounded-lg hover:border-blue-500 hover:text-white hover:transition ease-in-out delay-100"> Sign In
      </Link>

      <Link href="/SignUp"
       class="text-blue-500 border-2 border-white w-24 h-10 flex  justify-center place-items-center rounded-lg hover:border-blue-500 hover:text-white hover:transition ease-in-out delay-100"> Sign Up
      </Link>
        </div>
     

        
      </ul>
    </div>
     

  </div>

 
</nav>

</template>