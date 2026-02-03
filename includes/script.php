
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

  const items = document.querySelectorAll('.nav-item');
  const highlight = document.querySelector('.highlight');
  const nav = document.querySelector('.nav');

  if (!items.length || !highlight || !nav) return;

  function moveHighlight(el) {
    const rect = el.getBoundingClientRect();
    const navRect = nav.getBoundingClientRect();

    highlight.style.left = (rect.left - navRect.left) + 'px';
    highlight.style.width = (rect.width - 10) + 'px'; // 👈 subtract 5px
  }

  items.forEach(item => {
    item.addEventListener('mouseenter', () => {
      moveHighlight(item);
    });

    item.addEventListener('click', () => {
      items.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
      moveHighlight(item);
    });
  });

  // default active
  moveHighlight(items[0]);

});
</script>



<script>
$(document).ready(function () {
    $('.choose-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 } // ✅ FIX
        }
    });
});

</script>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
let p = 0;
const el = document.getElementById("percent");

const timer = setInterval(() => {
  p++;
  el.textContent = p + "%";
  if (p === 100) {
    clearInterval(timer);
    confetti({ particleCount: 200, spread: 90 });
  }
}, 20);
</script>



<script>
document.addEventListener("DOMContentLoaded", function () {
  const reveals = document.querySelectorAll(".reveal");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
        } else {
          // entry.target.classList.remove("active"); // remove if you want re-animation
        }
      });
    },
    {
      threshold: 0.2, // 20% visible triggers animation
    }
  );

  reveals.forEach((reveal) => observer.observe(reveal));
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const reveals = document.querySelectorAll(".reveal");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
        } else {
          // entry.target.classList.remove("active"); // remove if you want re-animation
        }
      });
    },
    {
      threshold: 0.2, // 20% visible triggers animation
    }
  );

  reveals.forEach((reveal) => observer.observe(reveal));
});
</script>

<script>
  const container = document.querySelector(".whyChooseusContainer");
  const reveals = document.querySelectorAll(".reveal-left, .reveal-right");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
          container.classList.add("active");
        } 
      });
    },
    { threshold: 0.4 }
  );

  reveals.forEach(el => observer.observe(el));
</script>
<script>
$(document).ready(function () {
  $(".hero-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: false,
    dots: false,
    nav: false,
    animateOut: "fadeOut",

    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 1
      },
      992: {
        items: 1
      },
      1200: {
        items: 1
      },
           1600: {
        items: 1
      },
               1800: {
        items: 1
      }
    }
  });
});
</script>

<script>
$(document).ready(function () {
  $(".foodie-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: false,
    dots: false,
    nav: false,
    animateOut: "fadeOut",

    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 1
      },
      992: {
        items: 1
      },
      1200: {
        items: 1
      },
           1600: {
        items: 1
      },
               1800: {
        items: 1
      }
    }
  });
});
</script>
