window.onerror = function(message, source, lineno, colno, error) {
  console.error('Erro capturado:', message);
  console.error('Arquivo:', source);
  console.error('Linha:', lineno, 'Coluna:', colno);
  console.error('Objeto de erro:', error);
  
  // Redireciona para a página de erro
  window.location.href = 'erro.html';
  
  // Retorna true para evitar que o erro apareça duplicado no console
  return true;
};
