<script setup>
import FrontPage from "@/Layouts/FrontPage.vue";
</script>
<!-- Social Program Create Template -->
<template>
  <FrontPage>
    <div class="shop-detail">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
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
                      align-items-center
                    "
                  >
                    <input
                      type="radio"
                      name="main-img-1"
                      value="1"
                      class="radio-on-img"
                    />
                    <button
                      class="
                        products-slider__item--fav
                        upload__image--btn-delete
                        buttons-on-image-upload
                      "
                    >
                      <img
                        src="/assets/img/svg/trash.svg"
                        class="trash-on-image-upload"
                        alt=""
                      />
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
                    <input
                      type="radio"
                      value="1"
                      name="main-img-2"
                      class="radio-on-img"
                    />
                    <button
                      class="
                        products-slider__item--fav
                        upload__image--btn-delete
                        buttons-on-image-upload
                      "
                    >
                      <img
                        src="/assets/img/svg/trash.svg"
                        class="trash-on-image-upload"
                        alt=""
                      />
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
          </div>
          <div class="col-lg-7">
            <div class="shop-detail__info">
              <ul class="page__navigation--links d-none d-lg-flex">
                <li class="page__navigation--link regular">
                  <a href="">Home</a>
                </li>
                <li class="page__navigation--link regular">
                  >
                  <a href="">Upload social program</a>
                </li>
              </ul>
              <h1 class="shop-detail__info--title bold d-none d-lg-block">
                Upload Social program
              </h1>
              <div class="row">
                <div class="col-12">
                  <div class="upload">
                    <form class="upload__body">
                      <div
                        class="upload__body--tab social-program-upload-form"
                        style="display: block"
                      >
                        <div class="col-md-11">
                          <div class="cart-order__form--label">
                            <span
                              class="
                                cart-order__form--title
                                product-upload-titles
                                regular
                              "
                            >
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
                        <div class="col-md-11">
                          <div class="cart-order__form--label">
                            <span
                              class="
                                cart-order__form--title
                                regular
                                product-upload-titles
                              "
                            >
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
                        <div
                          class="col-md-4"
                          style="height: fit-content !important"
                        >
                          <div class="cart-order__form--label">
                            <span
                              class="
                                cart-order__form--title
                                product-upload-titles
                                regular
                              "
                            >
                              <img src="/assets/img/svg/red-union.svg" alt="" />
                              Duration
                            </span>
                            <input
                              type="date"
                              class="
                                cart-order__form--input
                                regular
                                social-program-fields
                              "
                              placeholder=""
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="cart-order__form--label">
                            <span class="cart-order__form--title regular">
                              <img src="/assets/img/svg/red-union.svg" alt="" />
                              Category
                            </span>
                            <select
                              class="
                                select__list
                                regular
                                selects-inproduct-upload
                                selects-on-social-program-upload
                                social-program-fields
                              "
                              name
                            >
                              <option value="new">Choose category</option>
                              <option value="opt1">Opt1</option>
                              <option value="opt2">Opt2</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="cart-order__form--label">
                            <span class="cart-order__form--title regular">
                              <img src="/assets/img/svg/red-union.svg" alt="" />
                              Currency
                            </span>
                            <select
                              class="
                                select__list
                                regular
                                selects-inproduct-upload
                                selects-on-social-program-upload
                                social-program-fields
                              "
                              name
                            >
                              <option value="new">Gel</option>
                              <option value="opt1">Opt1</option>
                              <option value="opt2">Opt2</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="cart-order__form--label">
                            <span
                              class="
                                cart-order__form--title
                                product-upload-titles
                                regular
                              "
                            >
                              <img src="/assets/img/svg/red-union.svg" alt="" />
                              Goal
                            </span>
                            <input
                              type="text"
                              class="
                                cart-order__form--input
                                regular
                                social-program-fields
                              "
                              placeholder=""
                            />
                          </div>
                        </div>
                        <div class="col-md-11">
                          <div class="cart-order__form--label">
                            <span
                              class="
                                cart-order__form--title
                                regular
                                product-upload-titles
                              "
                            >
                              <img src="/assets/img/svg/red-union.svg" alt="" />
                              Receiver Name
                            </span>
                            <input
                              type="text"
                              class="cart-order__form--input regular"
                              placeholder=""
                            />
                          </div>
                        </div>
                        <div class="col-md-11">
                          <div class="cart-order__form--label">
                            <span
                              class="
                                cart-order__form--title
                                regular
                                product-upload-titles
                              "
                            >
                              <img src="/assets/img/svg/red-union.svg" alt="" />
                              Account Number: IBAN
                            </span>
                            <input
                              type="text"
                              class="cart-order__form--input regular"
                              placeholder=""
                            />
                          </div>
                        </div>

                        <div class="col-md-11">
                          <div class="product-description-container">
                            <span
                              class="product-description-title regular"
                              style="margin-left: 0px"
                              >About Program ENG</span
                            >
                            <textarea
                              name="productDescription"
                              class="
                                product-description
                                program-upload-description
                                regular
                                product-upload__descriptions
                              "
                              rows="10"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-md-11">
                          <div class="product-description-container">
                            <span
                              class="product-description-title regular"
                              style="margin-left: 0px"
                              >About Program GEO</span
                            >
                            <textarea
                              name="productDescription"
                              class="
                                product-description
                                program-upload-description
                                regular
                                product-upload__descriptions
                              "
                              rows="10"
                            ></textarea>
                          </div>
                        </div>
                      </div>
                      <!-- end -->
                      <div class="row">
                        <div class="col-md-4">
                          <div class="d-flex">
                            <div class="form-buttons-block">
                              <button
                                type="button"
                                class="
                                  bold
                                  social-program-upload-list-project-button
                                "
                              >
                                List Project
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div
                            class="
                              d-flex
                              justify-content-end
                              form-buttons-block
                            "
                          >
                            <button
                              class="
                                cart-order__body--btn
                                bold
                                social-program-upload-draft-button
                              "
                            >
                              Save as draft
                            </button>
                            <button
                              class="
                                cart-order__form--btn
                                bold
                                social-program-upload-cancel-button
                              "
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </FrontPage>
</template>