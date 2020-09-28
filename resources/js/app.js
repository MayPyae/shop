
require('./bootstrap');

window.Vue = require('vue');
import router from './router'
Vue.component('blog-component',require('./components/BlogComponent.vue').default)
const app = new Vue({
    el: '#app',
    router
});
