<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Balance</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .balance-container {
      margin-top: 20px;
    }
    .toggle-icon {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center">Balance</h2>
        <div class="balance-container">
          <span id="balance">****</span>
          <i id="toggleIcon" class="fas fa-eye toggle-icon" onclick="toggleBalance()"></i>
        </div>
      </div>
    </div>
  </div>

  <script>
    let balanceVisible = false;
    const balanceElement = document.getElementById('balance');
    const toggleIcon = document.getElementById('toggleIcon');

    function toggleBalance() {
      balanceVisible = !balanceVisible;
      if (balanceVisible) {
        balanceElement.textContent = "$1000"; // Replace with actual balance value
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
      } else {
        balanceElement.textContent = "****";
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
      }
    }
  </script>
</body>
</html>
