<script setup>
import IconAddLocation from "@/components/icons/IconAddLocation.vue";
import IconOptions from "@/components/icons/IconOptions.vue";
import IconLocation from "@/components/icons/IconLocation.vue";
import MenuOptions from "./menus/MenuOptions.vue";
import MenuEdit from "./menus/MenuEdit.vue";
import { ref } from "vue";
import { useCardStore } from "@/stores/cardList";

const store = useCardStore();
const cardList = store.cardList.value;
console.log(cardList);

const currentMenu = ref("image");
const menu = {
  image: "image",
  options: "options",
  delete: "delete",
  edit: "edit",
  location: "location",
};
const goToMenu = (menuName) => {
  currentMenu.value = menuName;
};


defineProps({
  id: Number,
  url: String,
  title: String,
  location: String,
});
</script>

<template>
  <section class="card">
    <div
      class="card__img"
      :style="`background-image:url(${url})`"
      v-if="currentMenu == menu.image"
    ></div>
    <MenuOptions v-if="currentMenu == menu.options" @menuChanged="goToMenu" />
    <MenuEdit
      v-if="currentMenu == menu.edit"
      :title="title"
      @titleChanged="updateTitle"
    />
    <div class="card__wrapper">
      <section class="card__buttons">
        <IconAddLocation />
        <IconOptions
          @click="
            currentMenu != menu.options
              ? goToMenu(menu.options)
              : goToMenu(menu.image)
          "
        />
      </section>
    </div>
    <section class="card__info">
      <h3 class="card__title">{{ title }}</h3>
      <div class="card__location">
        <IconLocation />
        <p class="card__p">{{ location }}</p>
      </div>
    </section>
  </section>
</template>

<style lang="scss" scoped>
.card {
  border: 0.1rem solid map-get($map: $color, $key: "border");
  box-shadow: 0.3rem 0.3rem 0.8rem;

  &__buttons {
    width: 5rem;
    @include flex($direction: row, $justify: space-between);
  }
  &__img {
    height: 24rem;
    background-position: center;
    background-size: cover;
  }
  &__info {
    padding: 1rem 2rem;
  }
  &__location {
    font-family: $secondary-font-family;
    font-size: map-get($map: $font-size, $key: "sm");
    padding-bottom: 0.5rem;
    @include flex($direction: row, $justify: flex-start);
  }
  &__p {
    padding-left: 1rem;
  }
  &__title {
    font-family: $primary-font-family;
    font-size: map-get($map: $font-size, $key: "sm");
    font-weight: bold;
    padding-bottom: 0.5rem;
  }
  &__wrapper {
    width: 100%;
    padding: 0.5rem 2rem;
    border-bottom: 0.1rem solid map-get($map: $color, $key: "border");
    @include flex($direction: row, $justify: flex-end);
  }
}
</style>
