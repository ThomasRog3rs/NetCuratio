﻿using System;
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
            Price = "£0.00",
            Name = "Demo",
            Features = new List<string>() {
                "No costs",
                "Select a pre-made theme",
                "Free hosting",
                "Docs to help you build",
                "No Risk",
                "Our latest CMS",
            }
        };

        public static Plan StarPlan = new Plan()
        {
            Price = "£29.99",
            Name = "Star",
            Features = new List<string>() {
                "No upfront costs", 
                "Bespoke website", 
                "Free hosting", 
                "100 monthly support credits", 
                "24/7 security monitoring", 
                "20GB storage", 
                "Unlimited bandwidth"
            }
        };

        public static Plan VipPlan = new Plan()
        {
            Price = "£19.99",
            Name = "Vip",
            Features = new List<string>() {
                "No upfront costs",
                "Bespoke website",
                "Free hosting",
                "40 monthly support credits",
                "24/7 security monitoring",
                "15GB storage",
                "100GB bandwidth"
            }
        };

        public static Plan GetPlan(string packageCode)
        {
            packageCode = packageCode.ToLower();
            switch (packageCode)
            {
                case "demo":
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
            return new List<Plan>() { VipPlan, BasicPlan, StarPlan };
        }
    }

    public class Plan
    {
        public string Price { get; set; }
        public string Name { get; set; }
        public List<string> Features { get; set; }
    }
}
