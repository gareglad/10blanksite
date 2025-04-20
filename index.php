<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pixel Quest</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.2.2/font/bootstrap-icons.css">
  <style>
    /* Basic styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f0f0f0;
  height: 100vh;
}

.game-container {
  max-width: 85%;
  margin: 20px auto;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  display: inline-block;
  height: fit-content;
}

.game-info {
  text-align: center;
  margin-bottom: 20px;
}
.game-area-container{
    width: 100%;
}
.game-area {
  border: 2px solid #ccc;
  height: 400px;
    width: 400px;
  /* Additional styling for the game area */
}
.card-header {
    border-bottom: none;
    font-size: 28px;
}
.card-header p {
    font-size: 15px;
    margin: 0px;
    line-height: 40px;
}
.gold-level p {
    line-height: 50px;
    margin-bottom: 0px;
    font-size: 25px;
    margin-left: 30px;
}
button#level-up-btn {
    margin-right: 30px;
}
  </style>
  
</head>
<body class="d-flex justify-content-center align-self-center">
 <?php 
 echo 'hello';
?>
  <div class="game-container align-self-center">
    <div class="game-info">
        <div class="card-header d-flex justify-content-between">
            <span class="d-flex justify-content-start">Pixel Quest</span>
            <p class="d-flex justify-content-end">Character Level: <span id="level">1</span></p>
          </div>
      <!-- <h2>Pixel Quest</h2> -->
      <div class="gold-level d-flex justify-content-between mt-3">
        <p>Gold: <span id="gold">100</span></p>
        <button type="button" class="btn btn-primary" id="level-up-btn">Level Up (10)</button>
        
      </div>
     
    </div>
    <div class="game-area-container d-flex justify-content-center">
        <button type="button" class="btn btn-warning game-area" id="game-area"></button>
    </div>
    
    <!-- <div class="game-area" id="game-area">
      Game area content
    </div> -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="game.js"></script> -->
  <script>
    $(document).ready(function() {
  let characterLevel = 1;
  let gold = 100;
  let cost = 10;
  // Update character level and gold display
  function updateStats() {
    $('#level').text(characterLevel);
    $('#gold').text(gold);
  }

  // Simulate earning gold
  function earnGold(amount) {
    gold += amount;
    updateStats();
  }

  // Simulate leveling up
  function levelUp() {
    characterLevel++;
    gold = gold - 10;
    $('#gold').text(gold);
    updateStats();
  }

  // Example event triggers (simulated)
  $('#game-area').on('click', function() {
    earnGold(10);
  });

  $('#level-up-btn').on('click', function() {
    levelUp();
  });

  // Initial stats display
  updateStats();
});

  </script>

</body>
</html>
