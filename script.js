$(document).ready(function() {
    const welcomeText = $('#welcome-text');
  
    // Tambahkan class 'show' setelah 500ms (0.5 detik)
    setTimeout(function() {
      welcomeText.addClass('show');
    }, 500);
  });
  