<template>
  
  <h1 class="text-center">Home</h1><br>
  <p class="d-flex justify-content-center" style="color:black">{{ message }}

    <button @click="decrement">-</button>
    &nbsp;{{ number }}&nbsp;
    <button @click="increment">+</button>
  </p>

</template>



<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

const message = "Hello I Am an Inertia App";

const number = ref(0)

function increment() {
  number.value++;
}

function decrement() {
  number.value--;
}

</script>

<script>
  export default {
    layout: Layout
  }
</script>

<style>
p{
  color: white;
}

</style>



