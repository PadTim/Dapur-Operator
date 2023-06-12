// NAVBAR - TOGEL SWITC DARKMODE
const toggleSwitch = document.querySelector('#darkSwitch');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
  document.documentElement.setAttribute('data-theme', currentTheme);

  if (currentTheme === 'dark') {
    toggleSwitch.checked = true;
    document.body.classList.add('dark-mode');
  }
}

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute('data-theme', 'dark');
    localStorage.setItem('theme', 'dark');
    document.body.classList.add('dark-mode');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
    document.body.classList.remove('dark-mode');
  }
}

toggleSwitch.addEventListener('change', switchTheme, false);

// Generate matrix running effect
function generateMatrixRunning() {
    var matrixText = document.createElement('div');
    matrixText.classList.add('matrix-text');
  
    var matrixCode = '';
    var possibleChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_-+=<>';
  
    for (var i = 0; i < 500; i++) {
      matrixCode += possibleChars.charAt(Math.floor(Math.random() * possibleChars.length));
    }
  
    matrixText.textContent = matrixCode;
    document.getElementById('Matrix').appendChild(matrixText);
  }
  
  // Run matrix effect on page load
  window.addEventListener('load', function() {
    generateMatrixRunning();
  });
  // Inisialisasi DataTables
  $('#dataTablesZ').DataTable({
    lengthMenu: [17, 30, 50, 100],
    language: {
        search: 'Cari di sini'
    },
    pagingType: 'numbers',
    drawCallback: function () {
        $('.dataTables_paginate > .pagination').addClass(
            'pagination-sm'); // Menambahkan kelas CSS "pagination-sm"
    }
});

// Inisialisasi X-Editable
$('.update').editable({
url: "",
type: 'text',
showbuttons: false,
});



