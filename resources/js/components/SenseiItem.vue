<template>
    <div class="border-lightgray display-flex-column">
        <div v-for="(user, index) in users"
             :key="index">
            <img :src="user.images[0].image" class="image mt-2">
            <h5>{{user.profile_text}}</h5>
            <div class="d-inline-flex">
                <img :src="user.icon" class="thumbnail">
                <div>
                    <h5>{{user.name}}</h5>
                    <div v-for="(tag, index) in user.tags"
                         :key="tag.id">
                        <p>{{tag.tag}}</p>
                    </div>
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
                const users = (await axios.get(`/api/sensei_latest`)).data
                this.users = users
                console.log(users)
            }
        }
    }
</script>


