<!DOCTYPE HTML>
<html>
<head>
<title>TEST</title>
<style>
*{ margin:0; padding:0; font-family:sans-serif; box-sizing:border-box; }
.container{ width:100%; height:100vh; display:flex; align-items:center; justify-content:center; background:linear-gradient(45deg,red,yellow); }
.calendar{ width:300px; height:250px; background:#fff;display:flex; align-items:center;border-radius:10px; }
.left{width:40%; height: 100%; display: flex; justify-content: center;font-size:24px; align-items: center; flex-direction: column;}
.right{width:60%; height: 100%; display: flex; justify-content: center;font-size:24px;align-items: center;background:#f4351e;
border-top-right-radius:10px; border-bottom-right-radius:10px; flex-direction: column;}
#date{font-size:70px; line-height:70px}

</style>   
</head>

<body>
<div class="container">
  <div class="calendar">
      <div class="left">
        <p id="date">23</p>
        <p id="day">Saturday</p>
      </div>
      <div class="right">
        <p id="month">March</p>
        <p id="year">2024</p>
      </div>
         
  </div>

</div>

<script>
  const date= document.getElementById('date');
  const day= document.getElementById('day');
  const month= document.getElementById('month');
  const year= document.getElementById('year');

  var weekDays= ["Sunday","MOnday","tuesday","wednesday","thursday","Friday","saturday"];

  var allMonths= ['January','February','March'];

  const today= new Date();
  //console.log(today);
  date.innerHTML=  today.getDate();
  day.innerHTML= weekDays[today.getDay()];
  month.innerHTML= allMonths[today.getMonth()];
  year.innerHTML= today.getFullYear();

</script>   
</body>   
</html>












