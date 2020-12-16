//ミューテーション。ステートを更新する役割。いわゆるセッター

const mutations = {
    SET_USER: (state, user) => {
        state.user = user
    },
    RESET_USER: (state) => {
        state.user = null
    },
}

export default mutations
