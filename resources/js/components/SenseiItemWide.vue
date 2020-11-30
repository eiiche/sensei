<template>
    <div class="sensei-item border-lightgray">
        <div v-for="(user, index) in users"
             :key="index">
            <div class="pl-3">
                <div class="display-flex-row">
                    <img :src="user.icon" class="thumbnail">
                    <h3>{{user.name}}</h3>
                    <div class="ml-auto">
                        <h3>実績:1</h3>
                        <h3>★★★★★</h3>
                    </div>
                </div>
                <h4>タグ</h4>
                <div class="d-inline-flex" v-for="(tag,index) in user.tags" :key="index">
                    {{tag.tag}},
                </div>
            </div>
            <div>
                <!--カルーセル-->
                <SwiperLayout v-bind:images="user.images"></SwiperLayout>
            </div>
            <div class="pl-3">
                <h3>{{user.profile_text}}</h3>
            </div>
            <div class="booking text-center">
                <h3>{{user.price}}円/30分</h3>
                <form @submit.prevent="onSubmit" method="post">
                    <input type="hidden" name="sensei_id" value="user.id">
                    <b-button type="submit" variant="primary">予約する</b-button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: "SenseiItemWide",
        data() {
            return {
                users: [],
            }
        },
        //読み込み時に実行させておきたいのでcreatedに記述
        created() {
            this.fetchUser();
        },
        methods: {
            //async..非同期
            async fetchUser() {
                const users = (await axios.get(`/api/sensei_latest`)).data
                this.users = users
                console.log(users)
            },
            onSubmit() {
                this.$store
                    .dispatch('api/', this.form)
                    .then(() => {
                        this.$router.push('/SenseiPage')
                    })
                    .catch((err) => {
                        const response = err.response
                        const errors = response.data.errors
                        if (errors) {
                            this.errors = errors
                        }
                    })
            },
        }
    }
</script>

<style scoped>

</style>
