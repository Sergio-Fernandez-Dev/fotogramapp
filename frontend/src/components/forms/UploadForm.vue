<script setup>
import { ref } from "vue";
import { doGetRequest, doPostRequest } from "../../services/apiRequests";
import IconAddImage from "../icons/IconAddImage.vue";
import { useCardStore } from "@/stores/cardList";
import IconSend from "../icons/IconSend.vue";

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
  form.value.image = "";
  form.value.title = "";
  store.cardList.value = await doGetRequest("images");
};
</script>

<template>
  <div class="card">
    <div class="card__img">
      <label for="hidden-input">
        <IconAddImage />
      </label>
      <input
        class="card__input--hidden"
        id="hidden-input"
        type="file"
        accept="image/png, image/jpg, image/jpeg"
        @change="selectFile"
      />
    </div>
    <div class="card__text">
      <label class="card__label" for="input">Título: </label>
      <input
        id="input"
        class="card__input"
        type="text"
        v-model="form.title"
        @keydown.enter="processInput"
      />
      <IconSend class="card__icon" @click="processInput" />
    </div>
  </div>
</template>

<style lang="scss" scoped>
.card {
  &__img {
    border-bottom: 0.1rem solid map-get($map: $color, $key: "border");

    @include flex($direction: row);
  }
  &__drop {
    @include flex($direction: row);
  }

  &__input {
    border: none;
    border-bottom: 0.1rem solid map-get($map: $color, $key: "border");
    background-color: map-get($map: $color, $key: "background");
    &--hidden {
      display: none;
    }
  }
  &__label {
    margin-right: 0.5rem;
    font-weight: bold;
  }
  &__text {
    width: 100%;
    padding: 2rem;
    @include flex($direction: row, $justify: space-between);
  }
}
</style>
