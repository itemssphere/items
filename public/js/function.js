// desktop
let searchInput = document.querySelector('.header__search--input');
searchInput && searchInput.addEventListener("keyup", function(e){
    if(e.target.value === ''){
        document.querySelector('.header__search__bar').style.display = "none"
    }else{
        document.querySelector('.header__search__bar').style.display = "block"
    }
});

// mobile
let mobileSearchInput = document.querySelector('.m-header__search--input');
mobileSearchInput && mobileSearchInput.addEventListener("keyup", function(e){
    if(e.target.value === ''){
        document.querySelector('.header__search__bar').style.display = "none"
    }
});

// mobile
let mobileSearchBTN = document.querySelector('.header__mobile__btns--search');
mobileSearchBTN && mobileSearchBTN.addEventListener("click", function(e){
    document.querySelector('.header__search__bar').style.display = "block"
});

// mobile
let mobileSearchCancel = document.querySelector('.m-search-cancel');
mobileSearchCancel && mobileSearchCancel.addEventListener("click", function(e){
    document.querySelector('.header__search__bar').style.display = "none"
});

let registerStepFunc = $('.register__btns--btn');
registerStepFunc && registerStepFunc.on( 'click', function() {
    var thisElement = this;
    $('.register__btns--btn').removeClass('active');
    $(thisElement).addClass('active');
    
    $('.register__step').each(function (id, element) {
        if ($(this).data('step') == $(thisElement).data('step')) {
            if(!$(this).hasClass('active') ){
                $('.register__step').removeClass('active')
                $(this).addClass('active');
            }
        }
    });
})

const convertImages = (query, callback) => {
    const images = document.querySelectorAll(query);
  
    images.forEach(image => {
      fetch(image.src)
      .then(res => res.text())
      .then(data => {
        const parser = new DOMParser();
        const svg = parser.parseFromString(data, 'image/svg+xml').querySelector('svg');
  
        if (image.id) svg.id = image.id;
        if (image.className) svg.classList = image.classList;
  
        image.parentNode.replaceChild(svg, image);
      })
      .then(callback)
      .catch(error => console.error(error))
    });
}
convertImages('.convert-svg');
$(function(){
    $("a").each(function(){
        $(this).attr("rel","external");
    });
});

window.addEventListener('DOMContentLoaded', (event) => {
    var let = document.querySelector('.header').clientHeight;
    document.querySelector('.head-menu--fix').style.top = `${let}px`;
});

$(function() {
    $(".quantity__btn").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
      
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
      
        $button.parent().find("input").val(newVal);
      
      });
});

$('.shop-detail__tabs--menu').on( 'click', function(e) {
    var thisData = this;
    $('.shop-detail__tabs--content').each(function () {
        if ($(this).data('tab') == $(thisData).data('tab')) {
            $('.shop-detail__tabs--menu').removeClass('active');
            $(thisData).addClass('active');
            $('.shop-detail__tabs--content').removeClass('active');
            $(this).addClass('active');
        }
    });
})


function fileUploadImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var x= $(input).closest('.upload__image').find('.upload__image--uploaded');
            x.attr('src', e.target.result);
            x.show();
        };

        reader.readAsDataURL(input.files[0]);
    }
}


$('.open-filter').on( 'click', function() {
    $('.js-filter').removeClass('d-none');
    $('.js-filter').addClass('d-block');
    $('.js-filter').addClass('active-filter');
    $('.touch').addClass('touch-active');
    $('body').css('overflow-y','hidden');
    $('.fix-bar__lists').removeClass('d-flex')
    $('.fix-bar__lists').hide();
    $('.filter-btns').addClass('d-flex')
    $('.filter-btns').removeClass('d-none')
})

$('.delete-filter').on( 'click', function() {
    $('.js-filter').addClass('d-none');
    $('.js-filter').removeClass('d-block');
    $('.js-filter').removeClass('active-filter');
    $('.touch').removeClass('touch-active');
    $('body').css('overflow-y','auto');
    $('body').css('overflow-x','hidden');

    $('.fix-bar__lists').addClass('d-flex')
    $('.fix-bar__lists').removeClass('d-none')

    $('.filter-btns').hide();
    $('.filter-btns').removeClass('d-flex')
})


/** Mobile Categories */

$('.categories-btn').on( 'click', function() {
    $('.mobile-categories').addClass('active');
    $('body').css('overflow-y','hidden');
})

$('.mobile-categories__first--item').on( 'click', function(e) {
    var firstElem = this;
    $('.mobile-categories__second').each(function () {
        if ($(this).data('id') === $(firstElem).data('id')) {
            $('.mobile-categories__first').hide();
            $(this).show();
        }else {
            $(this).hide();
        }
    });
})

$('.mobile-categories__second--item').on( 'click', function(e) {
    var firstElem = this;
    $('.mobile-categories__three').each(function () {
        if ($(this).data('id') === $(firstElem).data('id')) {
            $('.mobile-categories__second').hide();
            $(this).show();
        }else {
            $(this).hide();
        }
    });
})

$('.mobile-categories__head--close').on( 'click', function() {
    $('.mobile-categories').removeClass('active');
    $('body').css('overflow-y','auto');
})

/** End Of Mobile Categories */