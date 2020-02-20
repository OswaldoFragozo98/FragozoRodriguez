package Persona;

public class Persona{
	private String nombre;
	private int edad;
	private int peso;

	public Persona(String nuevoNombre){
		nombre = nuevoNombre;
	}
	public int getEdad(){
		return edad;
	}

	public void setEdad(int nuevaEdad){
		edad = nuevaEdad;
	}
	public String getNombre(){
		return nombre;
	}
}

