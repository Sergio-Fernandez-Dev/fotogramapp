<script setup>
import IconAddLocation from "@/components/icons/IconAddLocation.vue";
import IconOptions from "@/components/icons/IconOptions.vue";
import IconLocation from "@/components/icons/IconLocation.vue";

defineProps({
  url: String,
  title: String,
  location: String,
});
</script>

<template>
  <section class="card">
    <div class="card__img" :style="`background-image:url(${url})`"></div>
    <div class="card__wrapper">
      <section class="card__buttons">
        <IconAddLocation />
        <IconOptions />
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
  border:  0.1rem solid map-get($map: $color, $key: "border");
  box-shadow: 0.3rem 0.3rem 0.8rem ;

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
    border-bottom:  0.1rem solid map-get($map: $color, $key: "border");
    @include flex($direction: row, $justify: flex-end);
  }
}
</style>
