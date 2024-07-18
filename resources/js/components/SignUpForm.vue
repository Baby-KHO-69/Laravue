<script setup>
import { reactive } from 'vue';

const form = reactive({
  username=null,
  email=null,
  password=null,
  confirmPassword=null,
  
}) ;
const submit = () => {
  console.log("submit");
}

</script>
<template>
    <form @submit.prevent="submitForm">
      <v-text-field v-model="username" label="Username" type="text"></v-text-field>
      <v-text-field v-model="email" label="Email" type="text"></v-text-field>
      <v-text-field v-model="password" label="Password" type="password"></v-text-field>
      <v-text-field v-model="confirmPassword" label="Confirm Password" type="password"></v-text-field>
      <v-btn type="submit" color="primary">Sign Up</v-btn>
    </form>
  </template>
  
  

