public class persona{
	private String nombre;
	private int edad;
	private int peso;

	void persona (String n, int e, int p){
		this.nombre=n;
		this.edad=e;
		this.peso=p;
	}

	void hablar(){
		System.out.println("Mi nombre es Oswaldo");
	}
	void caminar(){
	}
	void saltar(){
	}
	void pensar(){
		System.out.println("--->Soy bajo<---");
	}


	/*public persona(String nuevoNombre){
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
	}*/

	public static void main (String[] args){
		persona Persona1=new persona();
		new persona().hablar();
		//new persona().pensar();
	}
}
