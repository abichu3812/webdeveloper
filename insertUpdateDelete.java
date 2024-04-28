import java.sql.Connection;
import java.sql.Statement;
import project.connectionProvider;
import javax.swing.JOptionPane;

public class insertUpdateDelete {
    public static void setData(String Query ,String msg) {
        Connection con = null;
        Statement st = null;
        
        try {
            
          con = connectionProvider.getCon();
            st=con.createStatement() ; 
           st.executeUpdate(Query);
           if (!msg.equals("")) {
            JOptionPane.showMessageDialog(null, msg);
            
           }
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, e);
        }
        finally
        {
            try
            {
                con.close();
                st.close();
            }
            catch(Exception e)
            {
                
            }
        }
       
    }
    
}
