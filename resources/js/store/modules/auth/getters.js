//ゲッター。ステートにアクセスする算出プロパティの役割

const getters = {
    user: (state) => {
        return state.user
    },
    loggedIn: (state) => {
        return null !== state.user
    },
}

export default getters
