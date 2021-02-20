using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_CommonLayer.Objects
{
    public class PlansModel
    {
        public List<string> BasicPlan = new List<string>() { "No upfront costs", "Bespoke website", "Free hosting", "20 monthly support credits", "24/7 security monitoring", "10GB storage", "20GB bandwith" };
        public List<string> StarPlan = new List<string>() { "No upfront costs", "Bespoke website", "Free hosting", "100 monthly support credits", "24/7 security monitoring", "20GB storage", "Unlimited bandwith" };
        public List<string> VipPlan = new List<string>() { "No upfront costs", "Bespoke website", "Free hosting", "40 monthly support credits", "24/7 security monitoring", "15GB storage", "100GB bandwith" };

    }
}
