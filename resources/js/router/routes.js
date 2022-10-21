import Home from '../src/pages/home.vue';
import Dashboard from '../src/pages/dashboard.vue';
import product from '../src/pages/product.vue';
import editProduct from '../src/pages/editProduct.vue';

const routes = [{
	path: '/',
	component: Home,
	name: 'home',
},
{
	path: '/dashboard',
	component: Dashboard,
	name: 'Dashboard',
},
{
	path: '/product-show',
	component: product,
	name: 'product',
},
{
	path: '/product-edit/:id',
	component: editProduct,
	name: 'editProduct',
}];

export default routes;
