import {createApp} from 'vue'
import routes from '../../router';

import App from './App.vue'
import store from '../store/index'; 


createApp(App).use(store).use(routes).mount("#app")