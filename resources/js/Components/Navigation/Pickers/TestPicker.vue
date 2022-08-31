<script setup>
/** Source */
import { ref } from 'vue'
import Header from '@/Components/Header.vue'
import FrontPage from '@/Layouts/FrontPage.vue'
/** Constants */
const second = ref('d-none')
const tree = ref('d-none')
/** Functions */
const mouseOver = (part) => {
    if(part == 'second'){
        second.value = 'd-block'
    }
    if(part == 'tree'){
        tree.value = 'd-block'
    }
    
}
const mouseLeave = () => {
   second.value = 'd-none'
   tree.value = 'd-none'
}
</script>
<style scopped>
.d-none{
    display: none;
}
.d-flex {
    display: flex;
}
.d-block{
    display: block;
}
.w-full {
    width: 100%;
}
.categories {
    position: relative;
    background-color: red;
}
.categories__main{
    position: relative;
}
.categories__second{
    position: absolute;
    top: 0;
    left: 100%;
    width: 100%;
    height: 100%;
    padding-left: 20px;
}
.categories__second ul{
    background-color: green;
}
.categories__tree{
    position: absolute;
    top: 0;
    left: 200%;
    width: 100%;
    height: 100%;
    padding-left: 20px;
}
.categories__tree ul{
    background-color: brown;
}
.categories__list {
    padding: 2px;
}
.categories__list--item{
    text-decoration: none;
}
.categories__list--link{

}
.content{
    background-color: blue;
}
li a{
    color: white;
    font-style: bold;
}
</style>
<template>
    <FrontPage>
        <div class="container">
            <div class="row">
                <!-- Left Side -->
                <div class="col" style="max-width: 250px; width: 100%;">
                    <div class="categories" @mouseleave="mouseLeave">
                        <div class="categories__main">
                            <ul class="categories__list">
                                <li class="categories__list--item" @mouseover="mouseOver('second')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('second')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('second')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('second')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('second')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('second')"><a class="categories__list--link">1</a></li>
                            </ul>
                        </div>
                        <div class="categories__second" :class="second">
                            <ul class="categories__list">
                                <li class="categories__list--item" @mouseover="mouseOver('tree')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('tree')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('tree')"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item" @mouseover="mouseOver('tree')"><a class="categories__list--link">1</a></li>
                            </ul>
                        </div>
                        <div class="categories__tree" :class="tree" style="width: 374.5%">
                            <ul class="categories__list">
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                                <li class="categories__list--item"><a class="categories__list--link">1</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="col">
                    <div class="content" style="width: 100%">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur accusantium laborum earum iste vel excepturi beatae dolor non ea, optio debitis reprehenderit, rem illo suscipit nesciunt nobis praesentium? Cumque, sunt?
                    </div>
                </div>
            </div>
        </div>
    </FrontPage>
</template>