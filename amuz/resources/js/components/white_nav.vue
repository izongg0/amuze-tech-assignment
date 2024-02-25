

<template>
  <Disclosure as="nav" class="fixed top-0 z-10 w-screen bg-opacity-90 bg-white items-center  ">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 h-16 flex items-center">
      <div class="flex items-center ">
        <div class="flex items-center justify-items-center sm:items-stretch sm:justify-start">
          <!-- 여기에 로고 ! -->
          <div class="flex flex-shrink-0 items-center mr-[150px]">

            <router-link to="/"> <img class="h-8 w-auto" src="../../views/assets/whitelogo.svg" alt="amuze" />
            </router-link>

          </div>

          <div class="hidden sm:ml-6 sm:block  ">
            <div class=" space-x-4">
              <a v-for="item in navigation" :key="item.name" :href="item.href"
                :class="[item.current ? 'border-b-2 pb-[23px]  border-blue-500' : 'border-b-2 border-transparent hover:border-blue-500 pb-[23px] ', 'text-black text-base font-medium px-[50px]  ']"
                :aria-current="item.current ? 'page' : undefined" @click="setCurrent(item)">{{ item.name }}</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="md:w-auto h-[1px] bg-gray-100"></div>

  </Disclosure>
</template>

<script setup>
// import { reactive } from 'vue'

import { Disclosure } from '@headlessui/vue'

import { reactive } from 'vue'

var navigation = reactive([
  { name: '메세지', href: '/message', current: false },
  { name: '크레딧', href: '/credit', current: false },


])




var setCurrent = (item) => {
  navigation.forEach(navItem => {
    if (navItem.name == item.name){

      navItem.current = true
    }else{
      navItem.current = false
    } 

    // navItem.current = navItem.name === item.name;
  });
  navigation = [...navigation]; // 변경을 감지하도록 배열을 다시 할당
}


</script>