require('./bootstrap');

window.Vue = require('vue');
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./components/App";
import Planets from "./components/Planets";
import About from "./views/About";
import HowToUse from "./views/HowToUse";
import API from "./views/API";

const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "planets",
      component: Planets
    },
    {
      path: "/about",
      name: "About",
      component: About
    },
    {
      path: "/how-to-use",
      name: "HowToUse",
      component: HowToUse
    },
    {
      path: "/api",
      name: "API",
      component: API
    }
  ]
});

const app = new Vue({
    el: '#app',
    components: { App }, router
});
