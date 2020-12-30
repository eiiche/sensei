<template>
    <div class="border-lightgray display-flex-column">
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
</template>

<script>
    import axios from 'axios'

    export default {
        name: "SenseiItem",
        props : [
            'user'
        ],
    }
</script>
