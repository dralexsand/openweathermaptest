<template>
    <a
        class="art_item"
        finder="59590372 - 40 мм Коричневый 2 строчки 59590372 909 руб. PELO CINTO "
        target="_blank"
        href="http://127.0.0.1/index.php?page=report&amp;pid=3301&amp;offer=59590372"
    >
        <img
            width="60px"
            height="80px"
            src="https://images.wbstatic.net/small/new/59590000/59590372.jpg"
            style="float: left; margin-right: 15px;">
        <h4
            data-v-029f3c13=""
        >
            <b>59590372 - 40 мм Коричневый 2 строчки</b>
        </h4>
        <span>PELO CINTO / Ремень</span>
        <div
            data-v-029f3c13=""
            style="position: absolute; bottom: 10px; right: 10px; color: rgb(0, 0, 0);">
            <b
                data-v-029f3c13="">
                909 руб.
            </b>
        </div>
        <div
            data-v-029f3c13=""
            style="position: absolute; bottom: 10px; left: 10px; color: rgb(0, 0, 0);">
            <b>{{ card_title }}</b>
        </div>
    </a>
</template>

<script>
export default {
    name: 's-card',
    props: {
        'card_title': '',
        'card_description': '',
        'card_article': '',
        'card_img': '',
        'card_href': '',
        'card_price': ''
    },
    data() {
        return {
            main_style: '',
            main_class: ''
        }
    },
    mounted() {
        this.getCardData();
    },
    methods: {
        getCardData() {

        }
    }
}
</script>
<style scoped lang="scss">
.art_item {
    font-size: 14px;
    padding: 5px;
    margin: 2px;
    border: 1px solid #ccc;
    display: block;
    float: left;
    min-width: 400px;
    max-width: 500px;
    height: 120px;
    width: 33%;
    position: relative;
    background: #fefefe;
}

.art_item:hover {
    background: #eee;
}
</style>
