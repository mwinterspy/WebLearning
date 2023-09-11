var hora = "12:00";
var minutos = hora.split(":")
if(Number(hora.split(":",1)%12>1)){
    console.log("São",Number(hora.split(":",1)%12) +":"+ minutos[1]+" p.m.");
}
else{
    console.log("São",hora,"a.m.")
}