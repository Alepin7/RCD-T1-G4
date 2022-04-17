/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/WebServices/WebService.java to edit this template
 */
package ws;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

import Clases.Validar_DV;

/**
 *
 * @author MV-PC
 */
@WebService(serviceName = "Funciones")
public class Funciones {

	/**
	 * Web service operation
	 */
	@WebMethod(operationName = "recibir_rut")
	public String recibir_rut(@WebParam(name = "rut") String rut) {
		//TODO write your implementation code here:
		
		Validar_DV Validacion;
		
		Validacion = new Validar_DV(rut);
		
		if( Validacion.validacion_concreta() == true){
			return "El Digito Verificador es Valido !";
		}
		else{
			return "El Digito Verificador es Invalido !";
		}
			
	}
	
}
