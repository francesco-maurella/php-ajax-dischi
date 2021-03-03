new Vue ({

  //APPLICATION
  el: '#app',

  // DATA
  data: {
    apiUrl: 'app/server.php',
    genre: '',
    genres: [],
    discsList : []
  },

  // MEHODS
  methods : {
    filterList: function(){
      axios.get(this.apiUrl, {
        params: {cat : this.genre}
      })
      .then((resp) => {
        this.discsList = resp.data
      });
    }
  },

  // API REQUEST
  mounted() {
    axios.get(this.apiUrl)
    .then((resp) => {
      // Creazione lista dischi
      this.discsList = resp.data
      // Creazione generi
      resp.data.forEach((item, i) => {
        if (!this.genres.includes(item.genre)) {
          this.genres.push(item.genre)
        }
      });
    });
  }
});
