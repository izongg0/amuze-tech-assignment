<template>
    <Frame></Frame>

    <div class="bg-[#F2F4F8] h-screen grid justify-center ">
        <div class="w-[700px] h-auto  ">
            <div class="h-auto grid justify-items-center">

                <img class="w-[219px] mt-[200px] mb-[100px] h-auto" src="../assets/whitelogo.svg" />
                <div class="grid justify-start w-full">

                    <div
                        class="flex w-[700px] h-[50px] py-2 px-4 rounded-md bg-white w-[700px] mb-[30px] border border-[#CECECE]">

                        <img src="../assets/id.svg" alt="">
                        <input type="text" v-model="logininf.loginform.email"
                            class=" focus:outline-none w-full focus:ring-0" placeholder="아이디를 입력해주세요" />
                    </div>


                    <div
                        class="flex w-[700px] h-[50px] py-2 px-4 rounded-md bg-white w-[700px] mb-[30px] border border-[#CECECE]">

                        <img src="../assets/pw.svg" alt="">
                        <input type="text" v-model="logininf.loginform.password"
                            class="w-full focus:outline-none focus:ring-0" placeholder="비밀번호(영문, 숫자, 특수문자 포함 8~30자)" />
                    </div>


                    <!-- 아이디 저장 등 -->
                    <div class="flex justify-between items-center">


                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                                <input type="checkbox"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-800 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-white hover:before:opacity-10"
                                    id="check" />
                                <span
                                    class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </label>
                            <label class="mt-px font-light text-[#1C1C1C] cursor-pointer select-none" htmlFor="check">
                                아이디 저장
                            </label>
                        </div>

                        <div class="flex">

                            <p class="text-[#1C1C1C] font-light">아이디 찾기</p>
                            <p class=" text-[#1C1C1C] font-light mx-[8px]"> | </p>
                            <p class="text-[#1C1C1C] font-light">비밀번호 찾기</p>

                        </div>
                    </div>




                    <button class="w-full h-[50px] bg-[#5146F0] text-white rounded-md mt-[50px] mb-24"
                        @click="login">로그인</button>

                    <div class="flex w-full grid justify-items-center">
                        <div class="flex">
                            <p class="mr-[20px]">계정이 없으신가요? </p>

                            <router-link to="/signup">
                                <p class="mr-[20px] text-[#5146F0] underline">회원가입 하기 </p>

                            </router-link>

                        </div>


                    </div>
                </div>

            </div>

        </div>


    </div>
</template>
<script setup>
import store from '../../store/index'; // Vuex 스토어 import

import Frame from '../../js/components/white_nav.vue'
import { reactive } from 'vue'
import axios from 'axios'
import router from '../../../router/index.js'

const logininf = reactive({
    loginform: {
        email: '',
        password: ''
    }
})


const login = () => {


    const content = logininf.loginform

    // 유효성검사


    const formData = new FormData();
    formData.append('email', content.email);
    formData.append('password', content.password);

    axios.post('http://localhost:8000/api/v1/login', formData, {
        headers: {
            'Content-Type': 'multipart/form-data',
        },
    }).then((res) => {
        const token = res.data['token']
        const email = res.data['email']

        console.log("성공", res);
        store.dispatch('login', token);
        router.push('/')

        store.dispatch('login', { token, email });


    }).catch((res) => {
        alert("정보를 다시 확인해주세요.")
        console.error("실패 ", res);
    });


}

</script>