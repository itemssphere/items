<script setup>
/** Source */
import { useI18n } from 'vue-i18n'
import { useCategories } from "@/Composables/Data/useCategories"
import { useFunctions  } from '@/Composables/Assets/useFunctions'

/** Constants */
const { active, categories, getChildren, getParent, getParents, hasParent, hasChildren, setActive } = useCategories()
const { t } = useI18n({ inheritLocale: true })
const { toChunks } = useFunctions()
const backSlash = '<'
/** Functions */
const mouseLeave = () => {
  let blocks = ['categories__second', 'categories__three']
  let className = "d-flex"
  blocks.forEach((block) => {
    Array.from(document.getElementsByClassName(block)).forEach((node) => {
      node.classList.remove(className)
    })
  })
}
const mouseOver = (event) => {
  let self = event.target;
  let secondaries = Array.from(document.getElementsByClassName("categories__second"))
  let trees = Array.from(document.getElementsByClassName("categories__three"))

  if (Array.from(self.classList).includes("categories__first--item")) {
    secondaries.forEach((node) => { node.classList.remove("d-flex") })
    let targetNode = secondaries.filter((node) => node.attributes["data-id"].value == self.attributes["data-id"].value)[0]
    if (targetNode !== undefined) { targetNode.classList.add("d-flex") }
  }
  if (Array.from(self.classList).includes("categories__second--item")) {
    trees.forEach((node) => { node.classList.remove("d-flex") })
    let targetNode = trees.filter((node) => node.attributes["data-id"].value == self.attributes["data-id"].value)[0]
    if (targetNode !== undefined) { targetNode.classList.add("d-flex") }
  }

}

const activate = (item) => {
  mouseLeave()
  if(hasChildren(item)){
    setActive(getChildren(item))
  }
}

const reverse = (item) => {
  mouseLeave()
  if(hasParent(item)){
    setActive(getParents(item))
  }
}

</script>
<!-- Categories Picker Template -->
<template>
  <div class="container categories-not" @mouseleave="mouseLeave">
    <div class="row" style="position: relative;">
      <div class="d-none d-lg-inline-flex" style="position: relative; max-width: 265px; width: 100%">
        <div class="categories__first" style="max-width: 250px; width: 100%; position: relative; height: auto;">

          <div class="categories">
            <h2 v-if="!hasParent(active[0])" class="categories--title regular">{{ t('titles.categories') }}</h2>
            <h2 v-else class="categories--title regular">{{ backSlash }} <a href="" @click="reverse(active[0])">{{ getParent(active[0]).name }}</a></h2>
            <ul class="categories__list" style="height: 94%;">
              <li v-for="item in active" :key="item.index" @mouseover="mouseOver" :data-id="item.id" class="categories__list--item categories__first--item">
                <a href="" @click="activate(item)" :data-id="item.id" class="categories__list--link regular">
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
              <template v-for="item in active" :key="item.id">
                <div v-if="hasChildren(item)" class="categories__second" style="max-width: 250px; width: 100%;" :data-id="item.id">
                  <div class="categories">
                    <h2 class="categories--title regular">{{ item.name }}</h2>
                    <ul class="categories__list">
                      <li v-for="child in getChildren(item)" :key="child.index" @mouseover="mouseOver" :data-id="child.id" class="categories__list--item categories__second--item">
                        <a href="" @click="activate(child)" class="categories__list--link regular" :data-id="child.id">
                          <span :data-id="child.id">{{ child.name }}</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <slot name="filters" />
                </div>
              </template>
            </div>
            <div class="col">
              <!-- Category Rang 3 -->
              <template v-for="item in categories.filter(category => category.parent_id != null)" :key="item.id">
                  <div v-if="hasChildren(item)" class="categories__three flex-row flex-wrap" :data-id="item.id">
                    <template v-for="chunk in toChunks(getChildren(item),3)" :key="chunk.index">
                      <div class="col-4" v-for="section in chunk" :key="section.id">
                        <h2 class="categories--title regular"><a href="" class="categories__list--link">{{ section.name }}</a></h2>
                        <ul class="categories__list">
                            <li class="categories__list--item" v-for="item in getChildren(section)" :key="item.id">
                                <a href="" class="categories__list--link regular"><span>{{ item.name }}</span></a>
                            </li>
                        </ul>
                      </div>
                    </template>
                  </div>
              </template>
            </div>
          </div>
          <!-- Default Slot -->
          <slot />
        </div>
      </div>
    </div>
  </div>
</template>