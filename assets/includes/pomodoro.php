<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../../assets/css/pomodoro.css">
  <link rel="stylesheet" href="../../assets/css/dashboard.css">
  

</head>

<body>
  <h1 class="pomodoro-title">📚Reddo Pomodoro Time ⏲️</h1>

  <figure class="clock">
    <div class="mins">0</div>
    <div>:</div>
    <div class="secs">00</div>
    <audio src="http://soundbible.com/mp3/service-bell_daniel_simion.mp3"></audio>
    <svg class="progress-ring" height="120" width="120">
      <circle class="progress-ring__circle" stroke-width="8" fill="transparent" r="50" cx="60" cy="60" />
    </svg>
  </figure>

  <div class="btn-group">
    <button class="start">start focus</button>
    <button class="reset">reset</button>
    <button class="pause">pause</button>
  </div>

  <form action=".">
    <label for="focusTime">Focus Time (dalam menit)</label>
    <input type="number" value="1" id="focusTime" />
    <label for="breakTime">Break Time</label>
    <input type="number" value="1" id="breakTime" />
    <button type="submit">Simpan settingan</button>
  </form>

  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/timer.js"></script>
  <script src="../../assets/js/progress.js"></script>
</body>

</html>