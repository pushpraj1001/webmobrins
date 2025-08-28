// Mobile Menu Toggle
const menuToggle = document.getElementById("menu-toggle");
const navLinks = document.getElementById("nav-links");

menuToggle.addEventListener("click", () => {
  navLinks.classList.toggle("show");
});

// Dynamic year in footer
document.getElementById("year").textContent = new Date().getFullYear();

// Contact Form (simple simulation)
const contactForm = document.querySelector(".contact-form");
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();
    alert("Thank you! Your message has been sent.");
    contactForm.reset();
  });
}
