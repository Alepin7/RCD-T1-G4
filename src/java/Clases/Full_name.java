/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Clases;
import java.util.ArrayList;

/**
 *
 * @author Martín
 */
public class Full_name {
    String full_name;
    ArrayList<String> name = new ArrayList<String>();
    String last_name_p;
    String las_name_m;
    
    
    public Full_name(String full_name)
    {
        this.full_name = full_name;
    
    }
    
    public void Split_name()
    {
        String[] aux;
        aux = this.full_name.split(" ");
        this.las_name_m = aux[aux.length-1];
        this.last_name_p = aux[aux.length-2];
        for (int i =0;i<aux.length-2;i++)
        {
            this.name.add(aux[i]);
        }
        
   
    
    }
    
    public String Print_name()
    {
        String fin = "";
        fin = fin+" Nombres \n";
        for(int i = 0;i<this.name.size();i++)
        {
            fin=fin+(String.valueOf(this.name.get(i))+"\n");
        }
        fin = fin + "\n";
        fin = fin + "Apellidos \n";
        fin = fin + "Apellido Paterno: "+this.last_name_p+"\n";
        fin = fin + "Apellido materno: "+this.las_name_m+"\n";
        return fin;

        
    }
}