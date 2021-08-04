  var getData = function(){
  var Movil = document.getElementById("Movil").value;
  var Operador = document.getElementById("Operador").value;
  var Carroceria = document.getElementById("Carroceria").value;
  var Modelo = document.getElementById("Modelo").value;
  var Marca = document.getElementById("Marca").value;
  var Tipologia = document.getElementById("Tipologia").value;

  //console.log(this.Movil + " " + this.Operador + " " + this.Modelo + " " + this.Carroceria + " " + this.Marca + " " + this.Tipologia);
  var IB = new InsertarBuses(Movil, Operador, Carroceria, Modelo, Marca, Tipologia, "insert.php");
  IB.AddBus();
  document.getElementById("Movil").value="";
  document.getElementById("Operador").value="";
  document.getElementById("Carroceria").value="";
  document.getElementById("Modelo").value="";
  document.getElementById("Marca").value="";
  document.getElementById("Tipologia").value="";
  searchBus();
  //.focus()
  }

  var editData = function(){
    var Movil = document.getElementById("Movil").value;
    var Operador = document.getElementById("Operador").value;
    var Carroceria = document.getElementById("Ca rroceria").value;
    var Modelo = document.getElementById("EMO").value;
    var Marca = document.getElementById("EMAR").value;
    var Tipologia = document.getElementById("ET").value;
  
    var EB = new EditarBuses(Movil, Operador, Carroceria, Modelo, Marca, Tipologia,"edit.php");
    EB.editBus();
    document.getElementById("EM").value="";
    document.getElementById("EO").value="";
    document.getElementById("EMO").value="";
    document.getElementById("EMAR").value="";
    document.getElementById("ECA").value="";
    document.getElementById("ET").value="";
  }
  
    

var searchBus = function(){
  var textSearch = $("input#search").val();
  var bus = new InsertarBuses(textSearch, "", "consult.php");
  bus.searchBus();
}
