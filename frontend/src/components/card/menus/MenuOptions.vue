<script setup>
import IconPencil from "../../icons/IconPencil.vue";
import IconTrash from "../../icons/IconTrash.vue";

const emit = defineEmits(["menuChanged"]);
const handleMenuChanged = (menuName) => {
  emit("menuChanged", menuName);
};
</script>

<template>
  <section class="menu">
    <div class="menu__wrapper">
      <div class="menu__option" @click="handleMenuChanged('edit')">
        <IconPencil />
        <p class="menu__p">Editar el título</p>
      </div>
      <div class="menu__option">
        <IconTrash />
        <p class="menu__p">Eliminar la foto</p>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
.menu {
  height: 24rem;
  border-bottom: 0.1rem solid map-get($map: $color, $key: "border");
  @include flex($direction: row);

  &__option {
    padding: 2rem;
    @include flex($direction: row);
  }
  &__p {
    padding-left: 1rem;
    cursor: pointer;
    font-size: map-get($map: $font-size, $key: "md");
  }
  &__wrapper {
    @include flex($direction: column, $align: flex-start);
  }
}
</style>
