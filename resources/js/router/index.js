import Vue from 'vue'
import VueRouter from 'vue-router'
import Register from '../pages/Register.vue'
import Login from '../pages/Login.vue'
import Top from '../pages/Top.vue'
import Home from '../pages/Home.vue'
import Talkroom from '../pages/Talkroom.vue'
import SenseiPage from '../pages/SenseiPage.vue'
import List from '../pages/List.vue'
import store from '../store'
import BookConfirm from "../pages/BookConfirm";

Vue.use(VueRouter)

const routes = [
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: { layout: 'default', requiresGuest: true },
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: { layout: 'default', requiresGuest: true },
    },
    {
        path: '/home',
        name: 'home',
        component: Home,
        meta: { layout: 'home'},
    },
    {
        path: '/list',
        name: 'list',
        component: List,
        meta: { layout: 'home'},
    },
    {
        path: '/sensei_page/:id',
        name: 'sensei_page',
        component: SenseiPage,
        meta: { layout: 'home' },
    },
    {
        path: '/talkroom',
        name: 'talkroom',
        component: Talkroom,
        meta: { layout: 'home', requiresAuth: true },//要認証
    },
    {
        path: '/',
        name: 'top',
        component: Top,
        meta: { layout: 'home'},
    },
    {
        path: '/bookconfirm',
        name: 'bookconfirm',
        component: BookConfirm,
        meta: { layout: 'home',requiresAuth: true  },//要認証
    },
    {
        path: '*',
        meta: { layout: 'error', error: 404 },
    },

]

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
})

router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.requiresAuth)) {
        if (!store.getters['auth/loggedIn']) {
            next({ path: '/login' })
        } else {
            next()
        }
    } else if (to.matched.some((record) => record.meta.requiresGuest)) {
        if (store.getters['auth/loggedIn']) {
            next({ path: '/' })
        } else {
            next()
        }
    } else {
        next()
    }
})

export default router
