document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll("a");

  links.forEach(link => {
    link.addEventListener("click", function (event) {
      const href = link.getAttribute("href");

      // Se o href for vazio, nulo ou só espaços, redireciona para erro.html
      if (!href || href.trim() === "" || href.trim() === "#") {
        event.preventDefault(); // impede o redirecionamento padrão
        console.log("Redirecionando para erro.html");
        window.location.href = "erro.html"; // ajuste o caminho se necessário
      }
    });
  });
});
