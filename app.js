document.addEventListener("DOMContentLoaded", e=>{
	    const form = document.querySelector("#frmConversores");
	    form.addEventListener("submit", event=>{
	        event.preventDefault();
	  
	        let de = document.querySelector("#cboDe").value,
	            a = document.querySelector("#cboA").value,
	            cantidad = document.querySelector("#txtCantidadConversor").value,
	            opcion = document.getElementById('cboConvertir');
	  
	        let monedas = {
	            "dolar":1,
	            "colones(sv)":8.75,
	            "yenes":111.27,
	            "lempira":24.36,
	            "rupia":69.75,
	            "Bitcoin":0.00026,
	            "peso(mx)":19.36,
	    
	            },

	

	            almacenamiento = {
	            "megabyte": 1,
	            "bit":8.388608,
	            "byte":1.048576,
	            "kilobyte":1024,
	            "gigabyte":0.0009765625,
	            "terabyte":0.00000095367431660625},
	

	            longitudes = {
	            "metro": 1,
	            "cm": 100,
	            "pulgada": 39.3701,
	            "pie":3.28084,
	            "varas":1.1963081929167,
	            "yardas":1.09361,	            
	            "km": 0.001,
	            "milla": 0.000621371};
	               
	        let $res = document.querySelector("#lblRespuesta");
	        if(opcion.value == "moneda"){
	          $res.innerHTML = `Respuesta: ${ (monedas[a]/monedas[de]*cantidad).toFixed(2) }`;
	        
	        } else if(opcion.value == "almacenamiento"){
	          $res.innerHTML = `Respuesta: ${ (almacenamiento[a]/almacenamiento[de]*cantidad) }`;
	        } else if(opcion.value == "longitud"){
	            $res.innerHTML = `Respuesta: ${ (longitudes[a]/longitudes[de]*cantidad).toFixed(2) }`;
	        };
	    });
	  });
	  
	  //llenar los select box 
	  function elegir_opcion() {
	    let opcion = document.getElementById('cboConvertir'),
	    de1 = document.getElementById('cboDe'),
	    a1 = document.getElementById('cboA');
	    //limpia antes de actualizar
	    de1.value="";
	    a1.value="";
	    de1.innerHTML="";
	    a1.innerHTML="";
	  
	    if(opcion.value == "moneda"){
	      var  array = ["dolar!Dolar","colones(sv)!Colones(SV)","yenes!Yenes","lempira!Lempira","rupia!Rupia","Bitcoin!Bitcoin","peso(mx)!Peso(MX)"]; 
	    } else if(opcion.value == "longitud"){
	      var array = ["metro!Metro","cm!Cm","pulgada!Pulgada","pie!Pie","varas!Varas","yardas! Yardas","km! Km","milla! Milla"];
	    } else if(opcion.value == "almacenamiento"){
	      var array = ["megabyte!Megabyte","bit!Bit","byte!Byte","kilobyte!Kilobyte","gigabyte! Gigabyte","terabyte!Terabyte"];
	   
	    };
	  
	    for(var i=0;i<array.length;i++){ 
	      var repair = array[i].split("!");
	      var newop = document.createElement("option");
	      newop.value = repair[0]
	      newop.innerHTML = repair[1];
	      de1.options.add(newop);
	    };
	    for(var i=0;i<array.length;i++){ 
	      var repair = array[i].split("!");
	      var newop = document.createElement("option");
	      newop.value = repair[0]
	      newop.innerHTML = repair[1];
	      a1.options.add(newop);
	    };
	   }

