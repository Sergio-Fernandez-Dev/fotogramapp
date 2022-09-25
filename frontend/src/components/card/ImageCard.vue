<script setup>
import IconAddLocation from "./icons/IconAddLocation.vue";
import IconOptions from "./icons/IconOptions.vue";
import IconLocation from "./icons/IconLocation.vue";

defineProps({
  url: String,
  title: String,
  location: String,
});
</script>

<template>
  <section class="card">
    <img :src="url" :alt="'Imagen de ' + title" />
  </section>
  <section class="card__buttons">
    <IconAddLocation />
    <IconOptions />
  </section>
  <section class="card__info">
    <h3 class="card__title">{{ title }}</h3>
    <div class="card__location">
        <IconLocation />
        {{ location }}
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
