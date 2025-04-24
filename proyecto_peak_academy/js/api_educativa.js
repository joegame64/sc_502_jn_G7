document.addEventListener("DOMContentLoaded", function() {
    // Manejar el evento de búsqueda cuando el usuario haga clic en el botón
    document.getElementById("searchButton").addEventListener("click", function() {
      const termino = document.getElementById("searchInput").value.trim();
  
      if (termino) {
        fetch(`https://es.wikipedia.org/api/rest_v1/page/summary/${termino}`)
          .then(response => response.json())
          .then(data => {
            if (data.type === "standard") {
              const html = `
                <div class="card shadow mx-auto" style="max-width: 600px;">
                  <div class="card-body">
                    <h3 class="card-title">${data.title}</h3>
                    <img src="${data.thumbnail?.source || ''}" alt="${data.title}" class="img-fluid mb-3"/>
                    <p class="card-text">${data.extract}</p>
                    <a href="${data.content_urls.desktop.page}" target="_blank" class="btn btn-primary">Leer más en Wikipedia</a>
                  </div>
                </div>
              `;
              // Insertar el resultado en el contenedor de resultados
              document.getElementById("wikiResultado").innerHTML = html;
            } else {
              document.getElementById("wikiResultado").innerHTML = `<p>No se encontraron resultados para "${termino}".</p>`;
            }
          })
          .catch(error => {
            document.getElementById("wikiResultado").innerHTML = `<p>Error al obtener el artículo: ${error}</p>`;
          });
      } else {
        document.getElementById("wikiResultado").innerHTML = `<p>Por favor ingresa un término de búsqueda.</p>`;
      }
    });
  });
  

