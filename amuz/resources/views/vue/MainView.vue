<template>
    <Disclosure as="nav" class="fixed top-0 w-screen z-10  bg-black items-center  ">
        <div class="   bg-black mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 h-16 flex items-center">
            <div class="flex items-center ">

                <div class="flex items-center justify-items-center sm:items-stretch sm:justify-start">
                    <!-- 여기에 로고 ! -->
                    <div class="flex flex-shrink-0 items-center mr-[150px]">
                        <router-link to="/"> <img class="h-8 w-auto" src="../assets/amuze_logo.svg" alt="amuze" />

                        </router-link>

                    </div>

                    <div class="hidden sm:ml-6 sm:block  ">
                        <div class=" space-x-4">
                            <a v-for="item in navigation" :key="item.name" :href="item.href"
                                :class="[item.current ? ' text-white  ' : 'text-gray-300  hover:text-white  ', ' text-base font-medium px-[50px]']"
                                :aria-current="item.current ? 'page' : undefined" @click="setCurrent(item)">{{ item.name
                                }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="md:w-auto h-[1px] bg-gray-500"></div>

    </Disclosure>



    <!-- 메인 블랙화면 -->
    <div class="w-screen md:w-auto h-screen bg-black flex">

        <!-- 블랙화면 왼쪽 -->
        <div class="h-screen w-[900px] bg-black flex items-center grid justify-items-center">

            <div class="text-nowrap w-[450px]">
                <p class="text-xl text-white mb-[15px]">인터넷 문자메세지 전송의 모든 것</p>
                <p
                    class="text-5xl font-bold bg-gradient-to-r from-[#9FBAFD] to-[#4E81FF] bg-clip-text text-transparent mb-[15px]">
                    가장 빠르고 안정적인</p>
                <p
                    class="text-5xl font-bold bg-gradient-to-r from-[#9FBAFD] to-[#4E81FF] bg-clip-text text-transparent mb-[15px]">
                    문자 서비스 SENDGO</p>
                <router-link to="/signup">
                    <button class="text-white mt-[40px] mx-[10px] rounded-full bg-[#6250FF] w-[206px] h-[65px]">

                        회원가입</button>
                </router-link>

                <router-link to="/login"> <button
                        class="text-white mt-[40px] mx-[10px] rounded-full bg-[#242424] w-[206px] h-[65px]">로그인</button>
                </router-link>

            </div>

        </div>

        <!-- 블랙화면 오른쪽 -->
        <div class="h-screen w-[900px] overflow-y-hidden bg-black flex">
            <!-- 오른쪽의 첫번째 -->


            <div class="h-screen w-[300px] bg-black flex items-end grid justify-items-center">
                <div class="w-[240px] h-[443px] bg-[#6250FF] rounded-3xl	">
                    <img src="../assets/firstbox.png">

                </div>
                <div class="w-[240px] h-[388px]  rounded-t-3xl flex items-end	">
                    <img src="../assets/secondicon.png">


                </div>
            </div>
            <!-- 오른쪽의 두번째 -->

            <div class="h-screen overflow-y-hidden w-[300px] bg-black flex grid justify-items-center">
                <div class="w-[240px] h-[444px] mb-[50px] bg-[#37383E] rounded-b-3xl flex justify-end	">

                    <img src="../assets/thirdbox.png" class="w-[700px]">

                </div>
                <div class="w-[240px] h-[600px] 	 bg-[#6250FF] rounded-t-3xl	">
                    <img src="../assets/fourthbox.png" class="w-[700px]">


                </div>

            </div>
            <!-- 오른쪽의 세번째 -->

            <div class="h-screen overflow-y-hidden w-[300px] bg-black flex grid justify-items-center">

                <div class="w-[240px] h-[250px] bg-[#6250FF] rounded-b-3xl flex justify-end">
                    <img src="../assets/fifthbox.png" class="w-[700px] w-full h-auto self-end justify-end">


                </div>
                <div class="w-[240px] h-[609px] bg-[#37383E] rounded-3xl overflow-visible ">
                    <img src="../assets/lasticon.png" class="">




                </div>
            </div>


        </div>

    </div>
    <!-- 홈화면 두번째 페이지 -->
    <div class="w-auto md:w-auto h-auto bg-white flex items-start grid justify-items-center">
        <img src="../assets/poong.png" class="mt-44 w-[64px] h-[64px] mb-[50px]">
        <p class="text-4xl font-bold   mb-[15px]">
            복잡한 인터넷 문자 서비스를</p>
        <p class="text-4xl font-bold  mb-[15px]">
            간편하게 만나보세요</p>

        <p class="text-xl text-[#5C5C5C] text-black mb-[70px]">모든 종류의 인터넷 SMS를 편리하게. </p>


        <div class="flex">
            <div class="w-[444px] h-[349px] mx-4 bg-[#F0F0FA] rounded-3xl flex items-center grid justify-items-center">
                <div class="grid justify-items-center ">

                    <img src="../assets/message_write.png" class="w-[64px] h-[64px] mb-[15px]">
                    <p class="font-semibold">메시지 용량에</p>
                    <p class="mb-[10px] font-semibold">제한 받지 않고 전송</p>
                    <p class="text-[#6E7583]">메시지 용량 걱정없이 단문 메시지는</p>
                    <p class="text-[#6E7583]">물론 장문, 사진까지 전송이 가능합니다.</p>
                </div>


            </div>
            <div class="w-[444px] h-[349px] mx-4 bg-[#F0F0FA] rounded-3xl flex items-center grid justify-items-center">
                <div class="grid justify-items-center ">

                    <img src="../assets/postimage.png" class="w-[64px] h-[64px] mb-[15px]">
                    <p class="font-semibold">모든 종류의</p>
                    <p class="mb-[10px] font-semibold">문자 메시지를 한번에</p>
                    <p class="text-[#6E7583]">메시지 용량 걱정없이 단문 메시지는</p>
                    <p class="text-[#6E7583]">물론 장문, 사진까지 전송이 가능합니다.</p>
                </div>


            </div>
            <div class="w-[444px] h-[349px] mx-4 bg-[#F0F0FA] rounded-3xl flex items-center grid justify-items-center">
                <div class="grid justify-items-center ">

                    <img src="../assets/soundimage.png" class="w-[64px] h-[64px] mb-[15px]">
                    <p class="font-semibold">간편한 광고</p>
                    <p class="mb-[10px] font-semibold">문자 메시지 설정</p>
                    <p class="text-[#6E7583]">메시지 용량 걱정없이 단문 메시지는</p>
                    <p class="text-[#6E7583]">물론 장문, 사진까지 전송이 가능합니다.</p>
                </div>


            </div>

        </div>

        <img src="../assets/bulb.png" class="mt-44 w-[64px] h-[64px] mb-[50px]">
        <p class="text-4xl font-bold  mb-[15px]">
            샌드고의 다양한</p>
        <p class="text-4xl font-bold   mb-[15px]">
            기능들을 살펴보세요</p>
        <p class="text-xl text-[#5C5C5C] text-black mb-[70px]">고객님들의 입장에서 고민하였습니다. </p>

        <div class="flex">
            <div class="relative w-[626px] h-[597px] bg-[#F8F9FA] mx-[50px] rounded-3xl lex items-center justify-center ">
                <div class="absolute top-16 left-12">
                    <p class="text-2xl mb-[5px] font-bold	">자주 전송하는 내용이 있나요?</p>
                    <p class="text-2xl text-[#727B88] mb-[5px]	">템플릿으로 메시지 내용을</p>
                    <p class="text-2xl text-[#727B88]	">저장하여 간편하게 전송하세요.</p>
                </div>
                <img src="../assets/sendmessage.png" class=" absolute bottom-0 right-0">

            </div>
            <div class="relative w-[750px] h-[597px] bg-[#E9EBFD] rounded-3xl ">
                <div class="absolute top-16 left-12">
                    <p
                        class="text-2xl font-bold mb-[5px] bg-gradient-to-r from-[#7F3ADD] to-[#6264F6] bg-clip-text text-transparent	">
                        크레딧 구매 시, 보너스 크레딧 증정</p>
                    <p class="text-2xl text-[#7079CB] mb-[5px]	">크레딧 상품을 구매하면 상품 별</p>
                    <p class="text-2xl text-[#7079CB]	">보너스 크레딧을 증정합니다</p>
                </div>
                <img src="../assets/won.png" class=" absolute bottom-0 right-[55px]	">

            </div>

        </div>

        <!--  -->


        <div class="flex mt-[30px]">
            <div class="relative w-[855px] h-[720px] bg-[#DBE5FF] mx-[50px] rounded-3xl lex items-center justify-center ">
                <div class="absolute top-16 left-12">
                    <p class="text-2xl mb-[5px] font-bold text-[#375984]">전송 후 바로 발송확인 기능</p>
                    <p class="text-2xl text-[#698AB1] mb-[5px]	">메세지 전송 후 바로 발송현황 창에서</p>
                    <p class="text-2xl text-[#698AB1]	">현재 메시지 전송 현황을 알려드립니다</p>
                </div>
                <img src="../assets/wjqtn.png" class=" absolute bottom-0 right-0">

            </div>
            <div class="relative w-[520px] h-[720px] bg-[#FAFAEE] rounded-3xl ">
                <div class="absolute top-16 left-12">
                    <p class="text-2xl font-bold mb-[5px] text-[#6C3111] ">누르면 바로 전송완료</p>
                    <p class="text-2xl text-[#6F6F6F] mb-[5px]	">누르자마자 수신인에게</p>
                    <p class="text-2xl text-[#6F6F6F]	">바로 전달됩니다.</p>

                </div>
                <img src="../assets/first-first.png" class=" absolute bottom-0 right-[70px]	">

            </div>


        </div>
        <img src="../assets/check.svg" class="mt-44 w-[64px] h-[64px] mb-[50px]">
        <p class="text-4xl font-bold  mb-[15px]">
            정확도와 다양함은 물론</p>
        <p class="text-4xl font-bold   mb-[15px]">
            신뢰할 수 있는 보안까지</p>
        <p class="text-xl text-[#5C5C5C] text-black mb-[70px]">고객님들의 간편함을 고민하였습니다. </p>

        <div class="flex">
            <div class="relative w-[688px] h-[597px] bg-[#DCEFF4] mx-[50px] rounded-3xl lex items-center justify-center ">
                <div class="absolute top-16 left-12">
                    <p class="text-2xl mb-[5px] font-bold	">일반 SMS는 기본, 카카오톡까지</p>
                    <p class="text-2xl text-[#727B88] mb-[5px]	">종류와 상관없이 모두 전송해 드립니다</p>
                </div>
                <img src="../assets/alarm.png" class=" absolute bottom-[40px] right-[150px]">

            </div>
            <div class="relative w-[688px] h-[597px] bg-[#FBFBEF] rounded-3xl ">
                <div class="absolute top-16 left-12">
                    <p class="text-2xl font-bold mb-[5px] text-[#431B06]">강력한 보안을 제공합니다</p>
                    <p class="text-2xl text-[#696156] mb-[5px]	">신뢰할 수 있는 최신의 보안 시스템을</p>
                    <p class="text-2xl text-[#696156]	">보적용하여 개인정보를 보호합니다</p>
                </div>
                <img src="../assets/lock.png" class=" absolute bottom-0 right-[100px]	">

            </div>

        </div>
        <div
            class=" w-[1420px] h-[495px] bg-[#F8F9FA] mx-[50px] mb-[100px] mt-[50px] rounded-3xl grid justify-items-center ">
            <div class=" ">
                <p class="text-2xl mb-[5px] font-bold mt-[50px]	">일반 SMS는 기본, 카카오톡까지</p>
                <p class="text-2xl text-[#727B88] mb-[5px]	">종류와 상관없이 모두 전송해 드립니다</p>
            </div>
            <img src="../assets/tntls.png" class=" ">

        </div>


    </div>
    <div class="w-screen md:w-auto h-screen bg-black grid justify-items-center flex items-center">
        <div class="grid justify-items-center">
            <p
                class="text-6xl font-bold bg-gradient-to-r from-[#B6B7F7] to-[#7FB2FE] bg-clip-text text-transparent mb-[15px]">
                비즈니스 광고의 시작,</p>
            <p
                class="text-6xl font-bold bg-gradient-to-r from-[#B6B7F7] to-[#7FB2FE] bg-clip-text text-transparent mb-[15px]">
                이제 샌드고와 함께 하세요</p>

            <router-link to="/message">
                <button class="text-white mt-[40px] mx-[10px] rounded-full bg-[#6250FF] w-[206px] h-[65px]">메시지
                    바로가기</button>

            </router-link>


        </div>


    </div>
    <div class="md:w-auto h-[1px] bg-gray-500"></div>

    <!-- 하단 첫번째 -->
    <Footer></Footer>
</template>

<script setup>
import Footer from '../../js/components/Footer.vue'
import { Disclosure } from '@headlessui/vue'
import { reactive } from 'vue'

const navigation = reactive([
    { name: '메세지', href: '/message', current: true },
    { name: '크레딧', href: '/credit', current: false }
])

const setCurrent = (item) => {
    navigation.forEach(navItem => {
        navItem.current = navItem.name === item.name;
    });


}







</script>