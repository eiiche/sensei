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
                        <b-nav-item to="/login">ログイン</b-nav-item>
                        <b-nav-item active>新規登録</b-nav-item>
                    </b-nav>
                    <b-card>
                        <b-form @submit.prevent="onSubmit">
                            <b-form-group
                                label="ユーザー名"
                                label-for="name"
                            >
                                <b-form-input
                                    id="name"
                                    v-model="form.name"
                                    type="text"
                                    required
                                ></b-form-input>
                                <!--エラーメッセージ表示-->
                                <b-form-invalid-feedback :state="!formState('name')">
                                    {{ formState('name') }}
                                </b-form-invalid-feedback>
                            </b-form-group>

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
                                <!--エラーメッセージ表示-->
                                <b-form-invalid-feedback :state="!formState('email')">
                                    {{ formState('email') }}
                                </b-form-invalid-feedback>
                            </b-form-group>

                            <b-form-group label="パスワード" label-for="password">
                                <b-form-input
                                    id="password"
                                    v-model="form.password"
                                    required
                                ></b-form-input>
                                <!--エラーメッセージ表示-->
                                <b-form-invalid-feedback :state="!formState('password')">
                                    {{ formState('password') }}
                                </b-form-invalid-feedback>
                            </b-form-group>

                            <b-form-group label="パスワード（確認）" label-for="password_confirmation">
                                <b-form-input
                                    id="password_confirmation"
                                    v-model="form.password_confirmation"
                                    required
                                    placeholder="パスワード（確認）"
                                ></b-form-input>
                            </b-form-group>


                            <b-button type="submit" variant="primary">新規登録</b-button>
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
                name: null,
                email: null,
                password: null,
                password_confirmation: null
            },
            error:{}
        }
    },
    methods : {
        formState(name) {
            return this.errors && this.errors[name] && 0 < this.errors[name].length
                ? this.errors[name][0]
                : ''
        },
        onSubmit() {
            //this.$store.dispatch('xxx') でコンポーネント内でアクションをディスパッチ
            this.$store
                .dispatch('auth/register', this.form)
                .then(() => {
                    this.$router.push('/home')
                })
                //err...RegisterControllerから返却されてきたレスポンス
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
