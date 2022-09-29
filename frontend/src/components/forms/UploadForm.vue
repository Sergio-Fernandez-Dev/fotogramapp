<script setup>
import { ref } from "vue";
import { doPostRequest } from "../../services/apiRequests";
import IconAddImage from "../icons/IconAddImage.vue";

const form = ref({
  title: "",
  image: "",
});

const prepareImage = (event) => {
  form.value.image = event.target.files[0];
  console.log(form.value.image);
};

const processInput = () => {
  doPostRequest("images", form.value);
};
</script>

<template>
  <form class="card">
    <div class="card__img">
      <IconAddImage />
      <input class="card__input--hidden" type="file" @change="prepareImage" />
    </div>
    <div class="card__wrapper"></div>
    <section class="card__info">
      <label class="card__label" for="input">Título: </label>
      <input
        id="input"
        class="card__input"
        type="text"
        v-model="form.title"
        @keydown.enter="processInput(input.value)"
      />
    </section>
  </form>
</template>

<style lang="scss" scoped>
.card {
  &__img {
    width: 24rem;
    height: 24rem;
    @include flex($direction: row);
  }
  &__info {
    @include flex($direction: row);
  }
  &__input {
    border: none;
    border-bottom: 0.1rem solid map-get($map: $color, $key: "border");
    background-color: map-get($map: $color, $key: "background");
    &--hidden {
    }
  }
  &__label {
    margin-right: 0.5rem;
    font-weight: bold;
  }
}
</style>
