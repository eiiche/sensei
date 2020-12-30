<template>
    <div>
        <b-navbar toggleable="lg" type="dark" class="bg-orange">
            <b-container>
                <b-navbar-brand href="#" to="/home">SENSEI</b-navbar-brand>
                <b-navbar-nav>
                    <b-navbar-nav>
                        <a class="btn btn-lg rounded-pill bg-white tc-lightgray" href="/list">SENSEIを探す</a>
                    </b-navbar-nav>
                </b-navbar-nav>
                <b-nav-item-dropdown>
                    <!-- Using 'button-content' slot -->
                    <template #button-content>
                        <span>
                            <img :src="user.icon" class="thumbnail">
                            <em class="text-white">{{user.name}}</em>
                        </span>
                    </template>
                    <b-dropdown-item  to="/login">ログイン</b-dropdown-item>
                    <b-dropdown-item to="/register">登録</b-dropdown-item>
                    <b-dropdown-item to="/logout">ログアウト</b-dropdown-item>
                </b-nav-item-dropdown>
            </b-container>
        </b-navbar>
        <b-container>
            <router-view></router-view>
        </b-container>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        components: {},
        data() {
            return {
                user : null
            }
        },
        async created() {
            await this.getUser()
            console.log("フロント側ログインユーザは" + this.user)
        },
        methods: {
            onSubmit() {
                this.$store
                    .dispatch('auth/login', this.form)//vuex,action実行
                    .then(() => {
                        this.$router.push('/home')
                    })
                    .catch((err) => {
                        const response = err.response
                        const errors = response.data.errors
                        if (errors) {
                            this.errors = errors
                        }
                    })
            },
            async getUser(){
                this.user = (await axios.get('/api/get_login_user')).data
            }
        },
    }
</script>
