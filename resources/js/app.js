require('./bootstrap');
window.Vue = require('vue').default;

Vue.component('v-input', require('./components/Forms/VInput.vue').default);
Vue.component('v-input-error', require('./components/Forms/VInputError.vue').default);
Vue.component('v-auth-card', require('./components/Cards/VAuthCard.vue').default);
Vue.component('v-dropdown', require('./components/Dropdown/VDropdown.vue').default);
Vue.component('v-profile-tabs', require('./components/Tabs/VProfileTabs').default);
Vue.component('v-tabs', require('./components/Tabs/VTabs').default);
Vue.component('v-tab', require('./components/Tabs/VTab').default);

const app = new Vue({
    el: '#app',
});
