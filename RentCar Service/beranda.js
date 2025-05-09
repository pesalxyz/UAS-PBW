// Khusus untuk menangani notifikasi pada halaman beranda
document.addEventListener('DOMContentLoaded', function() {
  // Get elements
  const notificationBtn = document.getElementById('notificationBtn');
  const notificationBar = document.getElementById('notificationBar');
  
  if (notificationBtn && notificationBar) {
      // Toggle notification bar when clicking the notification button
      notificationBtn.addEventListener('click', function(e) {
          e.stopPropagation();
          notificationBar.classList.toggle('active');
      });
      
      // Close notification bar when clicking outside
      document.addEventListener('click', function(e) {
          if (!notificationBtn.contains(e.target) && !notificationBar.contains(e.target)) {
              notificationBar.classList.remove('active');
          }
      });
  }
});