require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './src/app.vue';
import router from './router/index';
import axios from 'axios';
import VueMeta from 'vue-meta'

Vue.use(VueMeta)
Vue.use(VueRouter, axios);

const app = new Vue({
	el: '#app',
	router,
	components: {
		App,
	},
});
