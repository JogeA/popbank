<html>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">

<script>
function validateForm() {
    const nome = document.getElementById("nome").value;
    const sobrenome = document.getElementById("sobrenome").value;
    const idade = document.getElementById("idade").value;
    const errorMessage = document.getElementById("error-message");

    if (!nome || !sobrenome || !idade) {
        errorMessage.textContent = "Todos os campos são obrigatórios.";
        return false;
    }
    errorMessage.textContent = ""; // Limpa a mensagem de erro se todos os campos estão preenchidos
    return true;
}
</script>

<form class="container" method="post" onsubmit="return validateForm()">
  <h2>Login</h2>
  <div id="error-message" style="color: red; margin-bottom: 5px;"></div>
  <label for="nome">Nome</label>
  <input type="text" id="nome" name="nome"><br><br>
  <label for="sobrenome">Sobrenome</label>
  <input type="text" id="sobrenome" name="sobrenome"><br><br>
  <label for="idade">Idade</label>
  <input type="number" id="idade" name="idade" min="16" max="100" oninput="this.value = Math.min(this.value, 100)"><br><br>
  <button type="submit">✅</button>
</form>

eu quero gozar