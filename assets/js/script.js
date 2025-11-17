document.addEventListener("DOMContentLoaded", function () {
  const tabContainers = document.querySelectorAll(".tab-container");

  tabContainers.forEach(container => {
    const tabButtons = container.querySelectorAll(".tablinks");
    const tabContents = container.querySelectorAll(".tabcontent");

    function openTab(index) {
      tabContents.forEach(tab => tab.classList.remove("active"));
      tabButtons.forEach(btn => btn.classList.remove("active"));

      tabContents[index].classList.add("active");
      tabButtons[index].classList.add("active");
    }

    tabButtons.forEach((button, index) => {
      button.addEventListener("click", () => openTab(index));
    });

    openTab(0); // Default open first tab in each container
  });
});



// faq start

// accordion code start
const detailsElements = document.querySelectorAll("details");
const summaryElements = document.querySelectorAll("summary");

summaryElements.forEach((summary, index) => {
  summary.addEventListener("click", () => {
    detailsElements.forEach((details, i) => {
      if (i !== index) {
        details.open = false;
      }
    });
  });
});

// faq end

// tour slider start
let swiperInstances = {}; // Store multiple instances

function initSwiper(selector, options) {
  const container = document.querySelector(selector);
  if (!container) return;

  if (window.innerWidth > 600) {
    // Initialize only if not already active
    if (!swiperInstances[selector]) {
      swiperInstances[selector] = new Swiper(selector, {
        slidesPerView: options.slidesPerView || 3,
        spaceBetween: options.spaceBetween || 30,
        pagination: {
          el: `${selector} .swiper-pagination`,
          clickable: true,
        },
        breakpoints: options.breakpoints || {
          1366: { slidesPerView: 3, spaceBetween: 30 },
          1024: { slidesPerView: 2.2, spaceBetween: 30 },
          768: { slidesPerView: 1.7, spaceBetween: 20 },
          0: { slidesPerView: 1, spaceBetween: 10 },
        },
      });
    }
  } else {
    // Destroy below 600px
    if (swiperInstances[selector]) {
      swiperInstances[selector].destroy(true, true);
      delete swiperInstances[selector];
    }
  }
}

function initAllSwipers() {
  // 🟩 Swiper 1: mySwiper
  initSwiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
      1366: { slidesPerView: 3, spaceBetween: 30 },
      1024: { slidesPerView: 3, spaceBetween: 20 },
      768: { slidesPerView: 2, spaceBetween: 15 },
      0: { slidesPerView: 1, spaceBetween: 10 },
    },
  });

  // 🟦 Swiper 2: hop-passes
  initSwiper(".hop-passes", {
    slidesPerView: 2.5,
    spaceBetween: 25,
    breakpoints: {
      1366: { slidesPerView: 4, spaceBetween: 30 },
      1024: { slidesPerView: 2.2, spaceBetween: 20 },
      768: { slidesPerView: 1.5, spaceBetween: 15 },
      0: { slidesPerView: 1, spaceBetween: 10 },
    },
  });

  // 🟨 Add more sliders easily:
  // initSwiper(".other-swiper", { slidesPerView: 4, spaceBetween: 40, breakpoints: { ... } });
}

// Run on load and resize
window.addEventListener("load", initAllSwipers);
window.addEventListener("resize", initAllSwipers);


// tour slider end


//  destination slider start
let destinationSwiper;

function initDestinationSwiper() {
  if (window.innerWidth > 600) {
    if (!destinationSwiper) {
      destinationSwiper = new Swiper(".destination-slider", {
        slidesPerView: 3.5,
        spaceBetween: 30,
        allowTouchMove: false, // disable mouse drag / swipe
        loop: true,            // loop slides for continuous autoplay
        autoplay: {
          delay: 2000,          // time in ms between slides
          disableOnInteraction: false, // continue autoplay after interaction
        },
        navigation: {
          nextEl: ".slide-next",
          prevEl: ".slide-prev",
        },
        on: {
          slideChange: function () {
            fadeLeftSlides(this);
          },
          init: function () {
            fadeLeftSlides(this);
          },
        },
        breakpoints: {
          1367: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          1366: {
            slidesPerView: 3.5,
            spaceBetween: 30,
          },
          1200: {
            slidesPerView: 3.5,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 2.7,
            spaceBetween: 30,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          0: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
        },
      });
    }
  } else {
    // Disable swiper when width <= 600px
    if (destinationSwiper) {
      destinationSwiper.destroy(true, true);
      destinationSwiper = null;
    }
  }
}

// Fade function
function fadeLeftSlides(swiper) {
  swiper.slides.forEach((slide, index) => {
    slide.style.transition = "opacity 0.5s ease-in-out";

    if (index < swiper.activeIndex) {
      slide.style.opacity = "0";
      slide.style.pointerEvents = "none";
      slide.style.visibility = "hidden";
    } else {
      slide.style.opacity = "1";
      slide.style.pointerEvents = "auto";
      slide.style.visibility = "visible";
    }
  });
}

// Run on load + resize
window.addEventListener("load", initDestinationSwiper);
window.addEventListener("resize", initDestinationSwiper);

//  destination slider end

// testimonials slider
var swiper = new Swiper(".testimonials", {
  slidesPerView: 2,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1366: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is < 768px
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  },
});

// login sign up modal

function setupModal(openBtnId, modalId) {
  const modal = document.getElementById(modalId);
  const btn = document.getElementById(openBtnId);
  const closeBtn = modal.querySelector('.close');

  // Open modal
  btn.addEventListener('click', () => {
    modal.style.display = 'block';
  });

  // Close when clicking on X
  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // Close when clicking outside
  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
}

// Call the function for each modal
setupModal('myBtn', 'myModal');      // Login/Signup Modal
// setupModal('langBtn', 'langModal');  // Language Modal


//--------------dropdown
// dropdown start
let headerUl = document.querySelector(".header nav");
function toggleButtons() {
  let e = document.querySelector(".header");
  headerUl.classList.toggle("show-ul");
  let t = document.querySelector(".cancel-button");
  if (headerUl.classList.contains("show-ul")) {
    let o = document.createElement("div");
    e.appendChild(o),
      o.classList.add("doc-overlay"),
      disableScroll(),
      (t.style.display = "block"),
      o.addEventListener("click", function (e) {
        headerUl.classList.remove("show-ul"), o.remove(), enableScroll();
      });
  } else document.querySelector(".doc-overlay").remove(), enableScroll();
}
function disableScroll() {
  document.body.style.overflow = "hidden";
}
function enableScroll() {
  document.body.style.overflow = "auto";
}
const navDropdowns = document.querySelectorAll(".dropdown");
function createMultipleCounters(e) {
  e.forEach((e) => {
    createCounter(e.id, e.maxCount);
  });
}
function createCounter(e, t) {
  let o = 0,
    n = setInterval(() => {
      let l = document.getElementById(e);
      if (!l) return console.error("Counter element with ID '" + e + "' not found."), void clearInterval(n);
      (l.innerHTML = ++o), o === t && clearInterval(n);
    }, 10);
}
navDropdowns.forEach((e) => {
  e.addEventListener("click", function (e) {
    this.classList.toggle("showMenu");
  });
  e.querySelectorAll(".dropdown ul").forEach((e) => {
    e.addEventListener("click", function (e) {
      e.stopPropagation();
    });
  });
}),
  document.addEventListener("click", (e) => {
    navDropdowns.forEach((t) => {
      t.contains(e.target) || t.classList.remove("showMenu");
    });
  })
// dropdown end

// ======== SEARCH SUGGESTION FUNCTIONALITY =======

// Base + JSON URL
const baseURL = window.location.origin + "/";
const jsonURL = "http://localhost/data.json";

let categories = [];
let tours = [];

// Debounce Function
function debounce(func, delay) {
    let timer;
    return function(...args) {
        clearTimeout(timer);
        timer = setTimeout(() => func.apply(this, args), delay);
    };
}

// Fetch JSON
fetch(jsonURL)
    .then(res => res.json())
    .then(data => {
        categories = data.categories;
        tours = data.tours;
    })
    .catch(err => console.error("JSON Fetch Error:", err));

// Remove Suggestions
function removeSuggestions(input) {
    const parentBox = input.closest('.header-search') || input.closest('.search-box') || input.parentElement;
    parentBox.querySelector(".suggestions")?.remove();
}

// Create Suggestions
function createSuggestionList(input) {
    const parentBox = input.closest('.header-search') || input.closest('.search-box') || input.parentElement;
    removeSuggestions(input);

    const query = input.value.toLowerCase();
    if (!query) return;

    const categoryResults = categories.filter(c => c.name.toLowerCase().includes(query));
    const tourResults = tours.filter(t => t.title.toLowerCase().includes(query));

    if (!categoryResults.length && !tourResults.length) return;

    const suggBox = document.createElement("ul");
    suggBox.classList.add("suggestions");

    categoryResults.forEach(cat => {
        suggBox.innerHTML += `
        <li class="suggestion-item">
            <a href="${baseURL}${cat.url}">
                <div class="suggestion-icon">
                    <img src="assets/img/location-icon.png" alt="">
                </div>
                <div class="suggestion-content">
                    <div class="suggestion-title">${cat.name}</div>
                </div>
            </a>
        </li>`;
    });

    tourResults.forEach(tour => {
        suggBox.innerHTML += `
        <li class="suggestion-item">
            <a href="${baseURL}${tour.url}">
                <div class="suggestion-icon">
                    <img src="${tour.image}" class="suggestion-img">
                </div>
                <div class="suggestion-content">
                    <div class="suggestion-title">${tour.title}</div>
                    <div class="suggestion-subtitle">${tour.details || ""}</div>
                </div>
            </a>
        </li>`;
    });

    parentBox.appendChild(suggBox);
}

// Apply Search
document.querySelectorAll('.global-search-input').forEach(input => {
    input.addEventListener("input", debounce(() => createSuggestionList(input), 400));

    input.addEventListener("keyup", () => {
        if (!input.value.trim()) removeSuggestions(input);
    });

    input.addEventListener("focus", () => {
        if (input.value.trim()) createSuggestionList(input);
    });

    input.addEventListener("blur", () => {
        setTimeout(() => removeSuggestions(input), 150);
    });
});

// Outside Click Hide
document.addEventListener("click", (e) => {
    if (!e.target.closest('.global-search-input') && !e.target.closest('.suggestions')) {
        document.querySelectorAll(".suggestions").forEach(s => s.remove());
    }
});
// search suggestion end



//  package card start
const packageCards = document.querySelectorAll('.package-card');

packageCards.forEach(card => {
  const mainImage = card.querySelector('.big-img img');
  const thumbItems = card.querySelectorAll('.thumb-list li');

  // ✅ Make first thumbnail active by default
  if (thumbItems.length > 0 && mainImage) {
    thumbItems[0].classList.add('active');
    const firstImg = thumbItems[0].querySelector('img');
    mainImage.src = firstImg.src;
  }

  // ✅ Handle click on each thumbnail
  thumbItems.forEach(item => {
    item.addEventListener('click', () => {
      // Remove active from all thumbs in this card only
      thumbItems.forEach(li => li.classList.remove('active'));
      item.classList.add('active');

      // Change main image in this card
      const img = item.querySelector('img');
      mainImage.src = img.src;
    });
  });
});

// package card end 

// wishlist start
document.querySelectorAll(".wishlist").forEach(btn => {
  btn.addEventListener("click", () => {
    btn.classList.toggle("active");
  });
});
// wishlist end


// video testimonials
document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".video-testimonials", {
    slidesPerView: 4,
    spaceBetween: 30,
    grabCursor: true,
     coverflowEffect: {
                rotate: 0,
                stretch: -40,
                depth: 200,
                modifier: 1.5,
                slideShadows: false,
            },
            loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
      breakpoints: {
    1366: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
  },
  });

  // video testimonials end

  // video popup start
  const videoCards = document.querySelectorAll(".video-card");
  const popup = document.getElementById("videoPopup");
  const popupVideo = document.getElementById("popupVideo");
  const closePopup = document.querySelector(".close-popup");

  // Loop through all video cards
  videoCards.forEach(card => {
    card.addEventListener("click", () => {
      const videoSrc = card.querySelector("video").getAttribute("src");
      popupVideo.setAttribute("src", videoSrc);
      popup.classList.add("active");
      popupVideo.play();
    });
  });

  // Close popup
  closePopup.addEventListener("click", () => {
    popupVideo.pause();
    popup.classList.remove("active");
    popupVideo.removeAttribute("src");
  });

  // Close when clicking outside
  popup.addEventListener("click", (e) => {
    if (e.target === popup) {
      popupVideo.pause();
      popup.classList.remove("active");
      popupVideo.removeAttribute("src");
    }
  });

});
// video popup end


//  language and currency start
// function setupSearchableDropdown(wrapperId, inputId, arrowId, listBoxId) {
//   const wrapper = document.getElementById(wrapperId);
//   const input = document.getElementById(inputId);
//   const arrow = document.getElementById(arrowId);
//   const listBox = document.getElementById(listBoxId);
//   const options = listBox.querySelectorAll('.list-option');

//   wrapper.addEventListener('click', (e) => {
//     e.stopPropagation();
//     closeAllLists();
//     listBox.style.display = 'block';
//     arrow.classList.add('active');
//     input.focus();
//   });

//   input.addEventListener('input', () => {
//     const filter = input.value.toLowerCase();
//     let hasMatch = false;
//     options.forEach(opt => {
//       const match = opt.textContent.toLowerCase().includes(filter);
//       opt.style.display = match ? '' : 'none';
//       if (match) hasMatch = true;
//     });
//     listBox.style.display = hasMatch ? 'block' : 'none';
//     arrow.classList.add('active');
//   });

//   options.forEach(opt => {
//     opt.addEventListener('click', () => {
//       options.forEach(o => o.classList.remove('selected'));
//       opt.classList.add('selected');
//       input.value = opt.textContent;
//       listBox.style.display = 'none';
//       arrow.classList.remove('active');
//     });
//   });
// }

// function closeAllLists() {
//   document.querySelectorAll('.list-box').forEach(list => list.style.display = 'none');
//   document.querySelectorAll('.switch-arrow').forEach(a => a.classList.remove('active'));
// }

// window.addEventListener('click', closeAllLists);

// // Initialize dropdowns
// setupSearchableDropdown('currencyWrapper', 'searchCurrency', 'currencyArrow', 'currencyList');
// setupSearchableDropdown('languageWrapper', 'searchLanguage', 'languageArrow', 'languageList');

{/* language and currency end  */ }



// top to bottom
let calcScrollValue = () => {
  let e = document.getElementById("progress"),
    t = (document.getElementById("progress-value"), document.documentElement.scrollTop),
    o = document.documentElement.scrollHeight - document.documentElement.clientHeight,
    n = Math.round((100 * t) / o);
  (e.style.display = t > 100 ? "grid" : "none"),
    e.addEventListener("click", () => {
      document.documentElement.scrollTop = 0;
    }),
    (e.style.background = `conic-gradient(#d60f0f ${n}%, #ebf3ff ${n}%)`);
};
(window.onscroll = calcScrollValue), (window.onload = calcScrollValue);
// top to bottom


// search show start
document.addEventListener("DOMContentLoaded", () => {
  const searchBtn = document.querySelector(".search-button");
  const cancelBtn = document.querySelector(".search-cancel-button");
  const searchInput = document.querySelector(".header-search");

  if (searchBtn && cancelBtn && searchInput) {
    const showSearch = () => {
      // Add search-show class
      searchInput.classList.add("search-show");

      // Create overlay and insert after .search-input
      const overlay = document.createElement("div");
      overlay.classList.add("overlay");
      searchInput.insertAdjacentElement("afterend", overlay);

      // Close when clicking overlay
      overlay.addEventListener("click", hideSearch);
    };

    const hideSearch = () => {
      searchInput.classList.remove("search-show");

      // Remove overlay if exists
      const overlay = document.querySelector(".overlay");
      if (overlay) overlay.remove();
    };

    searchBtn.addEventListener("click", showSearch);
    cancelBtn.addEventListener("click", hideSearch);
  }
});
// search show end



// 8 card to show or others hide country page card start
document.querySelectorAll(".packageList").forEach((list) => {

    const cards = list.querySelectorAll(".package-card");
    const btn = list.nextElementSibling?.classList.contains("toggleCards")
        ? list.nextElementSibling
        : null;

    if (!btn || cards.length <= 8) return;

    let visibleCards = 8;
    const loadMoreCount = 4;

    function showCards() {
        cards.forEach((card, index) => {
            card.style.display = index < visibleCards ? "grid" : "none";
        });

        btn.querySelector("span").textContent =
            visibleCards >= cards.length ? "Show Less" : "Show More";
    }

    btn.addEventListener("click", () => {
        visibleCards = visibleCards >= cards.length ? 8 : visibleCards + loadMoreCount;
        showCards();
    });

    showCards();
});
// 8 card to show or others hide country page card end


// cart start
document.addEventListener("DOMContentLoaded", () => {
  const cartContainer = document.querySelector(".cart-container");
  const cartIcon = cartContainer?.querySelector(".cart");
  const cartPanel = cartContainer?.querySelector(".cart-content");
  const closeCart = cartContainer?.querySelector(".close-cart");

  const cartPageURL = "/cart.html"; // 🔗 change this to your real cart page URL

  // 🟢 Function to handle behavior based on screen size
  function handleCartClick(e) {
    if (window.innerWidth <= 768) {
      // 📱 Mobile View → go to cart page
      e.preventDefault();
      window.location.href = cartPageURL;
    } else {
      // 💻 Desktop View → toggle dropdown
      e.stopPropagation();
      cartPanel?.classList.toggle("active");
    }
  }

  // 🟢 Toggle cart when clicking the cart icon
  if (cartIcon && cartPanel) {
    cartIcon.addEventListener("click", handleCartClick);
  }

  // 🔴 Close cart when clicking the close button
  if (closeCart && cartPanel) {
    closeCart.addEventListener("click", () => {
      cartPanel.classList.remove("active");
    });
  }

  // ⚪ Close cart when clicking outside cart area
  document.addEventListener("click", (e) => {
    if (
      window.innerWidth > 768 && // only on desktop
      cartPanel &&
      !e.target.closest(".cart-content") &&
      !e.target.closest(".cart")
    ) {
      cartPanel.classList.remove("active");
    }
  });

  // 🧩 Optional: Automatically hide dropdown on resize to mobile
  window.addEventListener("resize", () => {
    if (window.innerWidth <= 768 && cartPanel) {
      cartPanel.classList.remove("active");
    }
  });
});

// cart end


// page cities hide and show start
document.addEventListener("DOMContentLoaded", function () {

    const items = document.querySelectorAll(".keyword-row .outline-btn:not(.toggle-more)");
    const toggleBtn = document.querySelector(".keyword-row .toggle-more");
    let expanded = false;

    function applyState() {
        const isMobile = window.innerWidth <= 1024;

        if (isMobile) {
            // MOBILE VIEW
            if (expanded) {
                items.forEach(item => item.classList.add("show"));
                toggleBtn.querySelector("span").innerText = "Hide Cities";
            } else {
                items.forEach(item => item.classList.remove("show"));
                toggleBtn.querySelector("span").innerText = "See All Countries";
            }
        } else {
            // DESKTOP VIEW
            if (expanded) {
                items.forEach(item => item.classList.add("show"));
                toggleBtn.querySelector("span").innerText = "Hide Cities";
            } else {
                items.forEach((item, index) => {
                    if (index < 4) item.classList.add("show");
                    else item.classList.remove("show");
                });
                toggleBtn.querySelector("span").innerText = "See All Cities";
            }
        }
    }

    // First load
    applyState();

    // On resize also apply rules
    window.addEventListener("resize", applyState);

    // Toggle click
    toggleBtn.addEventListener("click", () => {
        expanded = !expanded;
        applyState();
    });

});


// page cities hide and show end
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.querySelector(".sort-filter-btn");
    const menu = document.getElementById("filterMenu");

    // Exit early if elements don't exist
    if (!toggleBtn || !menu) {
        console.warn("Toggle button or filter menu not found in the DOM.");
        return;
    }

    // Toggle open/close on button click
    toggleBtn.addEventListener("click", (e) => {
        e.stopPropagation(); // stops bubbling
        menu.classList.toggle("show");
    });

    // Prevent closing when clicking inside dropdown
    menu.addEventListener("click", (e) => {
        e.stopPropagation();
    });

    // Click outside → close menu
    document.addEventListener("click", () => {
        menu.classList.remove("show");
    });
});


// tour page gallery start
function changeImage(imgElement) {
    // Change main image
    document.getElementById("mainImage").src = imgElement.src;

    // Remove active class from all thumbnails
    document.querySelectorAll(".thumb").forEach(img => img.classList.remove("active"));

    // Add active class to clicked image
    imgElement.classList.add("active");
}
// tour page gallery end


// copy link start
 // Copy link functionality
const social_popup = document.querySelector(".social-popup"); // FIXED

const copyLink = social_popup?.querySelector('a[title="Copy Link"]');

if (copyLink) {
    copyLink.addEventListener("click", function (e) {
        e.preventDefault();

        const pageLink = window.location.href;

        navigator.clipboard.writeText(pageLink)
            .then(() => {
                alert("Link copied!");
            })
            .catch(() => {
                alert("Failed to copy link");
            });
    });
}

// copy link end


// light box gallery start 
document.addEventListener("DOMContentLoaded", () => {
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const closeBtn = document.querySelector(".close-icon");
  const prevBtn = document.querySelector(".prev");
  const nextBtn = document.querySelector(".next");

  let currentGallery = [];
  let currentIndex = 0;

  document.querySelectorAll(".gallery").forEach(gallery => {
    const imgs = gallery.querySelectorAll(".light-box-main img, .light-box-gallery img, .light-box-more-photos img");
    const galleryImages = Array.from(imgs).map(img => img.src);

    imgs.forEach((img, index) => {
      img.addEventListener("click", () => {
        currentGallery = galleryImages;
        currentIndex = index;
        openLightbox();
      });
    });
  });

  closeBtn.addEventListener("click", () => {
    console.log("Close clicked!");
    closeLightbox();
  });
  prevBtn.addEventListener("click", () => changeSlide(-1));
  nextBtn.addEventListener("click", () => changeSlide(1));

  document.addEventListener("keydown", (e) => {
    if (!lightbox.classList.contains("active")) return;
    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") changeSlide(-1);
    if (e.key === "ArrowRight") changeSlide(1);
  });

  function openLightbox() {
    lightbox.classList.add("active");
    lightboxImg.src = currentGallery[currentIndex];
  }

  function closeLightbox() {
    lightbox.classList.remove("active");
  }

  function changeSlide(direction) {
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = currentGallery.length - 1;
    if (currentIndex >= currentGallery.length) currentIndex = 0;
    lightboxImg.src = currentGallery[currentIndex];
  }
});
// light box gallery end


// minus plus start tour page 
document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".incrmt");

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const parent = button.closest(".dropdown-input");
      const numberDiv = parent.querySelector(".number");
      const hiddenInput = parent.querySelector(".numberInput");

      let currentValue = parseInt(numberDiv.textContent);
      const min = parseInt(button.dataset.min);
      const max = parseInt(button.dataset.max);

      if (button.classList.contains("plus")) {
        if (currentValue < max) currentValue++;
      } else if (button.classList.contains("minus")) {
        if (currentValue > min) currentValue--;
      }

      numberDiv.textContent = currentValue;
      hiddenInput.value = currentValue;
    });
  });
});
// minus plus end tour page 

// show or hide start in your page booking form 
document.addEventListener("DOMContentLoaded", function () {
  // For all dropdowns
  const dropdowns = document.querySelectorAll(".booking-dropdown");

  dropdowns.forEach(dropdown => {
    const menu = dropdown.nextElementSibling?.classList.contains("book-dropdown-menu")
      ? dropdown.nextElementSibling
      : dropdown.querySelector(".book-dropdown-menu");

    // Toggle dropdown on click
    dropdown.addEventListener("click", function (e) {
      e.stopPropagation(); // prevent bubbling
      document.querySelectorAll(".book-dropdown-menu.active").forEach(m => {
        if (m !== menu) m.classList.remove("active");
      });
      menu.classList.toggle("active");
    });

    // Handle menu item selection
    if (menu) {
      const items = menu.querySelectorAll(".dropdown-item");
      items.forEach(item => {
        item.addEventListener("click", function (e) {
          e.stopPropagation();
          const selectedText = this.textContent.trim();
          const span = dropdown.querySelector("span");
          if (span) span.innerHTML = `${selectedText} <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m4 6 4 4 4-4" stroke="#2b2b2b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>`;
          menu.classList.remove("active");
        });
      });
    }
  });

  // Close dropdown if clicked outside
  document.addEventListener("click", function (e) {
    document.querySelectorAll(".book-dropdown-menu.active").forEach(m => {
      m.classList.remove("active");
    });
  });
});
// show or hide end in your page booking form 

// celender start
    $(function () {
      // Unavailable dates (example)
      const unavailableDates = [
        "16-11-2025", "17-11-2025", "18-11-2025", "19-11-2025",
        "20-11-2025", "21-11-2025", "22-11-2025", "23-11-2025",
        "24-11-2025", "25-11-2025", "26-11-2025", "28-11-2025",
        "29-11-2025", "30-11-2025"
      ];

      function disableDates(date) {
        const d = ("0" + date.getDate()).slice(-2);
        const m = ("0" + (date.getMonth() + 1)).slice(-2);
        const y = date.getFullYear();
        const formatted = `${d}-${m}-${y}`;
        if (unavailableDates.includes(formatted)) {
          return [false, "unavailable-day", "Unavailable"];
        }
        return [true, ""];
      }

      $("#travelDate").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: new Date(), // ✅ disables all previous dates (before today)
        beforeShowDay: disableDates,
        onSelect: function (dateText) {
          console.log("Selected travel date:", dateText);
        }
      });
    });
// celender end
