<template>
  <div style="height: 100%;">
    <div class="wrapper">
      <Navbar></Navbar>
      <router-view></router-view>
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

