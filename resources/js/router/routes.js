import Home from "../src/pages/home.vue";
import Dashboard from "../src/pages/dashboard.vue";
import VueRouter from "vue-router";

const routes = [
    {
        path: '/',
        component: Home,
        name: 'home'
    },
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'Dashboard'

    },
];


export default routes;
