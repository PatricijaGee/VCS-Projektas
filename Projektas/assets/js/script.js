const whoWeAreBtn = document.querySelector('#who-we-are-btn');
const whoWeArePara = document.querySelector('#who-we-are');

whoWeAreBtn.addEventListener("click", () => {
    whoWeArePara.classList.toggle("show");
});

const whereWeWorkBtn = document.querySelector('#where-we-work-btn');
const whereWeWorkPara = document.querySelector('#where-we-work');

whereWeWorkBtn.addEventListener("click", () => {
    whereWeWorkPara.classList.toggle("show");
});

const followUsBtn = document.querySelector('#follow-us-btn');
const followUsPara = document.querySelector('#follow-us');

followUsBtn.addEventListener("click", () => {
    followUsPara.classList.toggle("show");
});

const whoBtn = document.getElementById("who-we-are-btn");

whoBtn.addEventListener("mouseover", function() {
    this.style.cursor = "pointer";
});
const whereBtn = document.getElementById("where-we-work-btn");

whereBtn.addEventListener("mouseover", function() {
    this.style.cursor = "pointer";
});
const followBtn = document.getElementById("follow-us-btn");

followBtn.addEventListener("mouseover", function() {
    this.style.cursor = "pointer";
});

$(document).ready(function() {
    $('.collapse.navbar-collapse').on('shown.bs.collapse', function() {
      $('.hero-content').addClass('menu-open');
    });
  
    $('.collapse.navbar-collapse').on('hidden.bs.collapse', function() {
      $('.hero-content').removeClass('menu-open');
    });
  });
  