import {createApp} from 'vue'
import routes from '../../router';

import App from './App.vue'
import store from '../store/index'; // Vuex 스토어 import


createApp(App).use(store).use(routes).mount("#app")