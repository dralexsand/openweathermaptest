<template>
    <button
        :class="btn_class">
        <slot></slot>
    </button>
</template>
<script>
export default {
    name: "my-button",
    data(){
        return {
            btn_class: 'cst-warning'
        }
    }
}
</script>
<style scoped lang="scss">
/*.btn {
    width: 150px;
    color: white;
    font-size: 14px;
    background-image: -webkit-linear-gradient(top, #f0ad4e 0, #eb9316 100%);
    background-image: -o-linear-gradient(top, #f0ad4e 0, #eb9316 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f0ad4e), to(#eb9316));
    background-image: linear-gradient(to bottom, #f0ad4e 0, #eb9316 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffeb9316', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-color: #e38d13;
    transition: all .2s;
    cursor: pointer;

    &:hover {
        background-color: #a2630d;
        background-position: 0 -35px;
    }

    &:active {
        background-color: #5d3805;
        background-position: 0 -35px;
    }
}*/

</style>

