"use strict"
let listenerActive = true;

window.onfocus = () => {
  listenerActive = true;
  console.log('Вкладка открыта');
  window.location.reload(true);
};

window.onblur = () => {
  listenerActive = false;
  // Снижение активности, если пользователь перешел на другую вкладку
};

let reloader = document.querySelector('.reload');
reloader.addEventListener("click", e => {
  window.location.reload(true);
})

document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((el) => {
    hljs.highlightElement(el);
  });
});
