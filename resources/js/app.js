import Vue from 'vue'
import VueMeta from 'vue-meta'
import router from './router'
import App from './App.vue'
import store from './store'

import DefaultLayout from './layouts/DefaultLayout.vue'
import ErrorLayout from './layouts/ErrorLayout.vue'
import HomeLayout from './layouts/HomeLayout.vue'

import { BootstrapVue, BootstrapVueIcons } from 'bootstrap-vue'

//awesome-swiperインポート
import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'swiper/swiper-bundle.css'


Vue.use(VueMeta, {
    refreshOnceOnNavigation: true,
})
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)

//Swiperコンポーネント登録
Vue.use(VueAwesomeSwiper, /* { default options with global component } */)

Vue.component('DefaultLayout', DefaultLayout)
Vue.component('ErrorLayout', ErrorLayout)
Vue.component('HomeLayout', HomeLayout)

Vue.component('Swiper', require('./components/Swiper.vue').default);
Vue.component('ExampleComponent', require('./components/ExampleComponent.vue').default);

store.dispatch('auth/setUser', window.currentUser)
const vm = new Vue({
    router,
    store,
    render: (h) => h(App),
}).$mount('#app')
