function load() {
    var imcpf = document.querySelector("input[name='cpf']");
    document.querySelector("input[name='cpf']").addEventListener("blur", () => {
        var men = document.querySelectorAll("form p")[0];
        if (imcpf.value.length < 11) {
            men.innerHTML = "CPF invalido:Muito curto";
            men.style.display = "block";
            return;
        }
        if (imcpf.value.length > 11) {
            men.innerHTML = "CPF invalido:Muito grande";
            men.style.display = "block";
            return;
        }
        if (imcpf.value.length == 11) {
            for (var i = 0; i < imcpf.value.length; i++) {
                if (imcpf.value[i] < '0' || imcpf.value[i] > '9') {
                    men.innerHTML = "CPF invalido:Digite somente numeros";
                    men.style.display = "block";
                    return;
                }
            }
            men.style.display = "none";
        }
    });
    if(document.body.contains(document.querySelectorAll("form p")[1])){
        document.querySelectorAll("form p")[1].style.display = "block";
        document.querySelector("input[name='senha']").addEventListener("focus",()=>{
          document.querySelectorAll("form p")[1].style.display = "none";
        });
    }
}
document.addEventListener("DOMContentLoaded", load);
