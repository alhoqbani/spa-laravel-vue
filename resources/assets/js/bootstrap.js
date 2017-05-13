import Vue from 'vue';
window.Vue = Vue;

import axios from 'axios';
window.axios = axios;

import VueRouter from 'vue-router';
window.Vue.use(VueRouter);

import Form from './utilities/Form.js'
window.Form = Form;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
