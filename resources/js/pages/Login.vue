<template>
    <div
        class="d-flex justify-content-center align-items-center"
        style="min-height: 100vh;"
    >
        <b-container >
            <b-row>
                <b-col col lg="6" class="mx-auto">
                    <router-link to="/">
                        <h1 class="text-center mb-5">Logo</h1>
                    </router-link>
                    <b-nav tabs fill>
                        <b-nav-item active>ログイン</b-nav-item>
                        <b-nav-item to="/register">新規登録</b-nav-item>
                    </b-nav>
                    <b-card>
                        <b-form @submit.prevent="onSubmit">
                            <b-form-group
                                label="メールアドレス"
                                label-for="email"
                            >
                                <b-form-input
                                    id="email"
                                    v-model="form.email"
                                    type="email"
                                    required
                                ></b-form-input>
                                <b-form-invalid-feedback :state="!formState('email')">
                                    {{ formState('email') }}
                                </b-form-invalid-feedback>
                            </b-form-group>

                            <b-form-group label="パスワード" label-for="password">
                                <b-form-input
                                    id="password"
                                    type="password"
                                    v-model="form.password"
                                    required
                                ></b-form-input>
                                <b-form-invalid-feedback :state="!formState('password')">
                                    {{ formState('password') }}
                                </b-form-invalid-feedback>
                            </b-form-group>


                            <b-button type="submit" variant="primary" >ログイン</b-button>
                            <b-button to="/home" variant="primary">home_tmp</b-button>
                        </b-form>
                    </b-card>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    export default {
        components: {},
        data() {
            return {
                form: {
                    email: null,
                    password: null,
                },
                errors: {}
            }
        },
        methods: {
            formState(name) {
                return this.errors && this.errors[name] && 0 < this.errors[name].length
                    ? this.errors[name][0]
                    : ''
            },
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
        },
    }
</script>
