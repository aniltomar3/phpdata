<html>
<head>
<style>
*{padding:0; margin:0; box-sizing: border-box;}
body{ font-size:1rem; font-family:sans-serif; }
.container{ width:1600px; margin:auto; }
.subcontainer{width:85%; margin: auto;}
#cookies{ width:100%; position:fixed; bottom:0;color:#fff; background-color:rgba(0,0,0,0.7); z-index:1 }
.cookies{min-height: 70px; display: flex;justify-content: space-between; align-items: center;}
.cookies a{ color:yellow; font-weight:500; text-decoration:none; }
#cookies-btn{ border-radius: 5px; padding: 8px 12px; font-size:1rem; font-family: inherit; cursor: pointer; border:3px solid white; background-color: black; color:#fff;}
</style>
</head>
<body>
<div id="cookies">
	<div class="container">
	  <div class="subcontainer">
        <div class="cookies">
          <p> This website uses cookies to ensure you get best experience on our website. <a href="">More Info</a></p>
          <button id="cookies-btn">That's fine</button>
        </div>	
	  </div>	 
	</div>
</div>	

<script>
setCookie= (cName,cValue,expDays)=>{
  let date= new Date();
  date.setTime(date.getTime()+ (expDays*24*60*60*1000));
  const expires= "expires="+date.toUTCString();
  document.cookie= cName + "=" + cValue +";" + expires + ";path=/";
}

// getCookie= (cName)=>{
// 	const name= cName + "=";
// 	const cDecoded= decodeURIComponent(document.cookie);
// 	const cArr= cDecoded.split(";");
// 	let value;
// 	cArr.forEach( (val)=>{  console.log(val); if(val.indexOf(name)===0) { value= val.substring(name.length,val.length);   }    })
// 	console.log(value);
// 	return value;
// }

getCookie= (cName)=>{
	let cookies= document.cookie.split(';');
	let res;
	for(let i=1; i<cookies.length;i++){
		res+=i+'-'+ cookies[i-1]+"<br/>";
	}
	setCookie("cookie",true,-30);
}

getCookie("cookie");


 document.querySelector("#cookies-btn").addEventListener("click",()=>{
 document.querySelector("#cookies").style.display= "none";
 	setCookie("cookie",true,30);
 });


 cookieMessage= ()=>{
 	if(!getCookie){
 		document.querySelector("#cookies").style.display= "block";
 	}
 }

 window.addEventListener("load",cookieMessage);
</script>	
</body>
</html>
