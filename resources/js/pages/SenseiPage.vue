<template>
    <b-container>
        <b-row class="border-lightgray">
            <b-col col lg="3">
                <!--プロフ-->
                <div class="d-inline-flex border-lightgray">
                    <div class="border-lightgray">
                        <h3>プロフィール</h3>
                        <h3>{{user.name}}</h3>
                        <!-- v-vind:src -->
                        <img :src="pfImage" class="rounded-circle image">
                        <h4>タグ</h4>
                        <h5>イラスト/モデリング</h5>
                        <h5>★★★★★(100)</h5>
                        <h4>SENSEIの一言:</h4>
                        <p>がんばります</p>
                    </div>
                </div>
            </b-col>
            <b-col col lg="7">
                <div class="sensei-detail display-flex-column pt-2">
                    <h3>評価</h3>
                    <div class="pt-2">
                        <div class="display-flex-row">
                            <div class="display-flex-column">
                                <img :src="'/images/1.png'" class="thumbnail rounded-circle">
                                <h3>eache</h3>
                            </div>
                            <p class="ml-4">大変良いです</p>
                        </div>
                    </div>
                </div>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <div class="mt-5">
                    <h3>ポートフォリオ</h3>
                    <SwiperLayout></SwiperLayout>
                </div>
            </b-col>
        </b-row>
        <b-row>
            <b-col col lg="12">
                <!--予約ボタン-->
                <div class="text-center mt-5 mb-5">
                    <b-button to="/talkroom" variant="primary">相談する</b-button>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    import axios from "axios";

    export default {
        components: {},
        data() {
            return {
                userId: this.$route.params.id,//urlパラメータのid
                user: null,//アクションで取得したuserオブジェクト
            }
        },
        watch: {
            $route(to, from) {
                this.userId = to.params.id//urlパラメータのidを格納
                this.user = this.fetchUser()//アクションで取得したuserオブジェクトを格納
            },
        },
        created() {
            this.fetchUser()
        },
        methods: {
            //async..非同期
            fetchUser() {//先生取得
                return this.$store.dispatch('sensei/fetchUser', { id: this.userId })//dispatchでアクション呼び出し。引数userId
            },
        }
    }
</script>
