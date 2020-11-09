<template>
    <b-container class="border-lightgray">
        <div class="border-lightgray justify-content-center">
            <b-row>
                <!--説明-->
                <b-col col lg="12">
                    <div class="pt-5 border-lightgray">
                        <h3 class="text-center">トークルーム</h3>
                        <h4 class="pt-3">トークルームです。学習の内容や時間の希望を相談し、決めましょう</h4>
                    </div>
                </b-col>
            </b-row>
            <b-row>
                <!--トークルーム-->
                <b-col col lg="12">
                    <div class="display-flex-column pt-5 border-lightgray">
                        <!--SENSEI-->
                        <div class="display-flex-row ">
                            <div class="display-flex-column">
                                <img :src="'/images/1.png'" class="thumbnail">
                                <h5>eache</h5>
                            </div>
                            <h5 class="ml-5">SENSEIです</h5>
                        </div>
                        <!--SEITO-->
                        <div class="display-flex-row flex-row-reverse">
                            <div class="display-flex-column">
                                <img :src="'/images/1.png'" class="thumbnail">
                                <h5>eache</h5>
                            </div>
                            <h5 class="mr-5">SEITOです</h5>
                        </div>
                    </div>
                </b-col>
            </b-row>
            <b-row>
                <!--フォーム-->
                <b-col col lg="12">
                    <div class="text-center">
                        <form @submit.prevent action="/" method="POST">
                            <textarea name="" id="" cols="100" rows="10"></textarea><br>
                            <b-button type="submit" variant="primary" class="mt-4">送信する</b-button>
                        </form>
                    </div>
                </b-col>
            </b-row>
        </div>
        <b-row>
            <b-col col lg="12">
                <div class="mt-5">
                    <h2 class="text-center">予約状況</h2>
                    <div>
                        <BookingSchedule/>
                    </div>
                    <div class="text-center">
                        <form @submit.prevent action="/bookconfirm" method="POST">
                            <h3 class="text-center mt-4">希望する時間</h3>
                            <input type="date"><input type="time">から
                            <select name="hour">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            時間
                            <div>
                                <b-button to="/bookconfirm" variant="primary">予約する</b-button>
                            </div>
                        </form>
                    </div>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        name: "talkroom"
    }
</script>
