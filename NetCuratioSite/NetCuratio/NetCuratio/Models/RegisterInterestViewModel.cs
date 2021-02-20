using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace NetCuratio.Models
{
    public class RegisterInterestViewModel
    {
        public string SelectedPackage { get; set; }
        public List<string> PackageDetails { get; set; }

        public string PlanPrice { get; set; }

        [Required(ErrorMessage = "The name field is required.")]
        [DisplayName("Your Name")]
        public string Name { get; set; }

        [Required(ErrorMessage = "The Email field is required.")]
        [RegularExpression(@"^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-‌​]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$", ErrorMessage = "Please enter a valid email.")]
        [DisplayName("Your Email")]
        public string Email { get; set; }

        [DisplayName("Your Phone Number")]
        public string PhoneNumber { get; set; }

        [Required(ErrorMessage = "Please let us know what type of website you need.")]
        [DisplayName("What type of website do you need?")]
        public string WebsiteType { get; set; }
        [JsonIgnore]
        public List<SelectListItem> WebsiteTypeLookUp { get; set; } = WebsiteTypeSelectList();


        public static List<SelectListItem> WebsiteTypeSelectList()
        {
            var retrunList = new List<SelectListItem>();
            retrunList.Add(new SelectListItem { Text = null, Value = null });
            retrunList.Add(new SelectListItem { Text = "Blog", Value="Blog" });
            retrunList.Add(new SelectListItem { Text = "Bookings (e.g. events, gigs, hairdressers)", Value = "Bookings" });
            retrunList.Add(new SelectListItem { Text = "Company Infomation", Value = "Company Infomation" });
            retrunList.Add(new SelectListItem { Text = "E-commerce", Value = "E-commerce" });
            retrunList.Add(new SelectListItem { Text = "News", Value = "News" });
            retrunList.Add(new SelectListItem { Text = "Portfolio/Resume", Value = "Portfolio/Resume" });
            retrunList.Add(new SelectListItem { Text = "Praise, testimonials, and recommendations, press mentions", Value = "Testimonials" });
            retrunList.Add(new SelectListItem { Text = "Other", Value = "Other" });
            return retrunList;

        }


    }
}