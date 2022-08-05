

<template>
  <div id="home-area">
    <h1 id="home-title">Panaytayon Basketball Association</h1>

    <!-- <p id="catchphrase">Letting you read what you don't need to know.</p> -->
  <!-- <p>{{ message }}</p> -->
  </div>
  
</template>

<script setup>
import Layout from '../Shared/Layout.vue';

</script>

<script>
export default {
  layout: Layout
}
</script>

<style scoped>
#home-area {
  background: url('../../../public/court.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  width: 100vw;
  height: 93vh;
}

#home-title {
  padding-top: 20vh;
  margin-left: 60vw;
  margin-right: 10vw;
}

#catchphrase{
  padding-top: 190px;
  color: white;
  font-size: 20px;
  margin-left: 35vw;
  margin-right: 35vw;
}
</style>

