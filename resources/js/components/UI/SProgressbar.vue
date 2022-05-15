<template>
    <div
        :class="this.main_class"
        role="progressbar"
        :style="this.main_style"
        :aria-valuenow="wdt"
        aria-valuemin="0"
        aria-valuemax="75"
        :width="wdt"
    >
        {{ wdt }}%
    </div>
</template>
<script>
export default {
    name: "s-progressbar",
    props: [
        'wdt',
        'cls',
    ],
    data() {
        return {
            main_style: '',
            main_class: ''
        }
    },
    mounted() {
        this.getStyle();
    },
    methods: {
        getAvailableValuesClass() {
            return [
                "primary",
                "secondary",
                "success",
                "info",
                "warning",
                "danger",
                "light",
                "dark"
            ];
        },
        getStyle() {
            let classes = this.getAvailableValuesClass();
            let cls = this.cls;
            //console.log(cls)
            if (!classes.includes(cls)) {
                cls = "info";
            }
            this.main_style = "width:" + this.wdt + "%; font-size: 14px; font-weight: bold;";
            this.main_class = "progress-bar progress-bar-striped bg-" + cls;
        }
    }
}
</script>
<style scoped lang="scss">

</style>
