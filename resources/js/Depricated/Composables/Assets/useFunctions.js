export function useFunctions(){
    
    const convertImages = (query, callback) => {
        const images = document.querySelectorAll(query)
        images.forEach(image => {
          fetch(image.src)
          .then(res => res.text())
          .then(data => {
            const parser = new DOMParser()
            const svg = parser.parseFromString(data, 'image/svg+xml').querySelector('svg')
              if (image.id) svg.id = image.id
              if (image.className) svg.classList = image.classList
              image.parentNode.replaceChild(svg, image)
          })
          .then(callback)
          .catch(error => console.error(error))
        });
    }

    /**
     * 
     * @param {Array} array 
     * @param {Number} chunkSize 
     * @returns {Array}
     */
    const toChunks = (array, chunkSize = 5) => {
      let result = []
      for (let i = 0; i < array.length; i += chunkSize) {
          let chunk = array.slice(i, i + chunkSize);
          result.push(chunk)
      }
      return result
    }

    return { convertImages, toChunks }
}