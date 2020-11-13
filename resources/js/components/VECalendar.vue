<template>
    <vue-event-calendar :events="demoEvents"></vue-event-calendar>
</template>

<script>
    export default {
        name: "VE-Calendar",
        data () {
            return {
                demoEvents: [
                    {
                        date: '2020/01/18',
                        title: '12時アポ',
                        desc: '11:00~12:00'
                    },
                    {
                        date: '2020/01/18',
                        title: '12時アポ',
                        desc: '12:00~15:00'
                    },
                    {
                        date: '2020/01/23',
                        title: '15時アポ',
                        desc: '11:00~12:00'
                    }
                ]
            }
        }
    }
</script>
