/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package facturacion;
import java.sql.*;

public class conexion {

   
   
   
   private final String url;
    PreparedStatement psPrepararSentencia;
    Connection con = null;
   

    
    public conexion() {
        this.url = "jdbc:mysql://localhost/sistemaVenta";
     try{  
         
         Class.forName("com.mysql.jdbc.Driver");
         
         con = DriverManager.getConnection(url,"root","juan");
         if (con!=null){
            System.out.println("Conexión a base de datos sistemaVenta. listo");
         }
      }
         catch(SQLException e)
         {
         System.out.println(e);
         }
         catch(ClassNotFoundException e)
         {
          System.out.println(e);
         }
    }
     /**
     *
     * @return
     */
    public Connection conectado(){
      return con;
}

    public void desconectar(){
      con = null;
      System.out.println("conexion terminada");

    } 

    
}
