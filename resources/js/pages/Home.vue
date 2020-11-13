<template>
    <b-container>
        <b-row>
            <!--依頼一覧スライド-->
            <b-col col lg="12">
                <div class="mt-5">
                    <h3>申し込み中のSENSEI</h3>
                    <!--申し込んでいる依頼一覧-->
                    <div class="border-lightgray d-inline-flex">
                        <!--アイテム-->
                        <div class="border-lightgray">
                            <h5>2020/10/28 18:00 から 20:00</h5>
                            <SenseiItem />
                        </div>
                        <div class="border-lightgray">
                            <h5>2020/10/28 18:00 から 20:00</h5>
                            <SenseiItem />
                        </div>
                        <div class="border-lightgray">
                            <h5>2020/10/28 18:00 から 20:00</h5>
                            <SenseiItem />
                        </div>
                    </div>
                </div>
            </b-col>
            <!--新着6件表示-->
            <b-col col lg="12">
                <div class="mt-5">
                    <h3>新着のSENSEI</h3>
                    <div class="grid">
                        <div class="item">
                            <SenseiItem />
                        </div>
                        <div class="item">
                            <SenseiItem />
                        </div>
                        <div class="item">
                            <SenseiItem />
                        </div>
                        <div class="item">
                            <SenseiItem />
                        </div>
                        <div class="item">
                            <SenseiItem />
                        </div>
                        <div class="item">
                            <SenseiItem />
                        </div>
                    </div>
                </div>
            </b-col>
            <!--おしらせ-->
            <b-col col lg="12">
                <div class="mt-5">
                    <h3>おしらせ</h3>
                    <div class="">
                        <!--v-forでnews配列内のアイテムを繰り返し表示。item...news配列の要素 index...要素の番号-->
                        <!--v-bind:key="index"で-->
                        <div
                            v-for="(item, index) in news"
                            :key="index"
                            class=""
                        >
                            <h5>{{ item.created_at }}</h5>
                            <h5 class="ml-3">{{ item.title }}</h5>
                        </div>
                    </div>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    import axios from 'axios'
    export default {
        components: {},
        data() {
            return {
                news: []
            }
        },
        //Vueインスタンス生成時に実行する処理を記述
        created() {
            this.fetchNews()
        },
        methods: {
            async fetchNews() {
                //paramに変数limit = 5を代入しgetリクエスト。変数limitはコントローラ側での処理に使う
                //api.phpに記述されたルーティングを通してコントローラにアクセス
                const news = (await axios.get(`/api/news`, { params: { limit: 5 } })).data
                this.news = news.data
            }
        }
    }
</script>
