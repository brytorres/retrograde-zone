<template>
  <div style="height: 100%;">
    <div class="wrapper">
      <Navbar></Navbar>
      <transition name="fade">
        <router-view></router-view>
      </transition>
    </div>
    <Footeroonie></Footeroonie>
  </div>
</template>

<script>
  import Navbar from "./Navbar";
  import Footeroonie from "./Footer";

  export default {
    components: {'Navbar': Navbar, 'Footeroonie': Footeroonie}
  }
</script>

