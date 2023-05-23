class headermain extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = 
        <nav>
            <ul>
                <li>
                    <a href="Index.html">INICIO</a>
                </li>
                <li>
                    <a href="Quienes_somos.html">QUIENES SOMOS</a>
                </li>
                <li>
                    <a href="Especialidad.html">ESPECIALIDAD</a>
                </li>
                <li>
                    <a href="Servicios.html">SERVICIOS</a>
                </li>
                <li>
                    <a href="Experiencias.html">EXPERIENCIAS Y CLIENTES</a>
                </li>
                <li>
                    <a href="Contacto.html">CONTACTO</a>
                </li>
            </ul>
        </nav>
        
    }
}
window.customElements.define("menu_nav", headermain);