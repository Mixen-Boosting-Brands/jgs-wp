document.addEventListener("DOMContentLoaded", () => {
    const services = {
        joist: {
            image: "./assets/images/servicios/1.png",
            titleAccent: "Fabricación",
            titleMain: "de joist",
            description:
                "Fabricamos joist estructural bajo estándares certificados, garantizando resistencia, precisión y cumplimiento normativo para proyectos de construcción industrial, comercial e institucional.",
            includes: [
                "Fabricación de joist conforme a diseño y especificaciones técnicas.",
                "Procesos de soldadura certificados.",
                "Control de calidad y trazabilidad durante la manufactura.",
                "Entrega alineada a programa de obra.",
            ],
            audience: [
                { icon: "fa-briefcase", text: "General contractors" },
                {
                    icon: "fa-industry",
                    text: "Fabricantes de estructura metálica",
                },
                { icon: "fa-helmet-safety", text: "Montadores de estructura" },
            ],
            value: [
                "Procesos alineados a SJI, AWS y AISC.",
                "Capacidad productiva para proyectos de mediana y gran escala.",
                "Cumplimiento en tiempo, costo y especificación.",
            ],
        },

        "joist-girder": {
            image: "./assets/images/servicios/2.png",
            titleAccent: "Fabricación",
            titleMain: "de joist Girder",
            description:
                "Ofrecemos manufactura especializada de joist girder para estructuras de gran claro y alta exigencia de carga, cumpliendo con estándares técnicos y de calidad internacional.",
            includes: [
                "Fabricación de joist girder conforme a requerimientos estructurales.",
                "Procesos certificados y supervisión técnica.",
                "Control dimensional y de calidad.",
                "Entrega confiable según cronograma del proyecto.",
            ],
            audience: [
                { icon: "fa-briefcase", text: "General contractors" },
                {
                    icon: "fa-industry",
                    text: "Fabricantes de estructura metálica",
                },
                { icon: "fa-city", text: "Proyectos de gran escala" },
            ],
            value: [
                "Manufactura bajo estándares SJI, AWS y AISC.",
                "Infraestructura y capacidad para proyectos exigentes.",
                "Respaldo técnico y cumplimiento normativo.",
            ],
        },

        "lamina-deck": {
            image: "./assets/images/servicios/3.png",
            titleAccent: "Suministro",
            titleMain: "de Lámina Deck",
            description:
                "Comercializamos lámina deck certificada para sistemas de entrepiso y cubiertas metálicas, asegurando calidad, compatibilidad estructural y entregas confiables.",
            includes: [
                "Suministro de lámina deck conforme a especificaciones técnicas.",
                "Material certificado para uso estructural.",
                "Coordinación logística y entrega programada.",
                "Soporte técnico para correcta aplicación en obra.",
            ],
            audience: [
                { icon: "fa-briefcase", text: "General contractors" },
                {
                    icon: "fa-industry",
                    text: "Fabricantes y montadores de estructuras",
                },
                { icon: "fa-city", text: "Proyectos de gran escala" },
            ],
            value: [
                "Material alineado a normativas de construcción.",
                "Cumplimiento en tiempos de entrega.",
                "Soporte técnico y acompañamiento durante el proyecto.",
            ],
        },
    };

    const modalElement = document.getElementById("serviceModal");
    const modal = new bootstrap.Modal(modalElement);

    document.querySelectorAll(".js-service-card").forEach((card) => {
        card.addEventListener("click", (e) => {
            if (e.target.closest("a")) {
                e.preventDefault();
            }

            const key = card.dataset.service;
            const service = services[key];

            modalElement.querySelector(".modal-service-image").src =
                service.image;

            modalElement.querySelector(".modal-title-accent").textContent =
                service.titleAccent + " ";

            modalElement.querySelector(".modal-title-main").textContent =
                service.titleMain;

            modalElement.querySelector(".modal-description").textContent =
                service.description;

            const includesList = modalElement.querySelector(".modal-includes");
            includesList.innerHTML = service.includes
                .map((item) => `<li>${item}</li>`)
                .join("");

            const valueList = modalElement.querySelector(".modal-value");
            valueList.innerHTML = service.value
                .map((item) => `<li>${item}</li>`)
                .join("");

            const audienceContainer =
                modalElement.querySelector(".modal-audience");

            audienceContainer.innerHTML = service.audience
                .map(
                    (item) => `
                        <div class="col-md-4">
                            <div class="audience-card text-center p-3">
                                <i class="fa-solid ${item.icon} mb-2"></i>
                                <div>${item.text}</div>
                            </div>
                        </div>
                    `
                )
                .join("");

            modal.show();
        });
    });
});
