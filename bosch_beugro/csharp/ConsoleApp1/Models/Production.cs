using System;
using System.Collections.Generic;

#nullable disable

namespace ConsoleApp1.Models
{
    public partial class Production
    {
        public int Id { get; set; }
        public int PcbId { get; set; }
        public int? Quantity { get; set; }
        public DateTime? StartDate { get; set; }
        public DateTime? EndDate { get; set; }



        //-------------------------
        public Production(int id, int pcbId, int? quantity, DateTime? startDate, DateTime? endDate)
        {
            Id = id;
            PcbId = pcbId;
            Quantity = quantity;
            StartDate = startDate;
            EndDate = endDate;
        }

        public Production(string datastring)
        {
            string[] splitVector = datastring.Split('|');
            PcbId = int.Parse(splitVector[0]);
            Quantity = int.Parse(splitVector[1]);
            StartDate = DateTime.Parse(splitVector[2]);
            EndDate = DateTime.Parse(splitVector[3]);
        }
    }
}
