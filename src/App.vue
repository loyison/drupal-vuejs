<template>
<div id="app">
  <nav class="navbar  fixed-top navbar-expand-lg justify-content-between">
    <a class="navbar-brand" href="#"><img src="./assets/logo.png" alt=" EDM LOGO"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="nav ml-auto navbar-nav">
        <li class="nav-item active">
          <router-link v-bind:to="'/'">Meals</router-link>
        </li>
        <li class="nav-item">
          <router-link v-bind:to="'/about'">about me</router-link>
        </li>
      </ul>
    </div>
  </nav>
  <router-view ></router-view>
</div>
</template>
<script>
export default {
  name: 'app'
}
</script>
<!-- styling for the component -->
<style type="text/css">
@import url('./assets/style.css');
</style>
