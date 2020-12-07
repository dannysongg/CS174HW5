<!doctype html>
<html>

<body>

  <style>
    #iframe1{
      width: 400px;
      height: 100px;
      position: absolute;
      top: 5px;
      left: -14px;
      opacity: 0.5;
      z-index: 1;
    }
    #iframe2{
      width: 400px;
      height: 100px;
      position: absolute;
      top: 5px;
      left: 0 px;
      opacity: 0.5;
      z-index: 1;
    }
  </style>

  <div>Click to get rich now:</div>

  <iframe id="iframe1" src="attack_2.php"></iframe>
  <!-- <iframe id="iframe2" src="fix_2.php"></iframe> -->

  <button onclick="alert('Clicked on correct button')">Unprotected!</button>
  <button onclick="alert('Clicked on correct button')">Protected!</button>

</body>
</html>
