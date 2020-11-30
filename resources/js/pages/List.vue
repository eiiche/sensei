<template>
    <b-container>
        <b-row>
            <b-col col lg="12">
                <!--検索-->
                <div class="border-lightgray d-inline-flex w-100">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search w-auto h-auto"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd"
                              d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                    <input type="text" class="w-100">
                </div>
                <!--タグ-->
                <div>
                    <input type="checkbox">イラスト
                    <input type="checkbox">3Dモデリング
                </div>
            </b-col>
        </b-row>
        <b-row>
            <b-col col lg="12">
                <!--一覧-->
                <div class="list mt-5">
                    <SenseiItemWide />
                </div>

            </b-col>
        </b-row>
        <b-row>
            <b-col col lg="12">

            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    import axios from "axios";

    export default {
        components: {},
        data() {
            return {}
        },

    }
</script>
