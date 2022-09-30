<script setup>
  /** Source */

  /** Props */
  const props = defineProps({
    tabs: Array,
    activeTab: Number,
  });
  /** Emmits */
  const emit = defineEmits(["save", "switch"]);
</script>
<template>
  <div class="row">
    <div class="col-md-5">
      <div class="d-flex justify-content-between">
          <button
            type="button"
            class="upload__body--prev bold prev-next-pages-btn"
            :disabled="activeTab == 0"
            @click="emit('switch', -1)"
          >
            Previous
          </button>
          <button
            type="button"
            class="upload__body--next bold prev-next-pages-btn"
            :disabled="activeTab == tabs.length - 1"
            @click="emit('switch', 1)"
          >
            Next
          </button>
      </div>
    </div>
    <div class="col-md-7">
      <div class="d-flex justify-content-end">
        <button
          class="
            cart-order__body--btn cart-order__body--blue
            bold
            save-as-draft-desktop
          "
          @click="emit('save')"
        >
          Save as draft
        </button>
        <button @click="emit('cancel')" class="cart-order__form--btn bold">Cancel</button>
      </div>
    </div>
  </div>
</template>