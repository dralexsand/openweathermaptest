<template>
  <div class="s-container">


    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label
              for="city_namecity_name"
              class="form-label city_label">
            {{ city }}
          </label>
          <input
              v-if="this.show_btn_change"
              v-on:keyup.enter="onEnter"
              type="text"
              class="form-control"
              id="city_name">

          <div
              v-if="!this.show_btn_change"
              class="row">
        <span
            @click.prevent="showInput(true)"
            class="span_city">
          Сменить город
        </span>
          </div>
        </div>
      </div>

      <div class="col text-align-right">
        <div class="btn-group" role="group" aria-label="Basic outlined example">

          <button
              @click.prevent="activate(1)"
              :class="{ active:active_el==1 }"
              type="button"
              class="btn btn-primary">
            °C
          </button>
          <button
              @click.prevent="activate(2)"
              :class="{ active:active_el==2 }"
              type="button"
              class="btn btn-primary">
            °F
          </button>

        </div>
      </div>
    </div>

    <div
        v-if="!this.show_btn_change"
        class="central_widget">

      <img class="widget_image" :src="weather.icon">
      <span
          v-if="temp_c_show"
          class="widget_temp">
        {{ weather.temp_c }}
      </span>
      <span
          v-else
          class="widget_temp">
        {{ weather.temp_k }}
      </span>
      <h4 class="widget_text">
        {{ weather.main }}
      </h4>
    </div>

    <div
        v-if="!this.show_btn_change"
        class="row bottom-block">

      <div class="col-md-6">
        <span class="bottom_title">
          Ветер:
        </span>
        <br>
        <span class="bottom_description">
          {{ weather.wind_speed }}, {{ weather.wind_direction }}
        </span>
      </div>
      <div class="col-md-3">
        <span class="bottom_title">
          Давление:
        </span>
        <br>
        <span class="bottom_description">
          {{ weather.pressure }}
        </span>
      </div>
      <div class="col-md-3">
        <span class="bottom_title">
          Влажность:
        </span>
        <br>
        <span class="bottom_description">
          {{ weather.humidity }}
        </span>
      </div>
    </div>

  </div>
</template>
<script>

import {mapGetters} from "vuex";
import weather from "../../store/modules/weather";

export default {
  name: "home",
  data() {
    return {
      //weather: {},
      show_btn_change: true,
      city: "Город",
      active_el: 1,
      weather_data: {},
      temp_c_show: true
    }
  },
  computed: {
    ...mapGetters({
      weather: 'weather/getWeather',
    }),

  },
  methods: {
    onEnter(e) {
      this.city = e.target.value;
      this.show_btn_change = false;
      this.$store.dispatch('weather/fetchWeather', this.city)
    },
    showInput(value) {
      console.log('showInput');
      this.show_btn_change = value;
    },
    activate: function (el) {
      this.active_el = el;
      this.temp_c_show = el === 1 ? true : false;
      //this.temp = el === 1 ? weather.temp_c : weather.temp_k;
    }
  }

}
</script>
<style scoped lang="scss">
#city_name {
  width: 55%;
}

.bottom-block {
  width: 100%;
  position: absolute;
  bottom: 5%;
  color: white;
  font-family: 'Nunito', sans-serif;
}

.bottom_title {
  font-size: 1rem;
}

.bottom_description {
  font-size: 1.5rem;
}

.text-align-right {
  text-align: right;
}

.city_label {
  color: white;
  font-size: 3rem;
  font-family: 'Nunito', sans-serif;
}

.span_city {
  color: white;
  font-family: 'Nunito', sans-serif;
  font-size: 1rem;
  cursor: pointer;
}

.span_city:hover {
  font-size: 1rem;
  color: white;
  text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff;
}

.central_widget {
  height: 40vh;
  line-height: 40vw;
  text-align: center;
}

.widget_image {
  width: 10rem;
  line-height: 5rem;
}

.widget_temp {
  position: relative;
  font-family: 'Nunito', sans-serif;
  color: white;
  font-size: 4rem;
  margin-top: 15rem;
}

.widget_text {
  font-family: 'Nunito', sans-serif;
  color: white;
  font-size: 2rem;
  position: absolute;
  top: 65%;
  left: 50%;
}

.s-container {
  padding: 10px;
  max-width: 120rem;
  margin: 8rem auto;
  background-color: #3686ef;
  box-shadow: 0 2rem 6rem rgba(0, 0, 0, .7);
  min-height: 50rem;

  @media only screen and(max-width: 75rem) {
    margin: 0;
    max-width: 100%;
    width: 100%;
  }
}

</style>
