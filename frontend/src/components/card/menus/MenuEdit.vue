<script setup>
import { onMounted, ref } from "vue";

defineProps({
  title: String,
});
const input = ref();

onMounted(() => {
  input.value = document.getElementById("card-input");
  input.value.focus();
});
const emit = defineEmits(["titleChanged"]);

const processInput = (modifiedTitle) => {
  emit("titleChanged", modifiedTitle);
}
</script>

<template>
  <section class="menu">
    <div class="menu__wrapper">
      <label class="menu__label" for="change-title"
        >Escribe el nuevo título:</label
      >
      <input
        id="card-input"
        class="menu__input"
        type="text"
        :value="title"
        @keydown.enter="processInput(input.value)"
      />
    </div>
  </section>
</template>

<style lang="scss" scoped>
.menu {
  height: 24rem;
  border-bottom: 0.1rem solid map-get($map: $color, $key: "border");
  @include flex($direction: row);
  &__wrapper {
    @include flex($direction: column, $align: flex-start);
  }
  &__label {
    margin-bottom: 1rem;
  }
  &__input {
    border: none;
    border-bottom: 0.1rem solid map-get($map: $color, $key: "border");
    background-color: map-get($map: $color, $key: "background");
    // &::
  }
}
</style>
