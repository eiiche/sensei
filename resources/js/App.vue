<template>
    <component :is="layout" />
</template>

<script>
export default {
    metaInfo: {
        titleTemplate: 'Sensei | %s',
        htmlAttrs: {
            lang: 'ja',
        },
    },
    computed: {
        layout: {
            cache: false,
            get: function () {
                return `${this.$route.meta.layout || 'default'}-layout`
            },
        },
    },
}
</script>