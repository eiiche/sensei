<template>
    <b-container>
        <b-row class="border-dark">
            <b-col col lg="12">
                <!--説明-->
                <div class="border-dark">
                    <h3>トークルームの説明</h3>
                    トークルームです。学習の内容や希望時間を相談し、決めましょう
                </div>
            </b-col>
            <b-col col lg="12">
                <!--トーク-->
                <div class="display-flex-row border-dark">
                    <div class="display-flex-column border-dark">
                        <img :src="'/images/1.png'" class="thumbnail">
                        <h3>eacheSEITO</h3>
                    </div>
                    <h4>こんにちは</h4>
                </div>
                <div class="display-flex-row border-dark">
                    <div class="display-flex-column border-dark flex-row-reverse">
                        <img :src="'/images/1.png'" class="thumbnail">
                        <h3>eacheSENSEI</h3>
                    </div>
                    <h4>こんにちは</h4>
                </div>
            </b-col>
            <b-col col lg="12">
                <!--テキストボックス-->
                <textarea rows="4" cols="40">チャット</textarea>
                <b-button type="submit" variant="primary" >送信する</b-button>
            </b-col>
            <b-col col lg="12">
                <b-button to="/talkroom" variant="primary" >予約する(日時を選択)</b-button>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        name: "talkroom"
    }
</script>
