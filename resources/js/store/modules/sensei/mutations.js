//ミューテーション。ステートを更新する役割。いわゆるセッター

const mutations = {
    SET_USER: (state, user) => {//アクションから受け取ったuserをステートにセット
        state.sensei = user
    },
    RESET_USER: (state) => {
        state.sensei = null
    },
}

export default mutations
