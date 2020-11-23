function getTimeRemaining(startTime) {
    var t = Date.parse(new Date()) - Date.parse(startTime);
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor((t / (1000 * 60 * 60 * 24)) % 30.5);
    var months = Math.floor(t / (1000 * 60 * 60 * 24 * 30.5));
    var years = Math.floor(t / (1000 * 60 * 60 * 24 * 365));
    return {
        'total': t,
        'years': years,
        'months': months,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, startTime) {
    var clock = document.getElementById(id);
    var yearsSpan = clock.querySelector('.years');
    var monthsSpan = clock.querySelector('.months');
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(startTime);

        yearsSpan.innerHTML = ('0' + t.years).slice(-2);
        monthsSpan.innerHTML = ('0' + t.months).slice(-2);
        daysSpan.innerHTML = ('0' + t.days).slice(-2);
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

initializeClock('evolution__developer', '10/11/2020 12:00');

initializeClock('evolution__new_live', '09/24/2020 20:00');

$(function () {
    $('.mfp-img').magnificPopup({
        type: 'image'
    });
});

document.getElementById("year").innerHTML = new Date().getFullYear();

$(document).ready(function () {
    $('.header__burger').click(function () {
        $('.header__burger').toggleClass('open-menu');
        $('.header__menu').toggleClass('open-menu');
    });
    $('.header__link').click(function () {
        $('.header__burger').removeClass('open-menu');
        $('.header__menu').removeClass('open-menu');
    });
    $(document).click(function (e) {
        if ($(e.target).closest('.header__burger').length) {
            return;
        }
        $('.header__burger').removeClass('open-menu');
        $('.header__menu').removeClass('open-menu');
    });
});