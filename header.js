document.addEventListener("DOMContentLoaded", () => {
    const header = document.createElement("header");
    header.innerHTML= `
    <button class="open-menu" id="openMenu"><i class="bi bi-three-dots"></i></button>
        <nav class="nav" id="nav">
            <button class="close-menu" id="closeMenu"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li class="search-box">                    
                    <input type="text" id="searchBar" class="search-bar" placeholder="Busca tu e-bike...">
                    <button id="search-button" class="search-button"><i class="bi bi-search"></i></button>                    
                </li>
                <li><a href="#">Todas las e-bikes</a></li>
                <li><a href="#">Accesorios</a></li>
                <li><a href="./why-ebike.html">¿Por qué elegir una e-bike?</a></li>
                <li><a href="#">Historias</a></li>
                <li><a href="#">Quienes somos</a></li>
                <li><a href="#">Soporte</a></li>
                <div class="login-section">
                    <li><a href="./login.html">Entrar</a></li>
                    <li><a href="./register.html">Registrarse</a></li>
                    <li><a href="#">¿Olvidaste tu contraseña?</a></li>
                </div>
                <div class="social-media">
                    <button><a href="#"><i class="bi bi-facebook"></i></a></button>
                    <button><a href="#"><i class="bi bi-instagram"></i></a></button>
                    <button><a href="#"><i class="bi bi-twitter"></i></a></button>
                    <button><a href="#"><i class="bi bi-whatsapp"></i></a></button>
                </div>
            </ul>
        </nav>

        <h1><a href="./index.html">yellowCat</a></h1>

        <div class="buttons">
            <button class="search" id="search"><i class="bi bi-search"></i></button>
            <button class="shop-car"><i class="bi bi-cart"></i></button>
            <button class="login"><a href="./login.html"><i class="bi bi-person"></i></a></button>
        </div>
    `
    document.body.insertBefore(header, document.body.firstChild);
});
