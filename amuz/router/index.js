
import Main from '../resources/views/vue/MainView.vue'
import Credit from '../resources/views/vue/CreditView.vue'
import Message from '../resources/views/vue/MessageView.vue'
import { createRouter, createWebHistory } from 'vue-router'


const routes = createRouter({
  history: createWebHistory(),
  routes: [

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
})

// const routes = [
//   history: createWebHistory(),

//   {
//     path: '/',
//     name: 'Main',
//     component: Main
//   },
//   {
//     path: '/message',
//     name: 'Message',
//     component: Message
//   },
//   {
//     path: '/credit',
//     name: 'Credit',
//     component: Credit
//   }
// ]

// const router = createRouter({
//     history: createWebHistory(process.env.BASE_URL),
//     routes
//   })
  
  export default routes

