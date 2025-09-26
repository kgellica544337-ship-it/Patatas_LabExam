function showForm(formId) {
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}

// Registration form validation
document.addEventListener("DOMContentLoaded", () => {
    const registerForm = document.querySelector("#register-form form");
    const loginForm = document.querySelector("#login-form form");

    if (registerForm) {
        registerForm.addEventListener("submit", (e) => {
            const email = registerForm.querySelector("input[name='email']");
            const password = registerForm.querySelector("input[name='password']");
            const confirmPassword = registerForm.querySelector("input[name='confirm_password']");

            // Email format check
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value)) {
                alert("Please enter a valid email address.");
                e.preventDefault();
                return;
            }

            // Password match check
            if (password.value !== confirmPassword.value) {
                alert("Passwords do not match.");
                e.preventDefault();
                return;
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener("submit", (e) => {
            const username = loginForm.querySelector("input[name='username']");
            const password = loginForm.querySelector("input[name='password']");

            if (username.value.trim() === "" || password.value.trim() === "") {
                alert("Both fields are required.");
                e.preventDefault();
            }
        });
    }
});

const track = document.querySelector('.carousel-track');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');
    const images = Array.from(document.querySelectorAll('.carousel-track img'));

    const visibleCount = 3; 
    let index = visibleCount; 

    const clonesBefore = images.slice(-visibleCount).map(img => img.cloneNode(true));
    const clonesAfter = images.slice(0, visibleCount).map(img => img.cloneNode(true));

    clonesBefore.forEach(clone => track.prepend(clone));
    clonesAfter.forEach(clone => track.append(clone));

    const allSlides = document.querySelectorAll('.carousel-track img');

    function getSlideWidth() {
      return allSlides[0].getBoundingClientRect().width;
    }

    function updateCarousel(animate = true) {
      const slideWidth = getSlideWidth();
      track.style.transition = animate ? "transform 0.5s ease-in-out" : "none";
      track.style.transform = `translateX(-${index * slideWidth}px)`;
    }

    updateCarousel(false);

    nextBtn.addEventListener('click', () => {
      index++;
      updateCarousel();

      track.addEventListener('transitionend', () => {
        if (index >= images.length + visibleCount) {
          index = visibleCount; 
          updateCarousel(false);
        }
      }, { once: true });
    });

    prevBtn.addEventListener('click', () => {
      index--;
      updateCarousel();

      track.addEventListener('transitionend', () => {
        if (index < visibleCount) {
          index = images.length; 
          updateCarousel(false);
        }
      }, { once: true });
    });