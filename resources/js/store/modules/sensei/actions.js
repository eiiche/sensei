//アクション。処理の公開や複雑な処理を行う(いわゆるpublicなメソッド)

import axios from 'axios'

const actions = {
    fetchUser: async ({ commit, state }, { id }) => {//ビューからの呼び出しで引数にuserIdを受け取る
        const response = await axios.get('/api/sensei_page', { params: { id: id } })//コントローラにuserIdを渡してユーザ取得
        commit('SET_USER', response.data.user)//ミューテーション'SET_USER'を経由してステートにセット
        return response.data.user //取得したユーザを返却
    },
}

export default actions
