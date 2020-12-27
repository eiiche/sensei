<template>
    <b-container>
        <b-row class="border-lightgray">
            <b-col col lg="3">
                <!--プロフ-->
                <div class="d-inline-flex border-lightgray">
                    <div class="border-lightgray">
                        <h3>プロフィール</h3>
                        <h3>{{sensei.name}}</h3>
                        <!-- v-vind:src -->
                        <img :src="sensei.icon" class="rounded-circle image">
                        <h4>タグ</h4>
                        <div class="d-inline-flex" v-for="(tag,index) in sensei.tags" :key="index">
                            {{tag.tag}},
                        </div>
                        <h5>{{sensei.rating}}</h5>
                        <h4>SENSEIの一言:</h4>
                        <p>{{sensei.profile_text}}</p>
                    </div>
                </div>
            </b-col>
            <b-col col lg="7">
                <div class="sensei-detail display-flex-column pt-2">
                    <h3>評価</h3>
                    <div class="pt-2">
                        <div class="display-flex-row" v-for="(item,index) in sensei.reservation" :key="index">
                            <div class="display-flex-column">
                                <img :src="sensei.reservations.users.icon" class="thumbnail rounded-circle">
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
                    <SwiperLayout v-bind:images="sensei.images"></SwiperLayout>
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
                senseiId: this.$route.params.id,//urlパラメータのid
                sensei: null,//アクションで取得したuserオブジェクト
            }
        },
        watch: {//データの変更を監視して、それをトリガーに非同期処理や複雑な処理を行うプロパティ
            $route(to, from) {//同じコンポーネントでパラメーター変更を検知するために$route オブジェクトを watchしている。
                this.senseiId = to.params.id//urlパラメータのidを格納
                console.log("route",this.senseiId)
                this.sensei = this.fetchUser()//アクションで取得したuserオブジェクトを格納
            },
        },
        async created() {
            this.sensei = await this.fetchUser()
        },
        methods: {
            //async..非同期
            fetchUser() {//先生取得
                console.log("fetchuser",this.senseiId)
                return this.$store.dispatch('sensei/fetchUser', { id: this.senseiId })//dispatchでアクション呼び出し。引数userId
            },
        }
    }
</script>
