require('./bootstrap');

window.Vue = require('vue');

Vue.component('planets', require('./components/Planets.vue'));
Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('footeroonie', require('./components/Footer.vue'));

const app = new Vue({
    el: '#app'
});
