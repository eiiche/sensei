<template>
    <swiper ref="mySwiper" :options="swiperOptions">
        <div v-for="(image, index) in images"
             :key="index">
            <swiper-slide><img :src="image.image" class="image"></swiper-slide>
        </div>
        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
    </swiper>
</template>

<script>
    export default {
        name: 'carrousel',
        props: [
            'images'
        ],
        data() {
            return {
                swiperOptions: {
                    pagination: {
                        el: '.swiper-pagination',
                    },
                    spaceBetween : 20,
                    loop:true,
                    centeredSlides:true,
                    slidesPerView:6,
                    //レスポンシブ対応
                    breakpoints: {
                        1200: {
                            slidesPerView: 2
                        },
                        600: {
                            slidesPerView: 1.2,
                            spaceBetween: 0
                        }
                    },
                    //矢印追加
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    }
                }
            }
        },
        computed: {
            swiper() {
                return this.$refs.mySwiper.$swiper
            }
        },
        mounted() {
            console.log('Current Swiper instance object', this.swiper)
            this.swiper.slideTo(3, 1000, false)
        }
    }
</script>
