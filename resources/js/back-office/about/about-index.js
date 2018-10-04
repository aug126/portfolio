import Axios from "axios";

var filtre = document.getElementById("filtreAbout");

if (filtre) {
    filtre.addEventListener('change', function() {
        Axios.get('/api/admin/about/to-get', {
            params: {
              toGet: filtre.value
            }
          })
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          })
          .then(function () {
            // always executed
          });  
    });
}