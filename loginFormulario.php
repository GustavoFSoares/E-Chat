<div class="form-login">
    <h1 id="x">E-CHAT</h1>
    <form action="adicionaUsuario.php" method="post">
          <input type="text" name="userNome" placeholder="Digite seu nome">
          <button class="btn-login" type="submit">Entrar</button>
    </form>
</div>
<script>
var string = x.innerHTML;
var aBlinkingString = "";
for (i = 0; i < string.length; i++) {
    aBlinkingString += "<span class='blink'>" + string[i] + "</span>";
}
x.innerHTML = aBlinkingString;
colors = ["red", "green", "blue", "yellow", "purple", "silver"];
setInterval(function() {
            document.querySelectorAll(".blink")[Math.round((document.querySelectorAll(".blink").length - 1) * Math.random())].style.color = colors[Math.round((colors.length - 1) * Math.random())];
            }, 10)
</script>
