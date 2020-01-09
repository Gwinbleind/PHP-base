//Заготовка для асинхронного обновления комментариев
const app = new Vue({
   el: '#core',
   data: {
      actionButtonMessage: 'Отправить',
      name: '',
      text: '',
      action: '',
   },
   methods: {
      //Отправка post-запроса, получение ответа, ввод ответа в data
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
               return app.result = response.result
            })
      },
   },
   created() {
      //пусто
   }
});