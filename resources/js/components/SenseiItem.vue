<template>
    <div class="border-lightgray display-flex-column">
        <div v-for="(item, index) in users"
             :key="index">
            <img :src="item.image.image" class="image mt-2">
            <h5>{{item.profile_text}}</h5>
            <div class="d-inline-flex">
                <img :src="'/images/1.png'" class="thumbnail">
                <div>
                    <h5>{{item.name}}</h5>
<!--                    <p>{{item.tag.tag}}</p>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "SenseiItem",
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
                const users = (await axios.get(`/api/users_latest`)).data
                this.users = users
                console.log(users)
            }
        }
    }
</script>


