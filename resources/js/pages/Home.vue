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

