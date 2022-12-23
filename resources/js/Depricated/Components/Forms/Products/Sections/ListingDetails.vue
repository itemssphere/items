<template>
  <div class="upload__body--tab" style="display: block">
    <div class="col-12">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title product-upload-titles regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Title Eng
        </span>
        <input
          type="text"
          class="cart-order__form--input regular"
          placeholder=""
        />
      </div>
    </div>
    <div class="col-12">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title regular product-upload-titles">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Title Geo
        </span>
        <input
          type="text"
          class="cart-order__form--input regular"
          placeholder=""
        />
      </div>
    </div>
    <div class="col-3 selects-inproduct-upload">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title product-upload-titles regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          End Date
        </span>
        <input
          type="date"
          class="cart-order__form--input regular"
          placeholder=""
        />
      </div>
    </div>
    <div class="col-12" style="margin-top: 48px">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title product-upload-titles regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Categories
        </span>
        <div class="product-upload__categories">
          <p class="regular">Choose Category</p>
          <img src="/assets/img/svg/header-btn/arrow.svg" alt="down" />
        </div>
        <div class="dropdown-container product-upload-add-categories d-none">
          <button type="button" class="regular prev-categories">
            <img
              src="/assets/img/svg/header-btn/arrow.svg"
              class="color-blue"
              alt=""
            />
            <p class="color-blue">Back</p>
          </button>
          <ul class="categories-list regular">
            <li>product 1</li>
            <li>product 2</li>
            <li>product 3</li>
            <li>product 4</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12" style="margin-top: 24px">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title product-upload-titles regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Tags
        </span>
        <div class="product-upload__tags">
          <p class="regular" style="display: none">Choose Tags</p>
          <ul class="selected-tags">
            <li>
              <p class="tag-name">Anniversary</p>
              <img
                src="/assets/img/svg/popup-close.svg"
                class="remove-tag"
                alt=""
              />
            </li>
            <li>
              <p class="tag-name">Christmas &amp; Winter</p>
              <img
                src="/assets/img/svg/popup-close.svg"
                class="remove-tag"
                alt=""
              />
            </li>
            <li>
              <p class="tag-name">Birthday</p>
              <img
                src="/assets/img/svg/popup-close.svg"
                class="remove-tag"
                alt=""
              />
            </li>
            <li>
              <p class="tag-name">Anniversary</p>
              <img
                src="/assets/img/svg/popup-close.svg"
                class="remove-tag"
                alt=""
              />
            </li>
            <li>
              <p class="tag-name">Christmas &amp; Winter</p>
              <img
                src="/assets/img/svg/popup-close.svg"
                class="remove-tag"
                alt=""
              />
            </li>
            <li>
              <p class="tag-name">Birthday</p>
              <img
                src="/assets/img/svg/popup-close.svg"
                class="remove-tag"
                alt=""
              />
            </li>
          </ul>
          <img src="/assets/img/svg/header-btn/arrow.svg" alt="down" />
        </div>
        <div class="dropdown-container product-upload-add-tags">
          <ul class="tags-list regular">
            <li>
              <label class="element__check d-flex align-items-center">
                <div>
                  <input type="checkbox" class="element__check--input" />
                  <span class="element__check--checked">
                    <img src="/assets/img/svg/checked.svg" alt="" />
                  </span>
                </div>
                <span class="element__check--text regular">
                  tag 1
                </span> </label
              ><!-- end -->
            </li>
            <li>
              <label class="element__check d-flex align-items-center">
                <div>
                  <input type="checkbox" class="element__check--input" />
                  <span class="element__check--checked">
                    <img src="/assets/img/svg/checked.svg" alt="" />
                  </span>
                </div>
                <span class="element__check--text regular">
                  tag 2
                </span> </label
              ><!-- end -->
            </li>
            <li>
              <label class="element__check d-flex align-items-center">
                <div>
                  <input type="checkbox" class="element__check--input" />
                  <span class="element__check--checked">
                    <img src="/assets/img/svg/checked.svg" alt="" />
                  </span>
                </div>
                <span class="element__check--text regular">
                  tag 3
                </span> </label
              ><!-- end -->
            </li>
            <li>
              <label class="element__check d-flex align-items-center">
                <div>
                  <input type="checkbox" class="element__check--input" />
                  <span class="element__check--checked">
                    <img src="/assets/img/svg/checked.svg" alt="" />
                  </span>
                </div>
                <span class="element__check--text regular">
                  tag 4
                </span> </label
              ><!-- end -->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>