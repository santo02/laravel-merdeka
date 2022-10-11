require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";

import App from "./src/app.vue";
import Navbar from "./src/component/navbar.vue";
import Home from "./src/pages/home.vue";
import router from "./router/index";
import VueMeta from "vue-meta";

Vue.use(VueRouter);
Vue.use(VueMeta);

const app = new Vue({
    el: "#app",
    router,
    components: { App },
});

