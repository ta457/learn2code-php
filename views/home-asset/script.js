const renderLang = document.getElementsByClassName("lang-grid")[0];
const topLang = document.getElementsByClassName("langtag")[0];
const dataLang = [
  { name: "HTML", backgroundColor: "--green-w3", color: "white" },
  { name: "CSS", backgroundColor: "--light-pink-w3", color: "black" },
  { name: "JavaScript", backgroundColor: "--yellow-w3", color: "black" },
  { name: "SQL", backgroundColor: "--light-pink-w3", color: "black" },
  { name: "C++", backgroundColor: "--light-black-w3", color: "white" },
  { name: "Python", backgroundColor: "--light-blue-w3", color: "white" },
];

const dataTopLang = [
  {
    name: "HTML",
    title: "The language for building web pages",
    backgroundColor: "background-color: var(--light-blue-w3)",
    color: "color: white !important;",
    filePath: "html.jpg",
  },
  {
    name: "CSS",
    title: "The language for styling web pages",
    backgroundColor: "background-color: var(--light-pink-w3)",
    color: "color: black;",
    filePath: "css.jpg",
  },
  {
    name: "JavaScript",
    title: "The language for programming web pages",
    backgroundColor: "background-color: var(--light-black-w3)",
    color: "color: white !important;",
    filePath: "js.jpg",
  },
  {
    name: "Python",
    title: "A popular programming language",
    backgroundColor: "background-color: var(--yellow-w3)",
    color: "color: black;",
    filePath: "python.jpg",
  },
];

const renderDataLang = dataLang
  .map(
    (item) =>
      `<div style="background-color: var(${item.backgroundColor})"><a href="#!" style="text-decoration: none; color:${item.color}">${item.name}</a></div>`
  )
  .join("");

console.log(renderDataLang);

const renderDataTopLangHTML = dataTopLang
  .map(
    (item) => `
       <div class="langtag-component" style="${item.backgroundColor};${item.color}">
         <div class="component-boxing">
          <div class="boxing-lang box-margin">
            <h2>${item.name}</h2>
            <p>${item.title}</p>
            <button>Learn ${item.name}</button>
          </div>
          <div class="boxing-example box-margin">
            <p>${item.name} Example</p>
            <img src="/views/home-asset/img/lang/${item.filePath}"/>
          </div>
         </div>
      </div>
`
  )
  .join("");

topLang.innerHTML = renderDataTopLangHTML;

renderLang.innerHTML = renderDataLang;
