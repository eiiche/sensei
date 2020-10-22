import Vue from 'vue'
import VueRouter from 'vue-router'
import Register from '../pages/Register.vue'
import Login from '../pages/Login.vue'
import Top from '../pages/Top.vue'
import Home from '../pages/Home.vue'
import store from '../store'

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
        meta: { layout: 'home', requiresAuth: true },
    },
    {
        path: '/',
        name: 'top',
        component: Top,
        meta: { layout: 'home' },
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
