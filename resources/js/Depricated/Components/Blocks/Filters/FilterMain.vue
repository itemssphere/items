<!-- Filter Block Template -->
<template>
    <div class="categories categories-filter categories__shop d-flex flex-column">
                                <div class="categories-filter__form d-flex justify-content-between align-items-center">
                                    <h2 class="categories--title regular">Filters</h2>
                                    <button class="categories-filter__clear delete-filter active d-flex align-items-center regular">
                                        <p class="d-none d-lg-block">Clear</p>
                                        <img src="/assets/img/svg/clear-bold.svg" alt="" class="convert-svg">    
                                    </button>
                                </div><!-- end -->

                                <div class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Review:</h2>
                                        <button class="categories-filter__clear active d-flex align-items-center regular">
                                            Clear
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div class="products-slider__item--stars--item categories-filter__rating products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item categories-filter__rating products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item categories-filter__rating products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item categories-filter__rating products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item categories-filter__rating"></div>
                                    </div>
                                </div><!-- end -->

                                <form class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Price range:</h2>
                                        <button class="categories-filter__clear active d-flex align-items-center regular">
                                            Clear
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- input -->
                                        <div class="categories-filter__form--min-max d-flex align-items-center">
                                            <label class="min-max__label">
                                                <input type="text" class="min-max__label--input h-roman" placeholder="min" value="">
                                            </label>
                                            <label class="min-max__label">
                                                <input type="text" class="min-max__label--input h-roman" placeholder="max" value="">
                                            </label>
                                        </div>
                                        <button class="min-max--btn reguylar">
                                            Ok
                                        </button>
                                    </div>
                                </form>
                                <form form class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Price off:</h2>
                                        <button class="categories-filter__clear d-flex align-items-center regular">
                                            Clear
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                        </button>
                                    </div>
                                    <div class="categories-filter__pracent regular d-flex flex-column align-items-start">
                                        <div class="categories-filter__ratings d-flex justify-content-between">
                                            <div class="active">5%</div>
                                            <div class="active">15%</div>
                                            <div class="">25%</div>
                                            <div class="">50%</div>
                                        </div>
                                    </div><!-- end -->
                                </form><!-- end -->

                                <!-- <form class="categories-filter__form">
                                    <div class="select">
                                        <h1 class="select__title regular">Choose shipping type:</h1>
                                        <select name="" id="" class="select__list regular">
                                            <option value="" class="select__list--item">Delivery</option>
                                            <option value="" class="select__list--item">erti</option>
                                            <option value="" class="select__list--item">ori</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <h1 class="select__title regular">Location:</h1>
                                        <select name="" id="" class="select__list regular">
                                            <option value="" class="select__list--item">Tbilisi</option>
                                            <option value="" class="select__list--item">erti</option>
                                            <option value="" class="select__list--item">ori</option>
                                        </select>
                                    </div>
                                </form> -->

                                <form class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Shops</h2>
                                        <button class="categories-filter__clear d-flex align-items-center regular">
                                            Clear
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                        </button>
                                    </div>
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Full Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name Name 
                                        </span>
                                    </label><!-- end -->
                                    <a href="" class="categories-filter--all-btn d-flex justify-content-end regular">View all</a>
                                </form>

                                <form class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Brands</h2>
                                        <button class="categories-filter__clear d-flex align-items-center regular">
                                            Clear
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                        </button>
                                    </div>
                                    <div class="categories-filter__form--search d-flex align-items-center justify-content-between">
                                        <input type="text" class="regular" style="width: 100%;">
                                        <button>
                                            <img src="/assets/img/svg/filter-loog.svg" alt="" class="convert-svg">
                                        </button>
                                    </div>
                                    <div class="categories-filter__form--search-list">
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                        <!-- checkbox -->
                                        <label class="element__check d-flex align-items-center">
                                            <div>
                                                <input type="checkbox" class="element__check--input">
                                                <span class="element__check--checked">
                                                    <img src="/assets/img/svg/checked.svg" alt="">
                                                </span>
                                            </div>
                                            <span class="element__check--text regular">
                                                Name
                                            </span>
                                        </label><!-- end -->
                                    </div>
                                    <a href="" class="categories-filter--all-btn d-flex justify-content-end regular">View all</a>
                                </form>

                                <form class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Shops</h2>
                                        <button class="categories-filter__clear d-flex align-items-center regular">
                                            Clear
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                        </button>
                                    </div>
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Full Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name Name 
                                        </span>
                                    </label><!-- end -->
                                    <a href="" class="categories-filter--all-btn d-flex justify-content-end regular">View all</a>
                                </form>

                                <form class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Charities</h2>
                                        <button class="categories-filter__clear d-flex align-items-center regular">
                                            Clear
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                        </button>
                                    </div>
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Full Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name Name 
                                        </span>
                                    </label><!-- end -->
                                    <a href="" class="categories-filter--all-btn d-flex justify-content-end regular">View all</a>
                                </form>
                            </div><!-- end -->

                            <div class="categories categories-filter categories__shop">
                                <div class="categories-filter__form d-flex justify-content-between align-items-center">
                                    <h2 class="categories--title regular">Filters</h2>
                                    <button class="categories-filter__clear active d-flex align-items-center regular">
                                        <p class="d-none d-lg-block">Clear</p>
                                        <img src="/assets/img/svg/clear-bold.svg" alt="" class="convert-svg">    
                                    </button>
                                </div><!-- end -->
                                
                                <form class="categories-filter__form">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h2 class="select__title bold">Charities</h2>
                                        <button class="categories-filter__clear d-flex align-items-center regular">
                                            <img src="/assets/img/svg/filter-clear-gray.svg" alt="" class="convert-svg">    
                                            Clear
                                        </button>
                                    </div>
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Full Name
                                        </span>
                                    </label><!-- end -->
                                    <!-- checkbox -->
                                    <label class="element__check d-flex align-items-center">
                                        <div>
                                            <input type="checkbox" class="element__check--input">
                                            <span class="element__check--checked">
                                                <img src="/assets/img/svg/checked.svg" alt="">
                                            </span>
                                        </div>
                                        <span class="element__check--text regular">
                                            Name Name 
                                        </span>
                                    </label><!-- end -->
                                    <a href="" class="categories-filter--all-btn d-flex justify-content-end regular">View all</a>
                                </form>
                            </div><!-- end -->
</template>