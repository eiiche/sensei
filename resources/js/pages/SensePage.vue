<template>
    <b-container>
        <b-row>
            <b-col col lg="12">
                <!--プロフ-->
                <div class="d-inline-flex border-lightgray w-100 mt-5">
                    <div class="border-lightgray">
                        <img :src="'/images/1.png'" class="rounded-circle w-50 h-50">
                        <h3>タグ</h3>
                        <h4>イラスト/モデリング</h4>
                        <h3>★★★★★(100)</h3>
                        <h3>SENSEIの一言:</h3>
                        <h4>がんばります</h4>
                    </div>
                    <div class="sensei-detail display-flex-column">
                        <h3>評価</h3>
                        <div>
                            <div class="display-flex-row">
                                <div class="display-flex-column">
                                    <img :src="'/images/1.png'" class="thumbnail rounded-circle">
                                    <h3>eache</h3>
                                </div>
                                <h5 class="ml-4">大変良いです</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </b-col>
            <b-col>
                <div class="mt-5">
                    <h3>ポートフォリオ</h3>
                    <ul class="slide">
                        <li class="slideitem"><img :src="'/images/1.png'"></li>
                        <li class="slideitem"><img :src="'/images/1.png'"></li>
                        <li class="slideitem"><img :src="'/images/1.png'"></li>
                        <li class="slideitem"><img :src="'/images/1.png'"></li>
                        <li class="slideitem"><img :src="'/images/1.png'"></li>
                        <li class="slideitem"><img :src="'/images/1.png'"></li>
                    </ul>
                </div>
            </b-col>
        </b-row>
        <b-row>
        </b-row>
        <b-row>
            <b-col col lg="12">
                <!--予約ボタン-->
                <div class="text-center">
                    <b-button to="/talkroom" variant="primary">相談する</b-button>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        components: {},
        data() {
            return {}
        }
    }
</script>
