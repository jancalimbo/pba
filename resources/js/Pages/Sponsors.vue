<template>
<h1>Sponsors</h1>

<hr>
<div id="table-sponsors">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody v-for="sponsor in sponsors" :key="sponsor.id">
    <tr>
      <th scope="row">{{ sponsor.id }}</th>
      <td>{{ sponsor.name }}</td>
      <td>{{ sponsor.address }}</td>
      <td>{{ sponsor.amount }}</td>
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
    sponsors: []
  }
}
</script>

<style scoped>
#table-sponsors{
  margin-left: 300px;
  margin-right: 300px;
}

h1{

  margin-left: 100px;
  margin-top: 20px;
}
</style>