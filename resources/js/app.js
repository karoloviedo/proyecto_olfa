
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// import VueRouter from "vue-router"
//import Vue from 'vue'
import router from './routes'

// Vue.use(VueRouter)
// const router = new VueRouter({
//     routes,
//     mode: 'history'
// })


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('client', require('./components/Client.vue').default);


Vue.mixin({
    data() {
        return {
            app_url: process.env.MIX_APP_URL
        }
    },
})


const app = new Vue({
    el: '#app',
     router
});