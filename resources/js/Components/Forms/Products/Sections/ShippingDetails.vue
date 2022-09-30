<template>
  <div class="upload__body--tab" style="display: block">
    <span class="cart-order__form--title regular">
      <img src="/assets/img/svg/red-union.svg" alt="" />
      Default Details
    </span>
    <div class="row choose-delivery-type">
      <div class="col-md-3">
        <label class="element__check d-flex align-items-center">
          <div>
            <input type="checkbox" class="element__check--input" />
            <span class="element__check--checked">
              <img src="/assets/img/svg/checked.svg" alt="" />
            </span>
          </div>
          <span class="element__check--text regular">
            Georgian Post
          </span> </label
        ><!-- end -->
      </div>
      <div class="col-md-3">
        <label class="element__check d-flex align-items-center">
          <div>
            <input type="checkbox" class="element__check--input" />
            <span class="element__check--checked">
              <img src="/assets/img/svg/checked.svg" alt="" />
            </span>
          </div>
          <span class="element__check--text regular">
            Own Delivery
          </span> </label
        ><!-- end -->
      </div>
      <div class="col-md-3">
        <label class="element__check d-flex align-items-center">
          <div>
            <input type="checkbox" class="element__check--input" />
            <span class="element__check--checked">
              <img src="/assets/img/svg/checked.svg" alt="" />
            </span>
          </div>
          <span class="element__check--text regular"> Pick up </span> </label
        ><!-- end -->
      </div>
    </div>
    <div
      class="d-flex justify-content-between align-items-center default-values"
    >
      <p class="bold">Pink / 40 mm / 32 gb</p>
      <p class="regular">Default Values</p>
    </div>
    <div class="row item-info-container">
      <div class="col-md-4">
        <label class="cart-order__form--label mt-0">
          <p class="cart-order__form--title regular item-info-title">
            <img src="/assets/img/svg/red-union.svg" alt="" />
            Item Location
          </p>
          <select
            class="select__list selects-inproduct-upload regular item-info"
            name=""
            style="width: 100%; height: 48px"
          >
            <option value="new">Choose Address</option>
            <option value="opt1">Opt1</option>
            <option value="opt2">Opt2</option>
          </select>
        </label>
      </div>
      <div class="col-md-2">
        <label class="contact-page__form--label mt-0">
          <p class="cart-order__form--title item-info-title regular">
            <img src="/assets/img/svg/red-union.svg" alt="" />
            Shipping Weight (kg)
          </p>
          <input
            type="text"
            class="contact-page__form--input item-info"
            style="width: 100%; height: 48px"
          />
        </label>
      </div>
      <div class="col-md-4">
        <label class="contact-page__form--label mt-0">
          <p class="cart-order__form--title item-info-title regular">
            <img src="/assets/img/svg/red-union.svg" alt="" />
            Length (mm) / Width (mm) / Height (mm)
          </p>
          <div class="item-size-details">
            <input type="text" class="item-size-detail-inputs" />
            <span class="item-size-detail-inputs-divider">/</span>
            <input type="text" class="item-size-detail-inputs" />
            <span class="item-size-detail-inputs-divider">/</span>
            <input type="text" class="item-size-detail-inputs" />
          </div>
        </label>
      </div>
      <div class="col-md-2">
        <label class="contact-page__form--label mt-0">
          <p class="cart-order__form--title item-info-title regular">
            <img src="/assets/img/svg/red-union.svg" alt="" />
            Quantity
          </p>
          <input
            type="text"
            class="contact-page__form--input item-info"
            style="width: 100%"
          />
        </label>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label class="contact-page__form--label mt-0">
          <p class="cart-order__form--title item-info-title regular">
            <img src="/assets/img/svg/red-union.svg" alt="" />
            Own Delivery Cost
          </p>
          <input
            type="text"
            class="contact-page__form--input item-info"
            style="width: 100%; height: 48px"
          />
        </label>
      </div>
      <div class="col-md-3">
        <label class="contact-page__form--label mt-0 option-photo-container">
          <p class="cart-order__form--title item-info-title regular">
            Option Photo
          </p>
          <div class="option-photo-actions">
            <input
              type="file"
              name="photo"
              id="upload-option-photo"
              class="d-none"
            />
            <label for="upload-option-photo" class="upload-option-photo">
              <img
                src="/assets/img/svg/upload-icon.svg"
                class="convert-svg"
                alt="upload"
              />
            </label>
            <button class="remove-option-photo-btn">
              <img
                src="/assets/img/svg/trash.svg"
                class="remove-option-photo"
                alt="trash"
              />
            </button>
          </div>
        </label>
      </div>
    </div>
  </div>
</template>