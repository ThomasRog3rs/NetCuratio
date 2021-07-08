using NetCuratio_CommonLayer.Objects;
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
        public Plan PackageDetails { get; set; }

        //[Required(ErrorMessage = "The Name field is required.")]
        [DisplayName("Your Name")]
        public string Name { get; set; }

        [Required(ErrorMessage = "The Email field is required.")]
        [RegularExpression(@"^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-‌​]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$", ErrorMessage = "Please enter a valid email.")]
        [DisplayName("Your Email")]
        public string Email { get; set; }

        [RegularExpression(@"^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$", ErrorMessage = "Please enter a valid phone number.")]
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
            retrunList.Add(new SelectListItem { Text = "Blog", Value="Blog" });
            retrunList.Add(new SelectListItem { Text = "Bookings (e.g. events, gigs, hairdressers)", Value = "Bookings" });
            retrunList.Add(new SelectListItem { Text = "Company Infomation", Value = "Company Infomation" });
            retrunList.Add(new SelectListItem { Text = "E-commerce", Value = "E-commerce" });
            retrunList.Add(new SelectListItem { Text = "News", Value = "News" });
            retrunList.Add(new SelectListItem { Text = "Portfolio/Resume", Value = "Portfolio/Resume" });
            retrunList.Add(new SelectListItem { Text = "Praise, testimonials, recommendations, press mentions", Value = "Testimonials" });
            retrunList.Add(new SelectListItem { Text = "Other", Value = "Other" });
            return retrunList;

        }


    }
}