<script setup>
import { ref } from "vue";
import { doGetRequest, doPostRequest } from "../../services/apiRequests";
import IconAddImage from "../icons/IconAddImage.vue";
import { useCardStore } from "@/stores/cardList";

const store = useCardStore();
const form = ref({
  title: "",
  image: "",
});

const selectFile = (event) => {
  form.value.image = event.target.files[0];
  form.value.title = form.value.image.name;
  console.log(form.value.image);
};

const processInput = async () => {
  let data = new FormData();
  data.append("title", form.value.title);
  data.append("image", form.value.image);
  doPostRequest("images", data);
  store.cardList.value = await doGetRequest("images");
};
</script>

<template>
  <div class="card">
    <div class="card__img">
      <IconAddImage />
      <input class="card__input--hidden" type="file" @change="selectFile" />
    </div>
    <div class="card__wrapper"></div>
    <section class="card__info">
      <label class="card__label" for="input">Título: </label>
      <input
        id="input"
        class="card__input"
        type="text"
        v-model="form.title"
        @keydown.enter="processInput"
      />
    </section>
  </div>
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
