<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $leader = $_POST['leader'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $member1 = $_POST['member1'];
  $member2 = $_POST['member2'];
  $member3 = $_POST['member3'];
  $member4 = $_POST['member4'];
  $project = $_POST['project'];
  $category = $_POST['category'];
  $duration = $_POST['duration'];
  $abstract = $_POST['abstract'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Successful</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      background: radial-gradient(circle at top left, #ffe6f7, #eaf4ff, #fff3e6);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .success-container {
      text-align: center;
      background: white;
      border-radius: 20px;
      box-shadow: 0px 6px 30px rgba(0,0,0,0.1);
      padding: 40px 60px;
      width: 80%;
      max-width: 700px;
      position: relative;
      animation: fadeIn 1.5s ease-in-out;
    }

    h1 {
      color: #4a148c;
      font-size: 2.2rem;
      margin-bottom: 10px;
      text-shadow: 0 0 10px rgba(147, 0, 255, 0.2);
    }

    p {
      color: #555;
      font-size: 1rem;
      margin-bottom: 25px;
    }

    .info-box {
      text-align: left;
      background: #faf8ff;
      padding: 25px 30px;
      border-radius: 15px;
      border-left: 5px solid #ba68c8;
      margin-bottom: 25px;
      box-shadow: 0 2px 15px rgba(186, 104, 200, 0.1);
    }

    .info-box p {
      margin: 8px 0;
      font-size: 0.95rem;
    }

    .back-btn {
      display: inline-block;
      padding: 12px 20px;
      background: #4a47a3;
      color: white;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .back-btn:hover {
      background: #35328a;
      transform: scale(1.05);
    }

    /* -------- Confetti -------- */
    .confetti {
      position: absolute;
      width: 10px;
      height: 10px;
      background-color: #ff4081;
      opacity: 0.9;
      animation: confettiFall 3s linear infinite;
    }

    @keyframes confettiFall {
      0% { transform: translateY(0) rotate(0deg); opacity: 1; }
      100% { transform: translateY(600px) rotate(720deg); opacity: 0; }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="success-container">
    <h1> Registration Successful! </h1>
    <p>Your project has been successfully registered. Here are your details:</p>

    <div class="info-box">
      <p><strong>Team Leader:</strong> <?php echo htmlspecialchars($leader); ?></p>
      <p><strong>Contact:</strong> <?php echo htmlspecialchars($contact); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
      <p><strong>Team Members:</strong> <?php echo htmlspecialchars("$member1, $member2, $member3, $member4"); ?></p>
      <p><strong>Project Title:</strong> <?php echo htmlspecialchars($project); ?></p>
      <p><strong>Category:</strong> <?php echo htmlspecialchars($category); ?></p>
      <p><strong>Duration:</strong> <?php echo htmlspecialchars($duration); ?></p>
      <p><strong>Abstract:</strong> <?php echo htmlspecialchars($abstract); ?></p>
    </div>

    <a href="index.html" class="back-btn">⬅ Go Back</a>
  </div>

  <!-- Confetti Animation -->
  <script>
    const colors = ['#f48fb1', '#ce93d8', '#81d4fa', '#ffcc80', '#a5d6a7'];
    for (let i = 0; i < 60; i++) {
      const confetti = document.createElement('div');
      confetti.classList.add('confetti');
      confetti.style.left = Math.random() * 100 + 'vw';
      confetti.style.top = Math.random() * -50 + 'px';
      confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
      confetti.style.animationDuration = 2 + Math.random() * 3 + 's';
      confetti.style.width = confetti.style.height = Math.random() * 8 + 5 + 'px';
      document.body.appendChild(confetti);
    }
  </script>
</body>
</html>
