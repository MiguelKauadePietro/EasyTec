document.getElementById("downloadButton").addEventListener("click", () => {
    downloadImage();
});

function downloadImage() {
    const image = "../../imagens/plantaetec.png"; // Substitua pelo caminho real para sua imagem

    const a = document.createElement("a");
    a.href = image;
    a.download = "imagem.png";
    a.style.display = "none";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}