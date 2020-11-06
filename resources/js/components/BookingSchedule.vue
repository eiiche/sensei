<template>
    <div>
        <div class="main">
            <div class="cal">
                <div class="cal_row-label">
                    <p class="cal_label" v-for="n in 10">{{ n + 9 }}</p>
                </div>
                <div class="cal_row-timeline">
                    <div class="cal_block" v-for="n in 10"></div>
                </div>
            </div>

            <div class="reserve">
                <div
                    v-for="reservation in reservations"
                    class="reserve_item"
                    :style="getPosition(reservation)"
                    :key="reservation.id">
                    {{ reservation.name }}<br>
                    {{ reservation.startTime }} 〜 {{ reservation.endTime }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BookingSchedule",
        data: {
            shopOpenHour: 10,
            calBlockHeight: 90,
            topMargin: 20,
            reservations: [
                {
                    "id": 1,
                    "name": "予約A",
                    "startTime": "11:00",
                    "endTime": "11:40"
                },
                {
                    "id": 2,
                    "name": "予約B",
                    "startTime": "12:00",
                    "endTime": "13:30"
                },
                {
                    "id": 3,
                    "name": "予約C",
                    "startTime": "15:10",
                    "endTime": "17:40"
                }
            ]
        },

        methods: {
            getPosition(item) {
                let styles = {}

                // 開始時間の時と分を分割
                const startTime = item.startTime.split(':')
                // 時間分の高さ計算
                let topPosition = (startTime[0] - this.shopOpenHour) * this.calBlockHeight
                // 分の高さを足す
                topPosition += startTime[1] * (this.calBlockHeight / 60)
                // 上部のマージン分の高さを足す
                topPosition += this.topMargin

                // 終了時間の時と分を分割
                const endTime = item.endTime.split(':')
                // 終了時間と開始時間の差分を求める
                const endTimeLength = parseInt(endTime[0]) + parseFloat(endTime[1] / 60)
                const startTimeLength = parseInt(startTime[0]) + parseFloat(startTime[1] / 60)
                const itemHeight = (endTimeLength - startTimeLength) * this.calBlockHeight

                styles.top = topPosition + 'px'
                styles.height = itemHeight + 'px'

                return styles
            }
        }
    }
</script>

<style scoped>
    * {
        box-sizing: border-box;
    }

    .main {
        position: relative;
        max-width: 300px;
        padding-right: 20px;
        background-color: #eee;
    }

    .cal {
        display: flex;
        padding-top: 20px;
    }

    .cal_row-label {
        flex: 0 0 50px;
    }

    .cal_row-timeline {
        width: 100%;
    }

    .cal_label {
        height: 90px;
        transform: translateY(-12px);
        margin: 0;
        text-align: center;
    }

    .cal_block {
        width: 100%;
        height: 90px;
        border-top: 1px solid #aaa;
    }

    .reserve {
        position: absolute;
        top: 0;
        left: 60px;
        width: calc(100% - 90px);
    }

    .reserve_item {
        border: 1px solid #ddd;
        background-color: #fff;
        border-radius: 5px;
        padding: 10px;
        position: absolute;
        width: 100%;
        top: 50px;
    }


</style>
