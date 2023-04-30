// Отримуємо посилання на форму та контейнер для відповіді
const questionForm = document.getElementById('question-form');
const answerContainer = document.getElementById('answer-container');

// Прикріплюємо обробник події на подію відправки форми
questionForm.addEventListener('submit', (event) => {
  // Зупиняємо стандартну поведінку форми (перезавантаження сторінки)
  event.preventDefault();

  // Отримуємо значення поля для вводу питання
  const questionInput = document.getElementById('question-input');
  const question = questionInput.value;

  // Створюємо новий об'єкт XMLHttpRequest для відправки запиту на сервер
  const xhr = new XMLHttpRequest();

  // Встановлюємо метод та адресу запиту
  xhr.open('POST', '/server.php');

  // Встановлюємо заголовки запиту (якщо необхідно)
  xhr.setRequestHeader('Content-Type', 'application/json');

  // Прикріплюємо обробник події на подію завершення запиту
  xhr.addEventListener('load', () => {
    // Перевіряємо, чи був запит успішним
    if (xhr.status === 200) {
      // Отримуємо відповідь в форматі JSON та перетворюємо його в об'єкт JavaScript
      const response = JSON.parse(xhr.responseText);

      // Відображаємо відповідь на сторінці
      answerContainer.innerHTML = `Відповідь: ${response.answer}`;
    } else {
      // Якщо сталася помилка, відображаємо повідомлення про помилку
      answerContainer.innerHTML = `Сталася помилка: ${xhr.statusText}`;
    }
  });

// Відправляємо запит на сервер з питанням у форматі JSON
xhr.send(JSON.stringify({ question: question }));
});
