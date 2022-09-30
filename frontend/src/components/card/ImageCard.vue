<script setup>
import MenuEdit from "./menus/MenuEdit.vue";
import MenuConfirmDeletion from "./menus/MenuConfirmDeletion.vue";
import IconPencil from "../icons/IconPencil.vue";
import IconTrash from "../icons/IconTrash.vue";
import { ref } from "vue";
import { useCardStore } from "@/stores/cardList";
import {
  doGetRequest,
  doPatchRequest,
  doDeleteRequest,
} from "../../services/apiRequests";

const store = useCardStore();

const props = defineProps({
  id: Number,
  url: String,
  title: String,
});

const currentMenu = ref("image");
const menu = {
  image: "image",
  delete: "delete",
  edit: "edit",
};

const goToMenu = (menuName) => {
  currentMenu.value != menuName
    ? (currentMenu.value = menuName)
    : (currentMenu.value = menu.image);
};

const updateTitle = async (modifiedTitle) => {
  console.log("props " + props.id);
  const data = { title: modifiedTitle };
  doPatchRequest("images", props.id, data);
  currentMenu.value = menu.image;
  store.cardList.value = await doGetRequest("images");
};

const deleteCard = async () => {
  doDeleteRequest("images", props.id);
  currentMenu.value = menu.image;
  store.cardList.value = await doGetRequest("images");
};
</script>

<template>
  <section class="card">
    <div
      v-if="currentMenu == menu.image"
      class="card__img"
      :style="`background-image:url(${url})`"
    ></div>
    <MenuEdit
      v-if="currentMenu == menu.edit"
      :title="title"
      @titleChanged="updateTitle"
    />
    <MenuConfirmDeletion
      v-if="currentMenu == menu.delete"
      :id="id"
      @deletionAccepted="deleteCard"
      @deletionCancelled="goToMenu(menu.image)"
    />
    <div class="card__wrapper">
      <section class="card__buttons">
        <IconPencil class="card__icon" @click="goToMenu(menu.edit)" />
        <IconTrash class="card__icon" @click="goToMenu(menu.delete)" />
      </section>
    </div>
    <section class="card__info">
      <h3 class="card__title">{{ title }}</h3>
    </section>
  </section>
</template>

<style lang="scss">
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
  &__icon {
    cursor: pointer;
  }
  &__info {
    padding: 1rem 2rem;
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
