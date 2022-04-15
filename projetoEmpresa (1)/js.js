function cadastro(){
    document.getElementById("menu").style.display = 'none';
    document.getElementById("cadastro").style.display = 'block';
    document.getElementById("salario").style.display = 'none';
    document.getElementById("mostra").style.display = 'none';


    


}
function mostrar(){
    document.getElementById("menu").style.display = 'none';
    document.getElementById("mostrar").style.display = 'block';
    document.getElementById("mostra").style.display = 'none';

}
function calcularSalario(){
    document.getElementById("salario").style.display = 'block';
    calcularSalario();
    

}
function aumento(){
    document.getElementById("menu").style.display = 'none';
    document.getElementById("aumentosal").style.display = 'block';
    document.getElementById("salario").style.display = 'none';
    document.getElementById("mostra").style.display = 'none';
    



    

}
function fecharCad(){
    document.getElementById("menu").style.display = 'block';
    document.getElementById("cadastro").style.display = 'none';
    document.getElementById("salario").style.display = 'none';
    document.getElementById("mostra").style.display = 'block';


    

}
function fecharAum(){
    document.getElementById("menu").style.display = 'block';
    document.getElementById("aumentosal").style.display = 'none';
    document.getElementById("salario").style.display = 'none';
    document.getElementById("mostra").style.display = 'block';

}
function fecharmostra(){
    document.getElementById("mostrar").style.display = 'none';
    document.getElementById("salario").style.display = 'none';
    document.getElementById("menu").style.display = 'block';
    document.getElementById("mostra").style.display = 'block';

    
    



}