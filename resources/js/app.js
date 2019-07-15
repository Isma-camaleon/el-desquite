require('./bootstrap');
require('admin-lte/dist/js/adminlte.beta.min.js');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#appAdmin',
});
