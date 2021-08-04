function InsertarBuses(Movil,Operador,Modelo,Carroceria,Marca,Tipologia,action){
  this.action = action;
  this.Movil = Movil;
  this.Operador = Operador;
  this.Modelo = Modelo;
  this.Carroceria = Carroceria;
  this.Marca = Marca;
  this.Tipologia = Tipologia;
}

InsertarBuses.prototype.AddBus = function(){
  //console.log(this.Movil + " " + this.Operador + " " + this.Modelo + " " + this.Carroceria + " " + this.Marca + " " + this.Tipologia);
  $.ajax({
    type: "POST",
    url: this.action,
    data: {Movil: this.Movil, Operador: this.Operador, Modelo: this.Modelo, Carroceria: this.Carroceria, Marca: this.Marca, Tipologia: this.Tipologia},
    success: function (response){
      if (response == 1) {
        alert("Bus Agregado");
      }else{
        alert("Algo anda mal");
      }
    }
  });
}


function EditarBuses(Movil,Operador,Modelo,Carroceria,Marca,Tipologia,action){
  this.action = action;
  this.Movil = Movil;
  this.Operador = Operador;
  this.Modelo = Modelo;
  this.Carroceria = Carroceria;
  this.Marca = Marca;
  this.Tipologia = Tipologia;
}

EditarBuses.prototype.editBus = function(){
$.ajax({
    type: "POST",
    url:this.action,
    data: {Movil: this.Movil, Operador: this.Operador, Modelo: this.Modelo, Carroceria: this.Carroceria, Marca: this.Marca, Tipologia: this.Tipologia},
    success: function (response){
    if (response == 1){
        alert("Bus Actualizado");
    }else{
        alert("Error al actualizar el bus");
    }
   }
    });    
}

InsertarBuses.prototype.searchBus = function(){
  $.post(this.action,{movilSearch: this.Movil}, function(response) {
          $("#resultSearch").html(response);
  });
  $(document).ready(function(){
    $('#Editar').on('change',function(){
      if (this.button) {
       $("#Ver Bus").show();
      } else {
       $("#Editar").hide();
      }
    })
  });
}
