const digitRegExp = new RegExp('^[0-9]$');
const operationRegExp = new RegExp("^[/*\\-+]$");

const app = new Vue({
   el: '#core',
   data: {
      x: '',
      y: '',
      operation: '/',
      result: '',
      window: '0',
      pointMemory: 0, //0 - не было зпт; 1 - надо поставить зпт; 2 - уже стоит зпт
      operationMemory: 0, //0 - ввод X, надо обнулить window; 1 - ввод Y, надо посчитать результат; 2 - выведен результат, нужно ввести новый Х или использовать оператор
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
      //Обработка нажатия клавиш
      keyboardHandler(event) {
         let k = event.key;
         console.log(k);
         switch (true) {
            case digitRegExp.test(k):
               this.valueClickHandler({target: {value: k}});
               break;
            case k === '.' || k === ',':
               this.pointClickHandler({});
               break;
            case operationRegExp.test(k):
               this.operationClickHandler({target: {value: k}});
               break;
            case k === '=' || k === 'Enter':
               this.calculateClickHandler({target: {value: k}});
               break;
         }
      },
      //Обработка ввода точки
      pointClickHandler(event) {
         if (this.pointMemory === 0) {
            this.pointMemory++;  //Меняем на 1, пишем точку вместе со следующей цифрой
         }
      },
      // обработка ввода цифры
      valueClickHandler(event) {
         let digit = event.target.value;
         if (this.pointMemory === 1) {
            this.window += '.' + digit;
            this.pointMemory++;
         } else if (this.window !== '0') {
            this.window += digit;
         } else if (this.pointMemory === 0) {
            if (digit === '0') {
               console.log('Error: два ноля подряд');
            } else {
               this.window = digit;
            }
         } else if (this.pointMemory === 2) {
            console.log('Error: ошибка точки');
         }
         console.log(digit);
      },
      //Обработка ввода операции / * - +
      operationClickHandler(event) {
         console.log(event.target.value);
         this.operation = event.target.value;
         switch (this.operationMemory) {
            case 0:
            case 2:
               this.operationMemory = 1;
               this.x = +this.window;
               this.window = '0';
               this.pointMemory = 0;
               break;
            case 1:
               this.operationMemory++;
               this.pointMemory = 0;
               this.calculateClickHandler({target: {value: '='}});
               break;
         }
      },
      //Обработка ввода =
      calculateClickHandler(event) {
         console.log(event.target.value);
         this.y = +this.window;
         this.fetchRequest()
            .then(result => {
               this.window = result;
               this.operationMemory = 2;
               this.pointMemory = 0;
            });
      },
   },
   created() {
      //Вешаем обработчик нажатий клавиш
      document.addEventListener('keyup', this.keyboardHandler);
   }
});