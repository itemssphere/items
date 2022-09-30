<template>
  <div class="shop-detail__slider">
    <div class="shop-detail__main-slider">
      <label
        class="
          upload__image
          d-flex
          flex-column
          align-items-center
          justify-content-center
        "
      >
        <img
          class="upload__image--icon"
          src="/assets/img/svg/upload-icon.svg"
          alt=""
        />
        <div
          class="
            upload__image--text
            regular
            d-flex
            flex-column
            align-items-center
          "
        >
          <p>Drop Images to upload</p>
          <p>or</p>
        </div>
        <input
          type="file"
          class="upload__image--input h-roman"
          onchange="fileUploadImage(this, value)"
        />
        <img src="" alt="" class="upload__image--uploaded" />
        <div class="upload__image--btn regular">Browse</div>
      </label>
    </div>
    <div
      class="
        shop-detail__mini-slider
        upload__image--mini
        d-flex
        align-items-center
      "
    >
      <div
        class="
          shop-detail__mini-slider--cover
          upload__image--upload
          d-flex
          align-items-center
          justify-content-center
        "
      >
        <label
          class="
            upload__image
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
        >
          <img
            class="upload__image--icon"
            src="/assets/img/svg/upload-icon.svg"
            alt=""
          />
          <input
            type="file"
            class="upload__image--input h-roman"
            onchange="fileUploadImage(this, value)"
          />
          <img src="" alt="" class="upload__image--uploaded" />
        </label>
        <div
          class="
            upload__image--btn-footer
            d-flex
            justify-content-between
            align-content-center
          "
        >
          <input type="radio" value="1" class="radio-on-img" />
          <button class="products-slider__item--fav upload__image--btn-delete">
            <img src="/assets/img/svg/product-fav.svg" alt="" />
          </button>
        </div>
      </div>
      <div
        class="
          shop-detail__mini-slider--cover
          upload__image--upload
          d-flex
          align-items-center
          justify-content-center
        "
      >
        <label
          class="
            upload__image
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
        >
          <img
            class="upload__image--icon"
            src="/assets/img/svg/upload-icon.svg"
            alt=""
          />
          <input
            type="file"
            class="upload__image--input h-roman"
            onchange="fileUploadImage(this, value)"
          />
          <img src="" alt="" class="upload__image--uploaded" />
        </label>
        <div
          class="
            upload__image--btn-footer
            d-flex
            justify-content-between
            align-items-center
          "
        >
          <input type="radio" value="1" class="radio-on-img" />
          <button class="products-slider__item--fav upload__image--btn-delete">
            <img src="/assets/img/svg/product-fav.svg" alt="" />
          </button>
        </div>
      </div>
      <div
        class="
          shop-detail__mini-slider--cover
          upload__image--upload
          d-flex
          align-items-center
          justify-content-center
        "
      >
        <label
          class="
            upload__image
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
        >
          <img
            class="upload__image--icon"
            src="/assets/img/svg/upload-icon.svg"
            alt=""
          />
          <input
            type="file"
            class="upload__image--input h-roman"
            onchange="fileUploadImage(this, value)"
          />
          <img src="" alt="" class="upload__image--uploaded" />
        </label>
      </div>
    </div>
  </div>
</template>