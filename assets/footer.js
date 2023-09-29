document.addEventListener("DOMContentLoaded", () => {
    const footer = document.createElement("footer");
    footer.innerHTML= `
    <h6 onclick = "window.location.href = './index.html';">yellowCat</h6>
        <a href="#">Garantía</a>
        <a href="#">Registro</a>
        <a href="#">Financiamiento</a>
        <a href="#">Programa de afiliados</a>
        <div>
            <button><a href="#"><i class="bi bi-facebook"></i></a></button>
            <button><a href="#"><i class="bi bi-instagram"></i></a></button>
            <button><a href="#"><i class="bi bi-twitter"></i></a></button>
            <button><a href="#"><i class="bi bi-whatsapp"></i></a></button>
        </div>
    `
    document.body.appendChild(footer, document.body.firstChild);
});
