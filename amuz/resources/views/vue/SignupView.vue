<template>
    <Frame></Frame>

    <div class="bg-[#F2F4F8] h-auto grid justify-center ">
        <div class="w-[700px] h-auto  ">
            <div class="h-auto grid justify-items-center">

                <img class="w-[219px] mt-[200px] mb-[100px] h-auto" src="../assets/whitelogo.svg" />
                <div class="grid justify-start w-full">

                    <p class="font-bold mb-[14px]">이름</p>
                    <input type="text" v-model="signupinf.signup.name"
                        class="py-2 px-4 rounded-md bg-white w-[700px] mb-[60px] border border-[#CECECE] h-[50px] focus:outline-none focus:ring-0"
                        placeholder="이름을 입력해 주세요" />
                    <p class="font-bold mb-[14px]">아이디</p>
                    <input type="text" v-model="signupinf.signup.id"
                        class="py-2 px-4 rounded-md bg-white w-[700px] mb-[60px] border border-[#CECECE] h-[50px] focus:outline-none focus:ring-0"
                        placeholder="8자 이상, 영문 혹은 영문과 숫자조합" />
                    <p class="font-bold mb-[14px]">비밀번호</p>
                    <input type="text" v-model="signupinf.signup.pw"
                        class="py-2 px-4 rounded-md bg-white w-[700px] mb-[60px] border border-[#CECECE] h-[50px] focus:outline-none focus:ring-0"
                        placeholder="비밀번호를 입력해 주세요" />
                    <p class="font-bold mb-[14px]">비밀번호 확인</p>
                    <input type="text" v-model="verifiedPw.pw"
                        class="py-2 px-4 rounded-md bg-white w-[700px] mb-[60px] border border-[#CECECE] h-[50px] focus:outline-none focus:ring-0"
                        placeholder="비밀번호를 입력해 주세요" />
                    <div class="bg-[#DEDEDE] h-[1px] w-full mb-[40px]"></div>

                    <div class="inline-flex items-center">
                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                            <input type="checkbox" v-model="checked.checked"
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
                        <label class="mt-px font-light text-gray-700 cursor-pointer select-none" htmlFor="check">
                            모든 약관에 동의합니다.
                        </label>
                    </div>
                    <button class="w-full h-[50px] bg-[#5146F0] text-white rounded-md mt-[50px] mb-24"
                        @click="signUp">가입하기</button>


                </div>

            </div>

        </div>


    </div>
</template>
<script setup>
import { reactive } from 'vue'
import axios from 'axios'
import router from '../../../router/index.js'

import Frame from '../../js/components/white_nav.vue'

const checked = reactive({
    checked: false,
})
const verifiedPw = reactive({
    pw: ''
})
const signupinf = reactive({
    signup: {
        name: '',
        email: '',
        password: ''
    }
})

const signUp = () => {

    router.push('/')

    const content = signupinf.signup
    const verifypw = verifiedPw.pw

    // 유효성검사
    if (content.pw == verifypw) {

        if (checked.checked) {

            const formData = new FormData();
            formData.append('name', signupinf.signup.name);
            formData.append('email', signupinf.signup.id);
            formData.append('password', signupinf.signup.pw);
            axios.post('http://localhost:8000/api/v1/register', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            }).then((res) => {
                alert("회원가입이 완료되었습니다.")
                console.log("성공", res);
                router.push('/')

            }).catch((res) => {
                alert("정보를 다시 확인해주세요.")
                console.error("실패 ", res);
            });


        } else {
            alert("약관에 동의해주세요.")
        }


    } else {
        alert("비밀번호를 확인해주세요.")
    }


}
</script>