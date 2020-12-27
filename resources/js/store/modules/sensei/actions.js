//アクション。処理の公開や複雑な処理を行う(いわゆるpublicなメソッド)

import axios from 'axios'

const actions = {
    fetchUser: async ({ commit, state }, { id }) => {//ビューからの呼び出しで引数にuserIdを受け取る
        console.log("actionは",id)
        const response = await axios.get('/api/sensei_page',{//api(コントローラ)にidを渡してuserオブジェクトを取得
            params: {
                id: id
            }
        })//コントローラにuserIdを渡してユーザ取得
        commit('SET_USER', response.data)//ミューテーション'SET_USER'を経由してステートに取得したユーザをセット
        console.log("resppnse is ",response.data)
        return response.data //取得したユーザを返却
    },
}

export default actions
