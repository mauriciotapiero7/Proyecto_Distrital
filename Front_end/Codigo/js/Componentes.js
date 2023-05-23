class headermain extends HTMLElement{
    constructor(){
    super();
    }
    
    connectedCallback(){
    this.innerHTML = `
    <ul>
    <li>
    <a href="">INICIO</a>
    </li>
    <li>
    <a href="Quienes_somos.html">QUIENES SOMOS</a>
    </li>
    <li>
    <a href="">ESPECIALIDAD</a>
    </li>
    <li>
    <a href="">SERVICIOS</a>
    </li>
    <li>
    <a href="">EXPERIENCIAS Y CLIENTES</a>
    </li>
    <li>
    <a href="">CONTACTO</a>
    </li>
    </ul>
    `;
    }
    }
    
    window.customElements.define("menu-main", headermain);