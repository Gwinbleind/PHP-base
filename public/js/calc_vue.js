const app = new Vue({
   el: '#core',
   data: {
      x: '',
      y: '',
      operation: '/',
      result: '',
   },
   methods: {
      fetchRequest() {
         return fetch('calc_post.php', {
            method: 'POST',
            headers: new Headers({
               'Content-type': 'application/json'
            }),
            body: JSON.stringify({
               x: +this.x,
               y: +this.y,
               operation: this.operation,
            })
         })
            .then(response => response.json())
            .then(response => {
               app.result = response.result
            })
      },
   }
});