require('./bootstrap');


window.Vue = require('vue').default;

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)

let routes =[
    { path: '/chat-tele', component:require('./components/home/ChatTele.vue').default},
    { path: '/data-user', component:require('./components/user/User.vue').default},
    { path: '/data-ba', component:require('./components/pelayanan/Bakas.vue').default }
]

Vue.component('dashboard-component', require('./components/home/Dashboard.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router
});
