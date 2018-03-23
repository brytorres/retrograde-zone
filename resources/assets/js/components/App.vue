<template>
  <div>
    <Navbar></Navbar>
    <router-view></router-view>
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

