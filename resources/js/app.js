require('./bootstrap');

window.Vue = require('vue').default

require('intellinews-admin-vue-components').default.install(Vue);

const app = new Vue({
    el: '#app',
});
