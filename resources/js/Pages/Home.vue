<script setup>
import Header from '../Layout/Header.vue';
import Hero from '../Layout/Hero.vue';
import Footer from '../Layout/Footer.vue';
</script>



<template>
<div class=" w-full flex  flex-col md:min-h-svh h-full">
    <div class="  bg-gray-100 flex flex-col col-span-3">

     <div class=" ">
        <Header/>
     </div>

    <div class=" ">
        <Hero/>  
     </div>
    
     
     <div class="">
    <Footer/>
        </div>
    
    </div>
    </div>
    
    
    
</template>

