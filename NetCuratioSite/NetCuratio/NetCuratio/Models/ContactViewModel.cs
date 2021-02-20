using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace NetCuratio.Models
{
    public class ContactViewModel
    {
        [Required(ErrorMessage = "The Email field is required.")]
        [RegularExpression(@"^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-‌​]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$", ErrorMessage = "Please enter a valid Email.")]
        [DisplayName("Your Email")]
        public string SendersEmail { get; set; }

        [Required(ErrorMessage = "The Subject field is required.")]
        [DisplayName("Subject")]
        public string Subject { get; set; }

        [Required(ErrorMessage = "The Message field is required.")]
        [DisplayName("Message")]
        public string Message { get; set; }

        [Required(ErrorMessage = "The Name field is required.")]
        [DisplayName("Your Name")]
        public string SendersName { get; set; }
    }
}