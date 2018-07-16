require('./bootstrap');

window.Vue = require('vue');

Vue.component('top', require('./components/Top.vue'));
Vue.component('wrapper', require('./components/Wrapper.vue'));
Vue.component('logado', require('./components/Logado.vue'));
Vue.component('formulario', require('./components/formulario/Form.vue'));
Vue.component('campo', require('./components/formulario/Campo'));

const app = new Vue({
    el: '#app'
});
