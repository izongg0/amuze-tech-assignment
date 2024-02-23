
import Main from '../views/MainView.vue'
import Message from '../views/MessageView.vue'
import Credit from "../views/CreditView.vue"
import { createRouter, createWebHistory } from 'vue-router'


const routes = [
  {
    path: '/',
    name: 'Main',
    component: Main
  },
  {
    path: '/message',
    name: 'Message',
    component: Message
  },
  {
    path: '/credit',
    name: 'Credit',
    component: Credit
  }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router

