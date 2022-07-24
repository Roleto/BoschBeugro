using ConsoleApp1.Models;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {
            string conString = @"server=localhost;user id=root;database=cs_beugro;";
            SqlConnection conn = new SqlConnection(conString);
            conn.Open();
            SqlCommand cmd = new SqlCommand("SELECT * FROM products", conn);
            SqlDataReader reader = cmd.ExecuteReader();
            while (reader.Read())
            {
                Console.WriteLine(reader["id"].ToString() + "|" + reader["pcb"].ToString());
            }
            reader.Close();
            conn.Close();

            //Scaffold-DbContext "CONNSTRING" Microsoft.EntityFrameworkCore.SqlServer -OutputDir Models
            //BoschdbContext ctx = new BoschdbContext();
            //List<Product> products = new List<Product>();
            //foreach (Product item in ctx.Products)
            //{
            //    products.Add(item);
            //}
            //foreach (Product item in products)
            //{
            //    Console.WriteLine(item.Id +"|" + item.Pcb);
            //}
            //Console.ReadLine();
        }
    }
}
