<template>
    <b-container>
        <b-row>
            <!--依頼一覧スライド-->
            <b-col col lg="12">
                <div class="mt-5">
                    <h3>申し込み中の依頼</h3>
                    <!--申し込んでいる依頼一覧-->
                    <div class="border-lightgray d-inline-flex">
                        <!--アイテム-->
                        <div class="border-lightgray display-flex-column">
                            <h5>2020/10/28 18:00 から 20:00</h5>
                            <img :src="'/images/1.png'" class="image mt-2">
                            <h5>イラストの添削をします。</h5>
                            <div class="d-inline-flex">
                                <img :src="'/images/1.png'" class="thumbnail">
                                <h5>eache</h5>
                            </div>
                        </div>
                        <div class="border-lightgray display-flex-column">
                            <h5>2020/10/28 18:00 から 20:00</h5>
                            <img :src="'/images/1.png'" class="image mt-2">
                            <h5>イラストの添削をします。</h5>
                            <div class="d-inline-flex">
                                <img :src="'/images/1.png'" class="thumbnail">
                                <h5>eache</h5>
                            </div>
                        </div>
                        <div class="border-lightgray display-flex-column">
                            <h5>2020/10/28 18:00 から 20:00</h5>
                            <img :src="'/images/1.png'" class="image mt-2">
                            <h5>イラストの添削をします。</h5>
                            <div class="d-inline-flex">
                                <img :src="'/images/1.png'" class="thumbnail">
                                <h5>eache</h5>
                            </div>
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
                            <div class="image">
                                <img :src="'/images/1.png'" class="image">
                            </div>
                            <p class="desc">先生です</p>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img :src="'/images/1.png'" class="image">
                            </div>
                            <p class="desc">先生です</p>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img :src="'/images/1.png'" class="image">
                            </div>
                            <p class="desc">先生です</p>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img :src="'/images/1.png'" class="image">
                            </div>
                            <p class="desc">先生です</p>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img :src="'/images/1.png'" class="image">
                            </div>
                            <p class="desc">先生です</p>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img :src="'/images/1.png'" class="image">
                            </div>
                            <p class="desc">先生です</p>
                        </div>
                    </div>
                </div>
            </b-col>
            <!--おしらせ-->
            <b-col col lg="12">
                <div class="mt-5">
                    <h3>おしらせ</h3>
                    <div class="newscontainer">
                        <div class="news d-inline-flex">
                            <h5>2020/10/28</h5>
                            <h5 class="ml-3">
                                ニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュース
                            </h5>
                        </div>
                    </div>
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

