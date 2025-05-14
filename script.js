// Carrusel automático
let currentSlide = 0;
const slides = document.querySelectorAll('.carrusel img');

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
    if (i === index) slide.classList.add('active');
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

setInterval(nextSlide, 3000); 

// Validación de formulario de registro
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('form');

  if (form) {
    form.addEventListener('submit', function (e) {
      const nombre = form.nombre.value.trim();
      const ciudad = form.ciudad?.value.trim();
      const contrasena = form.contrasena.value;
      const confirmar = form.confirmar_contrasena.value;
      const correo = form.correo?.value.trim();
      const telefono = form.telefono?.value.trim();
      const nacimiento = form.nacimiento?.value;

      if (!nombre || nombre.length < 3) {
        alert("El nombre debe tener al menos 3 caracteres.");
        e.preventDefault();
        return;
      }

      if (!ciudad || ciudad.length < 3) {
        alert("La ciudad debe tener al menos 3 caracteres.");
        e.preventDefault();
        return;
      }

      if (contrasena.length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        e.preventDefault();
        return;
      }

      if (contrasena !== confirmar) {
        alert("Las contraseñas no coinciden.");
        e.preventDefault();
        return;
      }

      if (correo && !/^\S+@\S+\.\S+$/.test(correo)) {
        alert("Correo electrónico no válido.");
        e.preventDefault();
        return;
      }

      if (telefono && telefono.length < 7) {
        alert("El teléfono debe tener al menos 7 dígitos.");
        e.preventDefault();
        return;
      }

      if (!nacimiento) {
        alert("Debe ingresar una fecha de nacimiento.");
        e.preventDefault();
        return;
      }

      const fechaNacimiento = new Date(nacimiento);
      const hoy = new Date();
      if (fechaNacimiento >= hoy) {
        alert("La fecha de nacimiento no puede ser en el futuro.");
        e.preventDefault();
        return;
      }
    });
  }
});