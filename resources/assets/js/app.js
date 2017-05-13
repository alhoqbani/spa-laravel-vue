import './bootstrap';
import router from './routes.js';

window.Vue = require('vue');

new Vue({
    el: '#app',

    data: {
        test: 'Hamoud'
    },

    router
});
