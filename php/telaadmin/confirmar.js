function confirmar(RMuser) {
  if (confirm("Deseja apagar o usuário?")) {
    location.href = "excluir.php?iduser=" + RMuser;
  }
}
