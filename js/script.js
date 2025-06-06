document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".caroinner a");

  links.forEach(link => {
    link.addEventListener("click", function (event) {
      const href = link.getAttribute("href");

      // Redireciona para erro.html se o href estiver vazio, nulo ou for "#"
      if (!href || href.trim() === "" || href.trim() === "#") {
        event.preventDefault();
        console.log("Redirecionando para erro.html porque o href está vazio");
        window.location.href = "erro.html";
      }
    });
  });
});
