require('./bootstrap');

import Vue from 'vue';

import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import MessageForm from './components/MessageForm.vue';

const app = new Vue({
    el: '#app',
    components: { MessageForm }
});
