require('./bootstrap');

import Vue from 'vue'

import App from './vue/app'
import taybo from './vue/table'
import count from './vue/count'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faPlusSquare, faTrash)
Vue.use(ElementUI);
Vue.component('font-awesome-icon', FontAwesomeIcon)

const app = new Vue({
    el: '#app',
    components: {App, taybo, count}
});