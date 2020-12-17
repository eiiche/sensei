import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'
import sensei from './modules/sensei'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {},
    getters: {},
    mutations: {},
    actions: {},
    modules: {
        auth,
        sensei
    },
})
