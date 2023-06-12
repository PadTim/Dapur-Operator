
const canvas = document.getElementById('Matrix');
const context = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const katakana = 'アァカサタナハマヤャラワガザダバパイィキシチニヒミリヰギジヂビピウゥクスツヌフムユュルグズブヅプエェケセテネヘメレヱゲゼデベペオォコソトノホモヨョロヲゴゾドボポヴッン';
const latin = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ ';
const nums = '0123456789 11011986';

const alphabet = katakana + latin + nums;

const fontSize = 16;
const columns = canvas.width / fontSize;
const rainDrops = [];

for (let x = 0; x < columns; x++) {
  rainDrops[x] = 1;
}

const draw = () => {
  context.fillStyle = 'rgba(0, 0, 0, 0.03)';
  context.fillRect(0, 0, canvas.width, canvas.height);

  context.fillStyle = '#fc0345';
  context.font = fontSize + 'px monospace';

  for (let i = 0; i < rainDrops.length; i++) {
    const text = alphabet.charAt(Math.floor(Math.random() * alphabet.length));
    context.fillText(text, i * fontSize, rainDrops[i] * fontSize);

    if (rainDrops[i] * fontSize > canvas.height && Math.random() > 0.975) {
      rainDrops[i] = 0;
    }
    rainDrops[i]++;
  }
// Menambahkan tulisan "FARID FILANTROPIA" yang bergerak secara horizontal
const text = "KOPI HIDEUNG - ENERGY";
const textWidth = context.measureText(text).width;
const textX = (canvas.width - textWidth) / 2.5;
const textY = canvas.height /1;

context.fillStyle = '#141414';
context.font = 'bold 35px monospace'; // Mengatur ukuran huruf menjadi 35px dan menggunakan font yang lebih tebal
context.fillText(text, textX, textY);

// Menggerakkan tulisan "FARID FILANTROPIA" secara horizontal
const faridTextWidth = context.measureText("FARID ").width;
const faridTextX = textX + (textWidth - faridTextWidth) / 2.5;
const faridTextY = textY - 20;

for (let i = 0; i < text.length; i++) {
  const char = text.charAt(i);
  const charX = faridTextX + (i * fontSize);
  const charY = faridTextY - (rainDrops[Math.floor(charX / fontSize)] * fontSize);

  context.fillStyle = '#ff0000';
  context.font = 'bold 18px monospace'; // Mengatur ukuran huruf menjadi 27px dan menggunakan font yang lebih tebal
  context.fillText(char, charX, charY);
}

  
};

setInterval(draw, 30);