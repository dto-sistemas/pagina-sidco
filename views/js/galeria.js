
        // Datos de ejemplo
        const projects = [
            {
                id: 1,
                title: "El Milord",
                location: "Pilará Country, Buenos Aires",
                category: "network",
                description: "Complete renovation of the historic Plaza de Mayo including pavement, lighting and green areas.",
                coords: [-34.46197264416397, -58.95159188995362]
                
            },
            {
                id: 2,
                title: "El Faetón",
                location: "Pilará Country, Buenos Aires",
                category: "network",
                description: "Deployment of fiber optic infrastructure to improve internet connectivity in Palermo district.",
                coords: [-34.46197264416397, -58.95159188995362]
            },
            {
                id: 3,
                title: "El Cabriolet y Tilbury Norte",
                location: "Pilará Country, Buenos Aires",
                category: "network",
                description: "10km extension of Highway 9 to improve connectivity with northern suburbs.",
                coords: [-34.46197264416397, -58.95159188995362]
            },
            {
                id: 4,
                title: "Tilbury Sur",
                location: "Pilará Country, Buenos Aires",
                category: "network",
                description: "Development and beautification of Puerto Madero waterfront area.",
                coords: [-34.46197264416397, -58.95159188995362]
            },
            {
                id: 5,
                title: "Metrobus Corrientes",
                location: "Av. Corrientes, Buenos Aires",
                category: "infrastructure",
                description: "Implementation of a BRT system along Corrientes Avenue.",
                coords: [-34.6036, -58.3839]
            },
            {
                id: 6,
                title: "Las moradas",
                location: "Las moradas, Buenos Aires",
                category: "network",
                description: "Installation of city-wide WiFi network in downtown Buenos Aires.",
                coords: [-34.57826145918516, -58.68429285344798]
            },
            {
                id: 7,
                title: "San Telmo Street Repair",
                location: "San Telmo, Buenos Aires",
                category: "civil",
                description: "Complete street repair and underground utilities update in San Telmo.",
                coords: [-34.6189, -58.3722]
            },
            {
                id: 8,
                title: "Subway Line A Renovation",
                location: "Retiro, Buenos Aires",
                category: "infrastructure",
                description: "Modernization of the oldest subway line in Latin America.",
                coords: [-34.5919, -58.3750]
            },
            {
                id: 9,
                title: "Altos de San Carlos",
                location: "Altos de San Carlos",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.481068075413546, -58.68446754417762] 
            },
            {
                id: 10,
                title: "Hospital Precoz",
                location: "Pablo Nogués",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.49606766342554, -58.70900488729057] 
            },
            {
                id: 11,
                title: "CDI Barrio Rincón de Tortuguitas",
                location: "Jose C. Paz",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.496191090443, -58.79237317421484] 
            },
            {
                id: 12,
                title: "Ejercito del Norte",
                location: "Grand Bourg",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.48996058926846, -58.72098120762572] 
            },
            {
                id: 13,
                title: "Ruka Tigre",
                location: "Tigre",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.43638987505673, -58.59400084026638] 
            },
            {
                id: 14,
                title: "Bailen",
                location: "Pablo Nogués",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.48639374358002, -58.69236357660423] 
            },
            {
                id: 15,
                title: "Av. Bernardo Ader",
                location: "Munro",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.53512640858076, -58.54101478322916] 
            },
            {
                id: 16,
                title: "San Calal",
                location: "Adolfo Sourdeaux",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.50702254149437, -58.6588079134177] 
            },
            {
                id: 17,
                title: "El Primaveral",
                location: "Grand Bourg",
                category: "network",
                description: "Renovacion del gasoducto del establecimiento",
                coords: [-34.466900440354685, -58.72354174410911] 
            }
        ];

        // Declare map and markers variables in a scope accessible by all functions
        let map;
        let markers;
        const projectMarkers = {};

        // Helper function to create custom Leaflet icons
        function createCustomIcon(category, id) {
            return L.divIcon({
                className: '',
                html: `<div class="number-icon ${category}">${id}</div>`,
                iconSize: [28, 28],
                iconAnchor: [14, 14]
            });
        }

        // Helper to build project URL (convention-based)
        function getProjectUrl(project) {
            if (project.url) return project.url;
            if (project.title === 'El Milord') return 'views/Obras/obra-1.php';
            return `views/Obras/obra-${project.id}.php`;
        }

        // Helper function to create popup content
        function createPopupContent(project) {
            const categoryClass = `popup-${project.category}`;
            const url = getProjectUrl(project);
            return `
                <div>
                    <h3 class="popup-title"><a href="${url}" target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:inherit;">${project.title}</a></h3>
                    <span class="popup-category ${categoryClass}">${getCategoryName(project.category)}</span>
                    <p class="popup-location"><small>${project.location}</small></p>
                    <p class="popup-description">${project.description}</p>
                </div>
            `;
        }

        // Helper function to get category display name
        function getCategoryName(category) {
            switch(category) {
                case 'civil': return 'Civil';
                case 'network': return 'Redes';
                case 'infrastructure': return 'Infraestructura';
                default: return '';
            }
        }

        // Function to render projects in the sidebar
        function renderProjects(category = 'all') {
            const container = document.getElementById('projectsContainer');
            container.innerHTML = '';
            
            const filteredProjects = category === 'all' 
                ? projects 
                : projects.filter(p => p.category === category);
            
            filteredProjects.forEach(project => {
                const projectElement = document.createElement('div');
                projectElement.className = `project-card project-${project.category}`;
                projectElement.dataset.projectId = project.id;
                
                projectElement.innerHTML = `
                    <div style="flex: 0 0 120px; min-width: 120px;">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/632c7061-4e31-490d-96ab-a37bedd6140f.png" 
                             alt="${project.title} Preview" 
                             style="width:100%; height: 80px; max-height: 100%; object-fit: cover; border-radius:4px;">
                    </div>
                    <div style="flex: 1;">
                        <h3 class="project-title">${project.title}</h3>
                    <p class="project-location">${project.location}</p>
                    <p class="project-description">${project.description}</p>
                    </div>
                `;
                
                projectElement.addEventListener('click', () => {
                    const marker = projectMarkers[project.id];
                    map.setView(marker.getLatLng(), 15);
                    marker.openPopup();
                    
                    // Highlight the clicked project
                    document.querySelectorAll('.project-card').forEach(el => {
                        el.style.borderLeftWidth = '4px';
                    });
                    projectElement.style.borderLeftWidth = '8px';
                });
                
                container.appendChild(projectElement);
            });
        }

        // Initialize map and load projects when DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the map centered on Buenos Aires
            map = L.map('map').setView([-34.6037, -58.3816], 12);

            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                maxZoom: 19,
            }).addTo(map);

            // Create feature group for markers
            markers = L.featureGroup().addTo(map);

            // Add markers for projects
            projects.forEach(project => {
                const icon = createCustomIcon(project.category, project.id);
                
                const marker = L.marker(project.coords, { 
                    icon: icon,
                    projectId: project.id
                }).addTo(markers);
                
                marker.bindPopup(createPopupContent(project), { className: 'custom-popup' });
                
                projectMarkers[project.id] = marker;
            });

            // Initialize with all projects
            renderProjects();

            // Handle category tab clicks
            document.querySelectorAll('.category-tab').forEach(tab => {
                tab.addEventListener('click', function() {
                    const category = this.dataset.category;
                    
                    // Update active tab
                    document.querySelectorAll('.category-tab').forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Render projects for the selected category
                    renderProjects(category);
                    
                    // Fly to bounds of markers in this category
                    const categoryProjects = category === 'all' 
                        ? projects 
                        : projects.filter(p => p.category === category);
                    if (categoryProjects.length > 0) {
                        const bounds = L.latLngBounds(categoryProjects.map(p => p.coords));
                        map.flyToBounds(bounds, { padding: [50, 50] });
                    }
                });
            });
        });
        
