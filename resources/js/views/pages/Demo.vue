<template>
  <div class="s-container">
    <h1>Demo</h1>
    <s-input
        input_title="MyInput"
        input_type="text"
        input_id="my_input_id"
    />
    <s-button
        class="s-btn s-btn-warning w-s-200"
        title="Button warning"
    />
    <s-button
        class="s-btn s-btn-info w-s-200"
        title="Button info"
    />
    <s-button
        class="s-btn s-btn-danger w-s-200"
        title="Button danger"
    />

    <s-progressbar
        wdt="27.5"
        cls="info"
    >
    </s-progressbar>

    <s-card
        :carddata="this.s_card_data"
    >
    </s-card>

<!--    <tree-view></tree-view>-->

  </div>
</template>
<script>

export default {
  name: "demo",
  data() {
    return {
      s_card_data: {
        card_title: "PELO CINTO",
        card_img: "https://images.wbstatic.net/small/new/59590000/59590372.jpg",
        card_href: "http://127.0.0.1/index.php?page=report&amp;pid=3301&amp;offer=59590372",
        card_category: "Ремень",
        card_description: "40 мм Коричневый 2 строчки",
        card_vendor: "59590372",
        card_price: "909"
      }
    }
  },
  //components: {TreeView}

}
</script>
<style scoped lang="scss">

.s-container {
  padding: 10px;
  max-width: 120rem;
  margin: 8rem auto;
  background-color: #fcffba;
  box-shadow: 0 2rem 6rem rgba(0, 0, 0, .7);
  min-height: 50rem;

  @media only screen and(max-width: 75rem) {
    margin: 0;
    max-width: 100%;
    width: 100%;
  }
}

</style>
