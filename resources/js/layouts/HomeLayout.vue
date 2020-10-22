<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="dark">
            <b-container>
                <b-navbar-brand href="#">Logo</b-navbar-brand>
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>


                <b-navbar-nav class="ml-auto">
                    <b-navbar-nav>
                        <b-nav-item to="/login">ログイン</b-nav-item>
                        <b-nav-item to="/register">登録</b-nav-item>
                    </b-navbar-nav>
                </b-navbar-nav>
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