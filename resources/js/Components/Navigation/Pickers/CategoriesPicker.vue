<script setup>
/** Source */
import { useI18n } from 'vue-i18n'
import { useCategories } from "@/Composables/useCategories"
/** Constants */
const { categories, parents, secondary, getChildren, hasChildren } = useCategories()
const { t } = useI18n({ inheritLocale: true })

/** Functions */
const mouseLeave = () => {
  let className = "d-flex";
  Array.from(document.getElementsByClassName("categories__second")).forEach(
    function (node) {
      node.classList.remove(className);
    }
  );
  Array.from(document.getElementsByClassName("categories__three")).forEach(
    function (node) {
      node.classList.remove(className);
    }
  );
};
const mouseOver = (event) => {
  let self = event.target;
  let secondaries = Array.from(
    document.getElementsByClassName("categories__second")
  );
  let trees = Array.from(document.getElementsByClassName("categories__three"));

  if (Array.from(self.classList).includes("categories__first--item")) {
    secondaries.forEach(function (node) {
      node.classList.remove("d-flex");
    });
    let targetNode = secondaries.filter(
      (node) =>
        node.attributes["data-id"].value == self.attributes["data-id"].value
    )[0];
    if (targetNode !== undefined) {
      targetNode.classList.add("d-flex");
    }
  }

  if (Array.from(self.classList).includes("categories__second--item")) {
    trees.forEach(function (node) {
      node.classList.remove("d-flex");
    });
    let targetNode = trees.filter(
      (node) =>
        node.attributes["data-id"].value == self.attributes["data-id"].value
    )[0];
    if (targetNode !== undefined) {
      targetNode.classList.add("d-flex");
    }
  }
}

const toChunks = (array, chunkSize = 5) => {
    let result = []
    for (let i = 0; i < array.length; i += chunkSize) {
        let chunk = array.slice(i, i + chunkSize);
        result.push(chunk)
    }
    return result
}

</script>
<!-- Categories Picker Template -->
<template>
  <div class="container categories-not" @mouseleave="mouseLeave">
    <div class="row">
      <div
        class="d-none d-lg-inline-flex"
        style="position: relative; max-width: 265px; width: 100%"
      >
        <!-- Category Rang 1 -->
        <div class="categories__first" style="max-width: 250px; width: 100%">
          <div class="categories">
            <!-- Categories Main List -->
            <h2 class="categories--title regular">{{ t('titles.categories') }}</h2>
            <ul class="categories__list">
              <li
                v-for="item in parents"
                :key="item.index"
                @mouseover="mouseOver"
                class="categories__list--item categories__first--item"
                :data-id="item.id"
              >
                <a
                  :href="item.url"
                  class="categories__list--link regular"
                  :data-id="item.id"
                >
                  <span :data-id="item.id">{{ item.name }}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="row">
          <div class="d-flex">
            <div class="col" style="max-width: 265px; width: 100%">
              <!-- Category Rang 2 Section -->
              <template v-for="item in parents" :key="item.id">
                <div
                  v-if="hasChildren(item)"
                  class="categories__second"
                  style="max-width: 250px; width: 100%"
                  :data-id="item.id"
                >
                  <div class="categories">
                    <h2 class="categories--title regular">{{ item.name }}</h2>
                    <ul class="categories__list">
                      <li
                        class="categories__list--item categories__second--item"
                        v-for="child in getChildren(item)"
                        :key="child.index"
                        :data-id="child.id"
                        @mouseover="mouseOver"
                      >
                        <a
                          :href="child.url"
                          class="categories__list--link regular"
                          :data-id="child.id"
                        >
                          <span :data-id="child.id">{{ child.name }}</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </template>
            </div>
            <div class="col" style="position: relative">
              <!-- Category Rang 3 -->
              <template v-for="item in secondary" :key="item.id">
                <div v-if="hasChildren(item)" class="categories__three flex-row flex-wrap" :data-id="item.id">
                    <div class="row" style="width: 100%">
                        <h2 class="categories--title regular">{{ item.name }}</h2>
                    </div>
                  
                  <div class="row mb-2" v-for="section in toChunks(toChunks(getChildren(item)),3)" :key="section.index">
                    <div class="col" v-for="list in section" :key="list.index">
                        
                        <ul class="categories__list">
                            <li class="categories__list--item" v-for="item in list" :key="item.id">
                                <a :href="item.url" class="categories__list--link regular"><span>{{ item.name }}</span></a>
                            </li>
                        </ul>
                    </div>
                  </div>
                </div>
              </template>
            </div>
          </div>
          <!-- Slot: "Main Slider" -->
          <slot name="mainSlider"></slot>
          <!-- Slot: "Banners" -->
          <slot name="banners"></slot>
        </div>
      </div>
    </div>
  </div>
</template>