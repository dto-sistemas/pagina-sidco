/**
 * TIMELINE INTERACTIVA DE OBRAS - VERSIÓN MEJORADA
 * Línea de tiempo con navegación clickeable y auto-scroll cada 30 segundos
 */

(function() {
  'use strict';
  
  let currentIndex = 0;
  let totalSlides = 5;
  let autoPlayInterval = null;
  let autoPlayDelay = 30000; // 30 segundos
  let isInitialized = false;

  function initTimeline() {
    if (isInitialized) return;
    
    console.log('Inicializando Timeline...');
    
    // Verificar que la sección existe
    const timelineSection = document.querySelector('.home-timeline');
    if (!timelineSection) {
      console.log('Sección timeline no encontrada');
      return;
    }

    bindEvents();
    initializeFirstDot();
    startAutoPlay();
    isInitialized = true;
    
    console.log('Timeline inicializado correctamente');
  }

  function initializeFirstDot() {
    // Configurar el primer dot para que sea visible desde el inicio
    const firstPoint = document.querySelector('[data-index="0"]');
    if (firstPoint) {
      const dot = firstPoint.querySelector('.timeline-dot');
      if (dot) {
        dot.style.setProperty('background-color', 'white', 'important');
        dot.style.setProperty('border', '3px solid #c60074', 'important');
        console.log('Primer dot configurado a blanco con borde fucsia');
      } else {
        console.log('Dot del primer punto NO encontrado');
      }
    } else {
      console.log('Primer punto NO encontrado');
    }
  }

  function bindEvents() {
    // Event listeners para los puntos de la línea de tiempo
    const timelinePoints = document.querySelectorAll('.timeline-point');
    console.log(`Encontrados ${timelinePoints.length} puntos de timeline`);
    
    timelinePoints.forEach((point, i) => {
      const dataIndex = point.getAttribute('data-index');
      console.log(`Configurando punto ${i} con data-index: ${dataIndex}`);
      
      point.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const index = parseInt(dataIndex);
        console.log(`Click en punto con data-index: ${index}`);
        
        goToSlide(index);
        resetAutoPlay();
      });
    });

    // Pausar auto-play al hacer hover sobre la sección
    const timelineSection = document.querySelector('.home-timeline');
    if (timelineSection) {
      timelineSection.addEventListener('mouseenter', pauseAutoPlay);
      timelineSection.addEventListener('mouseleave', startAutoPlay);
    }
  }

  function goToSlide(index) {
    if (index === currentIndex) {
      console.log(`Ya estoy en slide ${index}, no hago nada`);
      return;
    }
    
    console.log(`Cambiando de slide ${currentIndex} a slide ${index}`);
    
    // Remover clase active de todos los puntos y slides
    const allPoints = document.querySelectorAll('.timeline-point');
    const allSlides = document.querySelectorAll('.timeline-slide');
    
    allPoints.forEach((point, i) => {
      const dataIndex = point.getAttribute('data-index');
      point.classList.remove('active');
      console.log(`Removiendo active de punto ${i} (data-index: ${dataIndex}), clases:`, point.className);
      
      // Resetear el dot a transparente
      const dot = point.querySelector('.timeline-dot');
      if (dot) {
        dot.style.setProperty('background-color', 'transparent', 'important');
        dot.style.setProperty('border', '3px solid transparent', 'important');
        console.log(`Dot ${i} reseteado a transparente`);
      }
    });
    
    allSlides.forEach(slide => {
      slide.classList.remove('active');
    });

    // Activar el punto y slide correspondiente
    const targetPoint = document.querySelector(`[data-index="${index}"]`);
    const targetSlide = document.querySelector(`.timeline-slide[data-index="${index}"]`);
    
    if (targetPoint) {
      targetPoint.classList.add('active');
      console.log(`Punto ${index} activado, clases actuales:`, targetPoint.className);
      
      // Aplicar estilo directamente al dot
      const dot = targetPoint.querySelector('.timeline-dot');
      if (dot) {
        dot.style.setProperty('background-color', 'white', 'important');
        dot.style.setProperty('border', '3px solid #c60074', 'important');
        console.log(`Dot ${index} configurado a blanco con borde fucsia`);
      } else {
        console.log(`Dot ${index} NO encontrado en punto activo`);
      }
    } else {
      console.log(`Punto ${index} NO encontrado`);
    }
    
    if (targetSlide) {
      targetSlide.classList.add('active');
      console.log(`Slide ${index} activado`);
    }

    currentIndex = index;
    console.log(`Current index actualizado a: ${currentIndex}`);
  }

  function nextSlide() {
    const nextIndex = (currentIndex + 1) % totalSlides;
    console.log(`Auto-scroll: siguiente slide ${nextIndex}`);
    goToSlide(nextIndex);
  }

  function startAutoPlay() {
    pauseAutoPlay(); // Limpiar interval existente
    console.log(`Iniciando auto-play cada ${autoPlayDelay/1000} segundos`);
    autoPlayInterval = setInterval(nextSlide, autoPlayDelay);
  }

  function pauseAutoPlay() {
    if (autoPlayInterval) {
      console.log('Pausando auto-play');
      clearInterval(autoPlayInterval);
      autoPlayInterval = null;
    }
  }

  function resetAutoPlay() {
    console.log('Reiniciando auto-play');
    pauseAutoPlay();
    startAutoPlay();
  }

  // Navegación con teclado
  function handleKeyboard(e) {
    if (e.key === 'ArrowLeft') {
      e.preventDefault();
      const prevIndex = currentIndex === 0 ? totalSlides - 1 : currentIndex - 1;
      goToSlide(prevIndex);
      resetAutoPlay();
    } else if (e.key === 'ArrowRight') {
      e.preventDefault();
      nextSlide();
      resetAutoPlay();
    }
  }

  // Inicializar cuando el DOM esté listo
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTimeline);
  } else {
    initTimeline();
  }

  // Agregar navegación con teclado
  document.addEventListener('keydown', handleKeyboard);
  
  // Pausar auto-play cuando la página no está visible
  document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
      pauseAutoPlay();
    } else {
      startAutoPlay();
    }
  });

  // Exportar funciones para uso global
  window.TimelineCarousel = {
    goToSlide: goToSlide,
    nextSlide: nextSlide,
    startAutoPlay: startAutoPlay,
    pauseAutoPlay: pauseAutoPlay,
    resetAutoPlay: resetAutoPlay
  };

})();