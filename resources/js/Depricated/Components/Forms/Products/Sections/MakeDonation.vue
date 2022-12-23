<template>
  <div class="upload__body--tab" style="display: block">
    <div class="col-md-4">
      <label class="contact-page__form--label mt-0">
        <p class="cart-order__form--title regular">Donation %</p>
        <input
          type="text"
          class="contact-page__form--input"
          style="width: 100%"
        />
      </label>
    </div>
    <div class="col-md-4">
      <label class="contact-page__form--label">
        <p class="cart-order__form--title regular">Donate to</p>
        <div class="donate-to-options">
          <div class="d-flex align-items-center">
            <input
              type="radio"
              value="1"
              id="donate-to-charity"
              name="donate-to"
              class="radio-on-img"
            />
            <label for="donate-to-charity" class="regular donate-to-label">Charity</label>
          </div>
          <div class="d-flex align-items-center">
            <input
              type="radio"
              value="1"
              id="donate-to-social-program"
              name="donate-to"
              class="radio-on-img"
            />
            <label
              for="donate-to-social-program"
              class="regular donate-to-label"
              >Social Program</label
            >
          </div>
        </div>
      </label>
    </div>
    <div class="col-md-4">
      <div class="select">
        <p class="cart-order__form--title regular">Beneficiary</p>
        <select name="" id="" class="select__list regular" style="height: 48px">
          <option value="" class="select__list--item">Choose Charity</option>
          <option value="" class="select__list--item">erti</option>
          <option value="" class="select__list--item">ori</option>
        </select>
      </div>
    </div>
    <!-- end -->
  </div>
</template>