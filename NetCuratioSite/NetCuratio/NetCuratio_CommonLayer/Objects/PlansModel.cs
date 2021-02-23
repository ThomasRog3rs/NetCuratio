using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_CommonLayer.Objects
{
    public class PlansModel
    {
        public static Plan BasicPlan = new Plan()
        {
            Price = "£19.99",
            Name = "Basic",
            Features = new List<string>() {
                "No upfront costs",
                "Bespoke website",
                "Free hosting",
                "20 monthly support credits",
                "24/7 security monitoring",
                "10GB storage",
                "20GB bandwith"
            }
        };

        public static Plan StarPlan = new Plan()
        {
            Price = "£39.99",
            Name = "Star",
            Features = new List<string>() {
                "No upfront costs", 
                "Bespoke website", 
                "Free hosting", 
                "100 monthly support credits", 
                "24/7 security monitoring", 
                "20GB storage", 
                "Unlimited bandwith"
            }
        };

        public static Plan VipPlan = new Plan()
        {
            Price = "£29.99",
            Name = "Vip",
            Features = new List<string>() {
                "No upfront costs",
                "Bespoke website",
                "Free hosting",
                "40 monthly support credits",
                "24/7 security monitoring",
                "15GB storage",
                "100GB bandwith"
            }
        };

        public static Plan GetPlan(string packageCode)
        {
            packageCode = packageCode.ToLower();
            switch (packageCode)
            {
                case "basic":
                    return BasicPlan;
                case "star":
                    return StarPlan;
                case "vip":
                    return VipPlan;
                default:
                    return null;
            }
        }
        public static List<Plan> GetAllPlans()
        {
            return new List<Plan>() { BasicPlan, StarPlan, VipPlan};
        }
    }

    public class Plan
    {
        public string Price { get; set; }
        public string Name { get; set; }
        public List<string> Features { get; set; }
    }
}
