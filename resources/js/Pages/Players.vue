<template>
<h1>Players</h1>

<hr>
<div id="table-players">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Quote</th>
    </tr>
  </thead>
  <tbody v-for="player in players" :key="player.id">
    <tr>
      <th scope="row">{{ player.id }}</th>
      <td>{{ player.name }}</td>
      <td>{{ player.age }}</td>
      <td>{{ player.qoutes }}</td>
    </tr>
  </tbody>
</table>
</div>

</template>



<script setup>
import Layout from '../Shared/Layout.vue';

</script>

<script>
export default {
  layout: Layout,
  props: {
    players: []
  }
}
</script>

<style scoped>
#table-players{
  margin-left: 300px;
  margin-right: 300px;
}

h1{

  margin-left: 100px;
  margin-top: 20px;
}
</style>