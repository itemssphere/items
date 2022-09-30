<template>
  <div class="shop-detail__tabs--content active">
    <p class="shop-detail__tabs--question-title bold">You can add question</p>
    <form class="shop-detail__tabs--question-form">
      <input
        type="text"
        name="review"
        class="shop-detail__tabs--review-input"
      />
      <button type="submit" class="shop-detail__tabs-add-question-button bold">
        Add question
      </button>
    </form>
    <div class="shop-detail__tabs--qustion-content">
      <div class="shop-detail__tabs--qustion">
        <div class="shop-detail__tabs--qustion-head">
          <p class="shop-detail__tabs--qustion-date">July 31, 2017</p>
          <div class="shop-detail__tabs--qustion-block d-flex">
            <div class="shop-detail__tabs--qustion-info d-flex">
              <p class="shop-detail__tabs--qustion-person bold">
                Guga Mechiauri:
              </p>
              <p class="shop-detail__tabs--qustion-text regular">
                How can I place an order in your store?
              </p>
            </div>
            <div class="shop-detail__tabs--qustion-actions">
              <a
                href=""
                class="regular shop-detail__tabs--qustion-report link-blue"
                >Report</a
              >
              <a
                href=""
                class="regular shop-detail__tabs--qustion-add link-blue"
                >Add answer
                <img
                  src="/assets/img/svg/header-btn/arrow.svg"
                  alt=""
                  class="header__account--icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="shop-detail__tabs--answer d-flex">
        <p class="shop-detail__tabs--answer-person bold">Admin:</p>
        <div class="shop-detail__tabs--answer-content">
          <p class="shop-detail__tabs--answer-text regular">
            The NES Classic Edition system is a miniaturized version of the
            groundbreaking NES, originally released in 1985. Just plug the NES
            Classic Edition into your TV, pick up that gray controller, and
            rediscover the joy of NES games.
          </p>
          <div class="shop-detail__tabs--answer-actions">
            <a href="" class="regular link-blue">Edit</a>
            <a href="" class="regular link-blue">Delete</a>
          </div>
        </div>
      </div>
    </div>
    <div class="shop-detail__tabs--qustion-content">
      <div class="shop-detail__tabs--qustion">
        <div class="shop-detail__tabs--qustion-head">
          <p class="shop-detail__tabs--qustion-date">July 31, 2017</p>
          <div class="shop-detail__tabs--qustion-block d-flex">
            <div class="shop-detail__tabs--qustion-info d-flex">
              <p class="shop-detail__tabs--qustion-person bold">
                Guga Mechiauri:
              </p>
              <p class="shop-detail__tabs--qustion-text regular">
                How can I place an order in your store?
              </p>
            </div>
            <div class="shop-detail__tabs--qustion-actions">
              <a
                href=""
                class="regular shop-detail__tabs--qustion-report link-blue"
                >Report</a
              >
              <a
                href=""
                class="regular shop-detail__tabs--qustion-add link-blue"
                >cancel
                <img
                  src="/assets/img/svg/header-btn/arrow.svg"
                  alt=""
                  class="header__account--icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <form class="shop-detail__tabs--add-answer-form">
        <input
          type="text"
          name="review"
          class="shop-detail__tabs--review-input"
          placeholder="Add answer"
        />
        <button
          type="submit"
          class="shop-detail__tabs-add-add-answer-button bold"
        >
          <img
            src="/assets/img/svg/header-btn/arrow.svg"
            alt=""
            class="header__account--icon"
          />
        </button>
      </form>
    </div>
  </div>
</template>