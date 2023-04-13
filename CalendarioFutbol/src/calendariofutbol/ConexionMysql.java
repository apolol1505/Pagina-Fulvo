package calendariofutbol;

import java.sql.*;

/**
 *
 * @author Asus
 */
public class ConexionMysql {

    private Connection cn;

    public Connection conectar() {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            cn = DriverManager.getConnection("jdbc:mysql://localhost:3306/bdfutbol", "root", "1040349990san");
            System.out.println("CONECTADO");
        } catch (SQLException e) {
            System.out.println("ERROR" + e);
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        } catch (Exception e) {
            System.out.println("ERROR" + e);
        }
        return cn;
    }

}
