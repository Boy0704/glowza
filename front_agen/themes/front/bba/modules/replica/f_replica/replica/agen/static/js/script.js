var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
});

!(function () {
  for (
    var l = document.querySelectorAll(".my-accordion .menu"), e = 0;
    e < l.length;
    e++
  )
    l[e].addEventListener("click", n);
  function n() {
    for (
      var e = document.querySelectorAll(".my-accordion .panel"), n = 0;
      n < e.length;
      n++
    )
      e[n].className = "panel close";
    if (-1 == this.className.indexOf("active")) {
      for (n = 0; n < l.length; n++) l[n].className = "menu";
      (this.className = "menu active"),
        (this.nextElementSibling.className = "panel open");
    } else for (n = 0; n < l.length; n++) l[n].className = "menu";
  }
})();
 
function toggleModal(modalID) {
  document.getElementById(modalID).classList.toggle("hidden");
  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
  document.getElementById(modalID).classList.toggle("flex");
  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
}
function showMobil() {
  document.getElementById("formMobil").classList.toggle("hidden");
  document.getElementById("formMotor").classList.add("hidden");
  document.getElementById("formRumah").classList.add("hidden");
  document.getElementById("formUmroh").classList.add("hidden");
  document.getElementById("formTour").classList.add("hidden");
  document.getElementById("formCashback").classList.add("hidden");
}
function showMotor() {
  document.getElementById("formMotor").classList.toggle("hidden");
  document.getElementById("formMobil").classList.add("hidden");
  document.getElementById("formRumah").classList.add("hidden");
  document.getElementById("formUmroh").classList.add("hidden");
  document.getElementById("formTour").classList.add("hidden");
  document.getElementById("formCashback").classList.add("hidden");
}
function showRumah() {
  document.getElementById("formRumah").classList.toggle("hidden");
  document.getElementById("formMobil").classList.add("hidden");
  document.getElementById("formMotor").classList.add("hidden");
  document.getElementById("formUmroh").classList.add("hidden");
  document.getElementById("formTour").classList.add("hidden");
  document.getElementById("formCashback").classList.add("hidden");
}
function showUmroh() {
  document.getElementById("formUmroh").classList.toggle("hidden");
  document.getElementById("formMobil").classList.add("hidden");
  document.getElementById("formMotor").classList.add("hidden");
  document.getElementById("formRumah").classList.add("hidden");
  document.getElementById("formTour").classList.add("hidden");
  document.getElementById("formCashback").classList.add("hidden");
}
function showTour() {
  document.getElementById("formTour").classList.toggle("hidden");
  document.getElementById("formMobil").classList.add("hidden");
  document.getElementById("formMotor").classList.add("hidden");
  document.getElementById("formRumah").classList.add("hidden");
  document.getElementById("formUmroh").classList.add("hidden");
  document.getElementById("formCashback").classList.add("hidden");
}
function showCashback() {
  document.getElementById("formCashback").classList.toggle("hidden");
  document.getElementById("formMobil").classList.add("hidden");
  document.getElementById("formMotor").classList.add("hidden");
  document.getElementById("formRumah").classList.add("hidden");
  document.getElementById("formUmroh").classList.add("hidden");
  document.getElementById("formTour").classList.add("hidden");
}
function closeModal(modalID){
  document.getElementById(modalID).classList.toggle("hidden");
  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
  document.getElementById(modalID).classList.toggle("flex");
  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  document.getElementById("formCashback").classList.add("hidden");
  document.getElementById("formMobil").classList.add("hidden");
  document.getElementById("formMotor").classList.add("hidden");
  document.getElementById("formRumah").classList.add("hidden");
  document.getElementById("formUmroh").classList.add("hidden");
  document.getElementById("formTour").classList.add("hidden");
}
lozad(".lozad", {
  load: function (el) {
    el.src = el.dataset.src;
    el.onload = function () {
      el.classList.add("fade");
    };
  },
}).observe();