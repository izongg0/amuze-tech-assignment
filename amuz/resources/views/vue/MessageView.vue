<template>
  <Frame></Frame>




  <!-- -------------- -->




  <Disclosure as="other_nav" class="  relative bg-white items-center  ">

    <div class="mt-16 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 h-16 flex items-center ">
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
  <div class="md:w-auto h-[1px] bg-gray-100"></div>


  <div class="h-auto w-screen md:w-auto bg-[#F2F4F8] flex items-start grid justify-items-center">
    <div class="p-[70px] bg-white rounded-3xl w-[1223px] h-auto mt-[50px]  grid justify-items-center  ">

      <p class="text-3xl font-bold mt-[40px]">메시지 전송</p>
      <div class="flex mt-[50px]">
        <button class="text-white rounded-2xl bg-[#4F44F0] mx-[10px] w-[333px] h-[66px]">문자 메시지</button>
        <button class="text-[#555555] rounded-2xl mx-[10px] bg-[#F5F6FA] w-[333px] h-[66px]">알림톡 (카카오)</button>
        <button class="text-[#555555] rounded-2xl mx-[10px] bg-[#F5F6FA] w-[333px] h-[66px]">친구톡 (카카오)</button>

      </div>
      <div class="w-full grid justify-items-start mt-[30px] mb-[30px]">
        <p class="text-[#525252] text-base">- 간편하게 한 화면에서 단문, 장문, 장문 포토메세지를 발송할 수 있습니다.</p>
        <p class="text-[#525252] text-base">- 90byte 초과 시 장문문자로 자동 전환되며, 최대 2,000byte까지 작성이 가능합니다.</p>
      </div>

      <div class="w-full mx-[50px] h-[1px] bg-gray-100 mb-[30px]"></div>


      <div class="flex w-full">

        <!-- 왼쪽 -->
        <div class="grid w-7/12 h-auto bg-transparent">
          <p class="mb-[15px] font-bold">수신번호</p>
          <div class="flex mb-[15px]">

            <input type="text" v-model="message.content.receiver_number"
              class="py-2 px-4 rounded-md bg-[#F4F5F6] w-[439px] h-[50px] focus:outline-none focus:ring-0"
              placeholder="휴대폰번호 (숫자만 입력)" />
            <button class="text-[#FFFFFF] rounded-md mx-[10px] bg-[#4F44F0] w-[114px] h-[50px]">+ 추가</button>

          </div>

          <div class="w-full h-[200px] border border-[#CECECE] rounded-md bg-transparent">


          </div>

          <div class="flex mt-[15px] mb-[25px]">
            <button
              class="border border-[#CECECE] rounded-md w-1/3 h-[50px] mr-[5px] flex items-center justify-center text-[#7B7B7B]"><img
                src="../assets/getuser.svg">주소록 불러오기

            </button>
            <button
              class="border border-[#CECECE] rounded-md w-1/3 h-[50px] mx-[5px] flex items-center justify-center text-[#7B7B7B]">
              <img src="../assets/file.svg">파일 불러오기
            </button>
            <button
              class="border border-[#CECECE] rounded-md w-1/3 h-[50px] ml-[5px] flex items-center justify-center text-[#7B7B7B]">
              <img src="../assets/recent.svg">최근 전송 내역
            </button>
          </div>
          <div class="w-full h-[1px] bg-gray-100 mb-[25px]"></div>
          <p class="mb-[15px] font-bold">발신번호</p>

          <input type="text" v-model="message.content.sender_number"
            class="py-2 px-4 rounded-md bg-[#F4F5F6] w-full h-[50px] focus:outline-none focus:ring-0"
            placeholder="전송할 발신번호 선택" />

          <div class="w-full h-[1px] bg-gray-100 mb-[25px] mt-[25px]"></div>
          <p class="mb-[15px] font-bold">메세지 입력</p>

          <div class="w-full h-auto border border-[#CECECE] rounded-md p-[20px] bg-[#F6F6F6]">

            <input type="text" v-model="message.content.title"
              class="py-2 px-4 rounded-md bg-white w-full border border-[#CECECE] h-[50px] focus:outline-none focus:ring-0"
              placeholder="제목을 입력해주세요. (단문 SMS는 제외, 최대 30byte)" />

            <div class="flex justify-between mt-[20px] mb-[20px]">
              <button class="text-[#FFFFFF] rounded-full mx-[10px] bg-[#5E2BFF] w-[101px] h-[35px]">단문 SMS</button>
              <div class="flex">
                <p class="text-[#5E2BFF]">0</p>
                <p>/</p>
                <p>90byte</p>
                <img src="../assets/reload.svg" class="ml-[10px]">
              </div>

            </div>

            <div class="w-full  border border-[#CECECE] rounded-md p-[20px] bg-white p-[15px]">


              <textarea
                class="py-2 px-4 rounded-md bg-transparent w-full  h-[250px] focus:outline-none focus:ring-0 resize-none"
                v-model="message.content.content"
                placeholder="내용을 입력해 주세요. 90byte 초과 시 장문 문자로, 이미지 추가 시 포토 문자로 자동 전환 됩니다."></textarea>
              <div class="flex justify-end mt-[8px]">
                <button class="text-[#646464] rounded-full mx-[10px] bg-[#F5F5F5] w-[101px] h-[35px]">치환코드</button>
                <button class="text-[#646464] rounded-full mx-[10px] bg-[#F5F5F5] w-[101px] h-[35px]">템플릿</button>
                <button class="text-[#646464] rounded-full mx-[10px] bg-[#F5F5F5] w-[101px] h-[35px]">문자도구</button>


              </div>





            </div>



          </div>
          <div class="w-full h-[1px] bg-gray-100 mb-[25px] mt-[25px]"></div>

          <div class="flex justify-between">
            <p class="mt-[5px]">광고성 문자(080 수신거부번호 포함)</p>
            <div class="flex justify-between items-center" @click="message.content.isad = !message.content.isad">
              <div class="w-16 h-10 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out"
                :class="{ 'bg-green-400': message.content.isad }">
                <div class="bg-white w-8 h-8 rounded-full shadow-md transform duration-300 ease-in-out"
                  :class="{ 'translate-x-6': message.content.isad, }"></div>
              </div>
            </div>

          </div>


          <div class="w-full h-[1px] bg-gray-100 mb-[25px] mt-[25px]"></div>
          <p class="mb-[15px]">이미지 추가</p>
          <div class="flex items-center">
            <div class="w-[100px] mr-[10px] ">
              <label for="fileInput">
                <img src="../assets/addimg.svg" class="mb-[15px]" />
              </label>
              <input id="fileInput" type="file" class="hidden" @change="handleFileUpload">

            </div>
            <img v-if="img.image" :src="img.image" class="mb-2 w-[100px] h-[100px]" />

          </div>


          <p class="text-[#797979]">- 이미지는 최대 3장까지 첨부 가능합니다.</p>
          <p class="text-[#797979]">- 이미지 파일 형식은 JPG, PNG, GIF만 가능합니다.</p>





          <!-- <input type="file" @change="handleFileUpload"> -->
          <!-- <button @click="uploadImage">Upload Image</button> -->





        </div>

        <!-- 오른쪽 -->
        <div class=" w-5/12 h-auto bg-transparent p-[30px]">

          <div class=" fixed top-48 w-[300px] h-[600px] border-[4px] border-[#4D4D4D] rounded-xl bg-[#EAF8FF]">

          </div>

        </div>




      </div>
      <div class="w-full h-[1px] bg-gray-100 mb-[25px] mt-[25px]"></div>
      <div class="w-full flex justify-start">
        <p class="mb-[15px] font-bold">발송 설정</p>
      </div>

      <div class="flex w-full justify-items-start">
        <button
          class="border mr-[15px] border-[#4F44F0] rounded-md w-[274px] h-[50px] mr-[5px] flex items-center justify-center text-[#4F44F0]"><img
            src="../assets/oncheck.svg">즉시 발송

        </button>
        <button
          class="rounded-md w-[274px] h-[50px] mr-[5px] flex items-center bg-[#F2F5F9] justify-center text-[#747B84]"><img
            src="../assets/nonecheck.svg">예약 발송

        </button>
      </div>
      <div class="w-full h-[1px] bg-gray-100 mb-[25px] mt-[25px]"></div>

      <button class="text-white rounded-xl bg-[#4F44F0]  mx-[10px] w-full h-[50px]" @click="sendMessage">발송하기</button>



    </div>

  </div>
  <Footer></Footer>
</template>

<script setup>
import Frame from '../../js/components/white_nav.vue'
import { Disclosure } from '@headlessui/vue'
import axios from 'axios'
import Footer from '../../js/components/Footer.vue'

import { reactive } from 'vue'
import store from '../../store/index';





const handleFileUpload = (event) => {
  message.content.image = event.target.files[0];
  img.image = URL.createObjectURL(event.target.files[0])
}

const img = reactive({
  image: null
})

const message = reactive({
  content: {
    email: store.state.email,
    receiver_number: '',
    sender_number: '',
    title: '',
    content: '',
    isad: false,
    image: ''

  }
})
const navigation_2 = reactive([
  { name: '메세지 전송', href: '/message', current: true },
  { name: '발신번호 관리', href: '/credit', current: false },
  { name: '주소록 관리', href: '/credit', current: false },
  { name: '발송결과', href: '/credit', current: false },


])




const sendMessage = () => {

  const content = message.content
  const token = store.state.token


  const formData = new FormData();
  formData.append('image', message.content.image);
  formData.append('email', message.content.email);
  formData.append('receiver_number', message.content.receiver_number);
  formData.append('sender_number', message.content.sender_number);
  formData.append('title', message.content.title);
  formData.append('content', message.content.content);
  formData.append('isad', message.content.isad);


  axios.post('/api/messages', formData, {
    headers: {
      'Authorization': 'Bearer ' + token
    }
  })
    .then(response => {
      alert("전송하였습니다.")
      console.log('Image uploaded successfully');
    })
    .catch(error => {
      console.error('Error uploading image', error);
    });

}



</script>  