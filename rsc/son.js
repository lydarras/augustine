function playpause(){
 
var lui=document.getElementById('son')
 
if(lui.paused==true){
	lui.play()
	}
else{
	lui.pause()
	lui.currentTime=0
	}
}
