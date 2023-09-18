var menu = ["1) Adicionar despesa","2) Calcular total"
            &"4) Encontrar despesa mais alta","5) Ver lista de despesas","0) Sair" ];

var optmenu = null;
var despesas = [];
var tot = 0;
var med = null;
var alta = 0;
do {

    function add() {
        despesas.push(prompt("Digite o valor da despesa: "));
    }

    function total(){
        
        for(var i = 0; i<despesas.length; i++ ){
            tot = Number(tot)+Number(despesas[i]);
        }
        
    }

    function media(){
        for(var i = 0; i<despesas.length; i++ ){
            tot = Number(tot)+Number(despesas[i]);
        }
        med = Number(tot)/Number(despesas.length);
    }

    function maior(){
        for (var i = 0; i<despesas.length; i++){
            if(despesas[i]>alta){
                alta = despesas[i];
            }
        }
    }

    function vertudo(){
        for(var i =0; i<despesas.length; i++){
            console.log(despesas[i])
        }
    }
    

    

    if (optmenu == 1) {
        add();
    }


    if (optmenu == 2) {
        total();
        console.log("Seu total é de:", tot);
    }

    if(optmenu==3){
        media();
        console.log("Sua média de gastos é:", med)
    }

    if (optmenu==4){
        maior()
        console.log("Sua despesa mais alta é de:", Number(alta));
    }
    if(optmenu==5){
        vertudo();
    }


}
while (optmenu != 0)
console.log("Programa finalizado");