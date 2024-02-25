<template>
    <div class="bg-[#222222] md:w-auto h-[150px] flex items-center justify-center ">
        <div class="w-7/12 flex justify-between ">
            <img src="../../views/assets/amuze_logo.svg" class="w-[142px] h-[44px]">

            <div class="flex">
                <router-link to="/message">

                    <button class="text-white mr-[60px]">메세지</button>

                </router-link>
                <router-link to="/credit">

                    <button class="text-white">크레딧</button>

                </router-link>

            </div>
            <div class="w-[110px]"></div>

        </div>


    </div>


    <div class="md:w-auto h-[1px] bg-gray-500"></div>

    <!-- 하단 두번째 -->
    <div class="bg-[#222222] md:w-auto h-[166px]  flex  justify-center">
        <div class="w-7/12 justify-between mt-[40px]">
            <p class="text-white">문의 사항이 있으신가요? 텔레그램을 통해 고객센터로 문의 해 보세요</p>
            <p class="text-white">Telegram: @shdevelop</p>

        </div>


    </div>
</template>
