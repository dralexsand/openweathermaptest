<template>
    <a
        class="art_item"
        :finder="main_full_description"
        target="_blank"
        :href="this.card_href"
    >
        <img
            width="60"
            height="80"
            :src="this.card_img"
            style="float: left; margin-right: 15px;">
        <h4
            data-v-029f3c13=""
        >
            <b>{{ this.main_vendor_description }}</b>
        </h4>
        <span>{{ this.main_card_title_category }}</span>
        <div
            data-v-029f3c13=""
            style="position: absolute; bottom: 10px; right: 10px; color: rgb(0, 0, 0);">
            <b
                data-v-029f3c13="">
                {{ this.main_card_price }}
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
    props: [
        'carddata',
    ],
    data() {
        return {
            main_card_price: '',
            main_card_title_category: '',
            main_vendor_description: '',
            main_full_description: '',
            card_img: '',
            card_title: '',
            card_href: ''
        }
    },
    mounted() {
        this.getCardData();
    },
    methods: {
        getCardData() {
            let d = this.carddata;
            //console.log(d)
            this.card_title = d.card_title;
            this.card_href = d.card_href;
            this.card_img = d.card_img;
            this.main_card_price = d.card_price + " руб.";
            this.main_card_title_category = d.card_title + "/" + d.card_category;
            this.main_vendor_description = d.card_vendor + " - " + d.card_description;
            this.main_full_description = this.main_vendor_description
                + " " + d.card_vendor
                + " " + this.main_card_price
                + " " + d.card_title;

            //console.log(this.main_full_description);
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
