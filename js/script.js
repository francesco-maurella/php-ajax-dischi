new Vue ({

  //APPLICATION
  el: '#app',

  // DATA
  data: {
    discsList : []
  },

  // API REQUEST
  mounted() {

    const self = this;

    axios.get('http://localhost/php-ajax-dischi/app/server.php')
    .then((resp) => {
      // creazione lista dischi
      this.discsList = resp.data
    });
  }
});
