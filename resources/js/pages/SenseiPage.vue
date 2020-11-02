<template>
    <b-container>
        <b-row>
            <b-col col lg="12">
                <!--プロフ-->
                <div class="d-inline-flex border-lightgray w-100 mt-5 h-auto">
                    <div class="border-lightgray">
                        <img :src="'/images/1.png'" class="rounded-circle w-50 h-50">
                        <h4>タグ</h4>
                        <h5>イラスト/モデリング</h5>
                        <h5>★★★★★(100)</h5>
                        <h4>SENSEIの一言:</h4>
                        <h5>がんばります</h5>
                    </div>
                    <div class="sensei-detail display-flex-column pt-2">
                        <h3>評価</h3>
                        <div class="pt-2">
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
                    <SwiperLayout></SwiperLayout>
                </div>
            </b-col>
        </b-row>
        <b-row>
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
    export default {
        components: {},
        data() {
            return {}
        }
    }
</script>
