using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

public partial class _Default : System.Web.UI.Page
{

    protected void Page_Load(object sender, EventArgs e)
    {

        SqlConnection con = new SqlConnection();
        con.ConnectionString = "server=(local);user=usuario324;pwd=123456;database=Examen";
        SqlCommand cm = new SqlCommand("select * from dat",con);
      
        DataTable dt = new DataTable();
        SqlDataAdapter da =new SqlDataAdapter(cm);
        da.Fill(dt);
        GridView1.DataSource = dt;
        GridView1.DataBind();
        
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
    }
    protected void Button2_Click(object sender, EventArgs e)
    {
    }
    protected void GridView1_SelectedIndexChanged(object sender, EventArgs e)
    {
        
    }
}