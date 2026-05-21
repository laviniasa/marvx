// Scroll suave
function scrollToCTA() {
  document.getElementById("cta").scrollIntoView({
    behavior: "smooth"
  });
}

// Frases rotativas
const quotes = [
  "Crescimento sem estrutura é risco.",
  "A tributação certa protege negócios.",
  "Decisões estratégicas exigem base sólida."
];

let i = 0;

setInterval(() => {
  i = (i + 1) % quotes.length;
  document.getElementById("quote").innerText = quotes[i];
}, 3000);

