<script setup>
const emit = defineEmits(["deletionAccepted", "deletionCancelled"]);

const deleteButton = () => {
  emit("deletionAccepted");
};
const cancelButton = () => {
  emit("deletionCancelled");
};
</script>

<template>
  <section class="menu">
    <div class="menu__wrapper">
      <div class="menu__text">
        <p class="menu__p">La foto sera borrada de forma permanente.</p>
        <p class="menu__p">¿Seguro que quieres continuar?</p>
      </div>
      <div class="menu__buttons">
        <button class="button button--filled" @click="deleteButton">Sí</button>
        <button class="button button--outlined" @click="cancelButton">
          No
        </button>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
.button {
  width: 6rem;
  margin: 0 1rem;
  border: none;
  border-radius: 2rem;
  cursor: pointer;
  &--filled {
    background-color: map-get($map: $color, $key: "contrast");
    border: 0.1rem solid map-get($map: $color, $key: "contrast");
    color: $white-color;
  }
  &--outlined {
    background-color: map-get($map: $color, $key: "background");
    border: 0.1rem solid map-get($map: $color, $key: "text");
  }
}

.menu {
  height: 24rem;
  padding: 2rem;
  border-bottom: 0.1rem solid map-get($map: $color, $key: "border");
  @include flex($direction: row);
  &__buttons {
    @include flex($direction: row);
  }
  &__p {
    line-height: 3rem;
  }
  &__text {
    font-size: map-get($map: $font-size, $key: "md");
    margin-bottom: 3rem;
    text-align: center;
  }
}
</style>
