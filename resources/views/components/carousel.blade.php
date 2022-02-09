<div class="flex flex-col justify-center items-center pb-12 relative">

    <div
        class="max-w-4xl mx-auto relative rounded-lg shadow"
        x-data="{ activeSlide: 1, slides: [
            { id: 1, img: '/img/casas/lar_casinhas_01.jpg'},
            { id: 2, img: '/img/casas/foto_10.jpg'},
            { id: 3, img: '/img/casas/foto_11.jpg'},
            { id: 4, img: '/img/casas/foto_12.jpg'},
            { id: 5, img: '/img/casas/foto_13.jpg'},
            { id: 6, img: '/img/casas/foto_14.jpg'},
            { id: 7, img: '/img/casas/foto_15.jpg'},
            { id: 8, img: '/img/casas/foto_16.jpg'},
            { id: 9, img: '/img/casas/foto_17.jpg'},
            { id: 10, img: '/img/casas/foto_18.jpg'},
            { id: 11, img: '/img/casas/foto_19.jpg'},
            { id: 12, img: '/img/casas/foto_20.jpg'},
            { id: 13, img: '/img/casas/foto_21.jpg'},
            { id: 14, img: '/img/casas/foto_22.jpg'},
            { id: 15, img: '/img/casas/foto_23.jpg'},
            ],
            loop() {
                setInterval(() => { this.activeSlide = this.activeSlide === 15 ? 1 : this.activeSlide+1 }, 5000)
            }
        }"
        x-init="loop">

        <div class="relative carousel overflow-hidden">

            <!-- Slides -->
            <template x-for="slide in slides" :key="slide.id">
                <div
                    x-show="activeSlide === slide.id"
                    class="absolute carousel bg-white font-bold text-5xl flex items-center bg-gray-500 text-white rounded-lg bg-cover"
                    :style="`background-image: url(${slide.img})`"
                    x-transition:enter="transition duration-1000"
                    x-transition:enter-start="transform translate-x-full"
                    x-transition:enter-end="transform translate-x-0"
                    x-transition:leave="transition duration-1000"
                    x-transition:leave-start="transform"
                    x-transition:leave-end="transform -translate-x-full">
                </div>
            </template>
        </div>

        <!-- Prev/Next Arrows -->
        <div class="absolute inset-0 flex">
            <div class="flex items-center justify-start w-1/2">
                <button
                    class="bg-green-100 text-green-500 hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 -ml-6"
                    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                    &#8592;
                </button>
            </div>
            <div class="flex items-center justify-end w-1/2">
                <button
                    class="bg-green-100 text-green-500 hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 -mr-6"
                    x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    &#8594;
                </button>
            </div>
        </div>

        <!-- Buttons -->
        <div class="absolute w-full flex items-center justify-center px-4">
            <template x-for="slide in slides" :key="slide.id">
                <button
                    class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-green-600 hover:shadow-lg"
                    :class="{
                  'bg-orange-600': activeSlide === slide.id,
                  'bg-green-300': activeSlide !== slide.id
              }"
                    x-on:click="activeSlide = slide.id"
                ></button>
            </template>
        </div>
        {{--        </div>--}}
    </div>
</div>
