var operand = null,
    opSelected = false,
    op = null;
    dotSelected = false;

 ac.addEventListener('click', clicked_ac, false);
 btnpi.addEventListener('click', pi, false);
 delenie.addEventListener('click', operationSelected, false);
 dot.addEventListener('click', dotSelect, false);
 percent.addEventListener('click', prc, false);
 res.addEventListener('click', result, false);
 plus.addEventListener('click', operationSelected, false);
 minus.addEventListener('click', operationSelected, false);
 mul.addEventListener('click', operationSelected, false);
 btn0.addEventListener('click', fn, false);
 btn1.addEventListener('click', fn, false);
 btn2.addEventListener('click', fn, false);
 btn3.addEventListener('click', fn, false);
 btn4.addEventListener('click', fn, false);
 btn5.addEventListener('click', fn, false);
 btn6.addEventListener('click', fn, false);
 btn7.addEventListener('click', fn, false);
 btn8.addEventListener('click', fn, false);
 btn9.addEventListener('click', fn, false);

function pi() {
  display.value = 3.141592653589792;
}

 function fn (e){
  if ((display.value === '0')||(opSelected))
   {
       display.value = e.target.textContent;
       opSelected = false;
   }
   else if(operand !== null)
   {
       operand = null;
       display.value = e.target.textContent;
   }
   else
   {
       display.value += e.target.textContent;
   }
 }

function operationSelected(e) {
  op = e.target.textContent;
  opSelected = true;
  operand = parseFloat(display.value);
  dotSelected = false;
  console.log(op);
}

function clicked_ac() {
  opSelected = false;
  dotSelected = false;
  display.value = '0';
  operand = null;
}

function clicked_c() {
  dotSelected = false;
  display.value = '0';
}
function dotSelect(e) {
  if (!dotSelected)
  {
    dotSelected = true;
    display.value += e.target.textContent;
  }
}
function prc() {
  if ((operand !== null)&&(op!==null)){
      display.value = operand / 100 * parseFloat(display.value);
      dotSelected = false;
  }else{display.value = 0;}
}

function result() {
  switch(op) {
    case '+':
      display.value = operand + parseFloat(display.value);
      break;
      case '-':
        display.value = operand - display.value;
        break;
      case '*':
        display.value = operand * display.value;
        break;
      case '/':
        display.value = operand / display.value;
        break;
  }
  operand = display.value;
  op = null;
  dotSelected = false;
  console.log("operand1: " + operand);
  console.log("op: " + op);
  console.log("dotSelected: " + dotSelected);
}
