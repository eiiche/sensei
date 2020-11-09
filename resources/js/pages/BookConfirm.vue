<template>
    <b-container>
        <b-row>
            <b-col col lg="12">
                <div class="text-center mt-5">
                    <h2>予約確認</h2>
                    <h3 class="mt-5">サービス名</h3>
                    <p>イラスト添削通話</p>
                    <h3 class="mt-5">希望時間</h3>
                    <p>2020/11/09 22:00~23:00</p>
                    <div class="d-inline-flex mt-5">
                        <b-button to="/talkroom" variant="primary">戻る</b-button>
                        <b-button to="" variant="primary">支払い画面へ</b-button>
                    </div>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        name: "BookConfirm"
    }
</script>

<style scoped>

</style>
