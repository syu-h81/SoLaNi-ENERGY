'use strict';

$(document).ready(function() {

  $(document).off('click.header', '.l-header__menu');
  $(document).on('click.header', '.l-header__menu', function (e) {
    e.preventDefault();
    e.stopPropagation();
    const $header = $(this).closest('.l-header');
    const open = $header.toggleClass('is-open').hasClass('is-open');
    $(this).attr('aria-expanded', open ? 'true' : 'false');
  });


  // Header background change on scroll
  $(window).on('scroll', function() {
    const scrollTop = $(window).scrollTop();
    const header = $('.l-header');
    const logo = $('.l-header__logo img');
    
    if (scrollTop > 100) {
      header.addClass('scrolled');
      logo.attr('src', 'assets/images/Solanilogo_White.png');
    } else {
      header.removeClass('scrolled');
      logo.attr('src', 'assets/images/header_logo.png');
    }
  });

  // Add animation classes when elements come into view
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -150px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-in');
      }
    });
  }, observerOptions);

  // Observe elements for animation
  $('.reason-card, .feature-card, .section-header').each(function() {
    observer.observe(this);
  });

  // Contact form handling (if needed)
  $('.btn-primary, .btn-contact').on('click', function(e) {
    const href = $(this).attr('href');
    if (href === '#contact') {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $('#contact').offset().top - 80
      }, 800);
    }
  });
});

window.addEventListener('DOMContentLoaded', () => {
  // ページロード後に .smooth にクラス付与
  document.querySelectorAll('.smooth').forEach((el, index) => {
    // 順番に遅延をつけて表示させたい場合
    setTimeout(() => {
      el.classList.add('is-animated');
    }, index * 700); // 0.4秒ずつ遅延
  });
});