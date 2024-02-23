<template>
  <Frame></Frame>
  <div class="h-screen bg-[#F2F4F8]">

    <Disclosure as="other_nav" class="relative bg-white items-center   ">

      <div class="mt-16   bg-white w-screen md:w-auto  h-16 flex items-center ">
        <div class="flex items-center  ">
          <div class="absolute right-1/4 sm:items-stretch sm:justify-start">
            <div class="hidden sm:ml-6 sm:block">
              <div class=" space-x-4">
                <a v-for="item in navigation_2" :key="item.name"
                  :class="[item.current ? 'bg-[#E1E7FD] text-[#4F44F0]  bg-[#E1E7FD]' : 'text-[#555555] bg-white ', 'rounded-md px-[25px] py-[10px] text-sm font-medium']"
                  :aria-current="item.current ? 'page' : undefined">{{ item.name }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Disclosure>

    <div class="w-full mx-[50px] h-[1px] bg-gray-100 md:w-auto "></div>

    <div class="h-auto w-screen md:w-auto  flex items-start grid justify-items-center px-20  ">

      <p class="text-3xl font-bold mt-[40px] mb-[15px]">크레딧 구매</p>
      <p class="text-[#7B7B7B] mb-[40px]">메시지 전송을 위해 사용할 크레딧 상품을 선택해 주세요</p>

      <div class="flex w-full  h-auto">


        <div class="w-[347px] h-[459px] bg-white py-[50px] px-[30px] mx-[20px]">
          <p class="text-2xl font-bold mb-[8px]">30,000 원</p>
          <p class="text-[#7B7B7B]">총 66,667건 발송가능합니다 </p>
          <p class="text-[#7B7B7B]">1건당 15원에 결제가능합니다</p>
          <div class="flex w-full justify-between mt-[23px]">
            <p class="pt-[5px]">330,000 크레딧</p>
            <div class="rounded-full w-[70px] h-[33px] bg-[#E0EDFF] text-[#2116BF] flex items-center justify-center">+ 10%
            </div>
          </div>
          <div class="bg-[#F4F5F6] rounded-md h-[88px] mt-[40px] p-[20px]  ">
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">기본 크레딧</p>
              <p>300,000</p>
            </div>
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">추가 크레딧</p>
              <p>+ 30,000</p>
            </div>
          </div>
          <button class="w-full h-[50px] bg-[#5146F0] text-white rounded-md mt-[30px]">구매하기</button>
        </div>


        <div class="w-[347px] h-[459px] bg-white py-[50px] px-[30px] mx-[20px]">
          <p class="text-2xl font-bold mb-[8px]">30,000 원</p>
          <p class="text-[#7B7B7B]">총 66,667건 발송가능합니다 </p>
          <p class="text-[#7B7B7B]">1건당 15원에 결제가능합니다</p>
          <div class="flex w-full justify-between mt-[23px]">
            <p class="pt-[5px]">330,000 크레딧</p>
            <div class="rounded-full w-[70px] h-[33px] bg-[#E0EDFF] text-[#2116BF] flex items-center justify-center">+ 10%
            </div>
          </div>
          <div class="bg-[#F4F5F6] rounded-md h-[88px] mt-[40px] p-[20px]  ">
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">기본 크레딧</p>
              <p>300,000</p>
            </div>
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">추가 크레딧</p>
              <p>+ 30,000</p>
            </div>
          </div>
          <button class="w-full h-[50px] bg-[#5146F0] text-white rounded-md mt-[30px]">구매하기</button>
        </div>


        <div class="w-[347px] h-[459px] bg-white py-[50px] px-[30px] mx-[20px]">
          <p class="text-2xl font-bold mb-[8px]">30,000 원</p>
          <p class="text-[#7B7B7B]">총 66,667건 발송가능합니다 </p>
          <p class="text-[#7B7B7B]">1건당 15원에 결제가능합니다</p>
          <div class="flex w-full justify-between mt-[23px]">
            <p class="pt-[5px]">330,000 크레딧</p>
            <div class="rounded-full w-[70px] h-[33px] bg-[#E0EDFF] text-[#2116BF] flex items-center justify-center">+ 10%
            </div>
          </div>
          <div class="bg-[#F4F5F6] rounded-md h-[88px] mt-[40px] p-[20px]  ">
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">기본 크레딧</p>
              <p>300,000</p>
            </div>
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">추가 크레딧</p>
              <p>+ 30,000</p>
            </div>
          </div>
          <button class="w-full h-[50px] bg-[#5146F0] text-white rounded-md mt-[30px]">구매하기</button>
        </div>


        <div class="w-[347px] h-[459px] bg-white py-[50px] px-[30px] mx-[20px]">
          <p class="text-2xl font-bold mb-[8px]">30,000 원</p>
          <p class="text-[#7B7B7B]">총 66,667건 발송가능합니다 </p>
          <p class="text-[#7B7B7B]">1건당 15원에 결제가능합니다</p>
          <div class="flex w-full justify-between mt-[23px]">
            <p class="pt-[5px]">330,000 크레딧</p>
            <div class="rounded-full w-[70px] h-[33px] bg-[#E0EDFF] text-[#2116BF] flex items-center justify-center">+ 10%
            </div>
          </div>
          <div class="bg-[#F4F5F6] rounded-md h-[88px] mt-[40px] p-[20px]  ">
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">기본 크레딧</p>
              <p>300,000</p>
            </div>
            <div class="flex justify-between ">
              <p class="text-[#6E6E6E]">추가 크레딧</p>
              <p>+ 30,000</p>
            </div>
          </div>
          <button class="w-full h-[50px] bg-[#5146F0] text-white rounded-md mt-[30px]">구매하기</button>
        </div>





      </div>
    </div>

  </div>
</template>

<script setup>
// import { reactive } from 'vue'
import Frame from '../../js/components/white_nav.vue'



import { reactive } from 'vue'



const navigation_2 = reactive([
  { name: '크레딧 구매', href: '/message', current: true },
  { name: '크레딧 내역', href: '/credit', current: false },



])




</script>