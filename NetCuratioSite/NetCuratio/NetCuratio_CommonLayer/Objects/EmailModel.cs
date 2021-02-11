using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_CommonLayer.Objects
{
    public class EmailModel
    {
        public List<string> To { get; set; } = new List<string>();
        public string From { get; set; }
        public string Subject { get; set; }
        public string Body { get; set; }

    }
}
