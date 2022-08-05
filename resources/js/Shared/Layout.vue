<template>

<nav id="navbar-things" class="navbar navbar-expand-lg bg-dark" >
  <a class="navbar-brand" href="/">PBA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <Link class="nav-link" :class="{'selected' : $page.component=='Home'}" href="/">Home</Link>
      </li>
      <li class="nav-item">
          <Link class="nav-link" :class="{'selected' : $page.component=='Players'}" href="/players">Players</Link>
      </li>
      <li class="nav-item">
          <Link class="nav-link" :class="{'selected' : $page.component=='Sponsors'}" href="/sponsors">Sponsor</Link>
      </li>
    </ul>
    
  </div>
  
</nav>
  
<slot/>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>




.navbar-brand{
  margin-left: 5%;
  color: rgb(235, 22, 51);
}

#navbarSupportedContent{
  margin-left: 70%;
}

.nav-link{
  color: rgb(252, 252, 252);
}

.selected {
  color: rgb(235, 22, 51);
  border-bottom: 3px solid; 
  font-weight: bolder;
}

</style>