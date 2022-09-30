<template>
  <div class="upload__body--tab" style="display: block">
    <div class="col-3" style="width: 197px">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Condition
        </span>
        <select class="select__list regular selects-inproduct-upload" name="">
          <option value="new">New</option>
          <option value="opt1">Opt1</option>
          <option value="opt2">Opt2</option>
        </select>
      </div>
    </div>
    <div class="col-3" style="width: 197px">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Manufacturing year
        </span>
        <select class="select__list regular selects-inproduct-upload" name="">
          <option value="new">New</option>
          <option value="opt1">Opt1</option>
          <option value="opt2">Opt2</option>
        </select>
      </div>
    </div>
    <div class="col-3" style="width: 197px">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Brand
        </span>
        <select class="select__list regular selects-inproduct-upload" name="">
          <option value="new">New</option>
          <option value="opt1">Opt1</option>
          <option value="opt2">Opt2</option>
        </select>
      </div>
    </div>
    <div class="col-3" style="width: 197px">
      <div class="cart-order__form--label">
        <span class="cart-order__form--title regular">
          <img src="/assets/img/svg/red-union.svg" alt="" />
          Currency
        </span>
        <select class="select__list selects-inproduct-upload regular" name="">
          <option value="new">New</option>
          <option value="opt1">Opt1</option>
          <option value="opt2">Opt2</option>
        </select>
      </div>
    </div>
    <div class="cart-order__form--product-characteristics">
      <div class="d-flex justify-content-between">
        <p class="bold title">Product Charasteristics</p>
        <button class="remove-charasteristic-btn">
          <img
            src="/assets/img/svg/trash.svg"
            class="remove-charasteristic"
            alt="trash"
          />
        </button>
      </div>
      <div class="form-field">
        <div class="cart-order__form--label">
          <span class="cart-order__form--title regular"> Charasterics 1 </span>
          <div class="d-flex align-items-center">
            <input
              type="text"
              class="cart-order__form--input regular selects-inproduct-upload"
              placeholder=""
            />
            <input
              type="checkbox"
              name="check"
              class="checkboxes"
              style="margin-left: 20px"
            />
          </div>
        </div>
      </div>
      <div class="form-field">
        <div class="cart-order__form--label">
          <span class="cart-order__form--title regular"> Charasterics 2 </span>
          <div class="d-flex align-items-center">
            <input
              type="text"
              class="cart-order__form--input regular selects-inproduct-upload"
              placeholder=""
            />
            <input
              type="checkbox"
              name="check"
              class="checkboxes"
              style="margin-left: 20px"
            />
          </div>
        </div>
      </div>
      <div class="form-field">
        <div class="cart-order__form--label">
          <span class="cart-order__form--title regular">
            <img src="/assets/img/svg/red-union.svg" alt="" />
            Charasterics 3
          </span>
          <div class="d-flex align-items-center">
            <input
              type="text"
              class="cart-order__form--input regular selects-inproduct-upload"
              placeholder=""
            />
            <input
              type="checkbox"
              name="check"
              class="checkboxes"
              style="margin-left: 20px"
            />
          </div>
        </div>
      </div>
    </div>
    <button class="add-product-option">+ Add Other Product Option</button>
    <div class="product-description-container">
      <span class="product-description-title regular"
        >Product Description Eng</span
      >
      <textarea
        name="productDescription"
        class="product-description regular product-upload__descriptions"
        rows="10"
      ></textarea>
    </div>
    <div class="product-description-container">
      <span class="product-description-title regular"
        >Product Description Eng</span
      >
      <textarea
        name="productDescription"
        class="product-description regular product-upload__descriptions"
        rows="10"
      ></textarea>
    </div>
    <div class="product-description-container">
      <span class="product-description-title regular"
        >Product Description Eng</span
      >
      <textarea
        name="productDescription"
        class="product-description regular product-upload__descriptions"
        rows="10"
      ></textarea>
    </div>
    <div class="product-description-container">
      <span class="product-description-title regular"
        >Product Description Eng</span
      >
      <textarea
        name="productDescription"
        class="product-description regular product-upload__descriptions"
        rows="10"
      ></textarea>
    </div>
  </div>
</template>