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
                            <img :src="'/images/1.png'" class="thumbnail">
                            <em class="text-white">ユーザー名</em>
                        </span>
                    </template>
                    <b-dropdown-item  to="/login">ログイン</b-dropdown-item>
                    <b-dropdown-item to="/register">登録</b-dropdown-item>
                </b-nav-item-dropdown>
            </b-container>
        </b-navbar>
        <b-container>
            <router-view></router-view>
        </b-container>
    </div>
</template>

<script>
    export default {}
</script>
