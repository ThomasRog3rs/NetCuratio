﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace NetCuratio.Models
{
    public class EmailSignUpModel
    {
        [Required(ErrorMessage = "The e-mail field is required.")]
        [RegularExpression(@"^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-‌​]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$", ErrorMessage = "Please enter a valid email.")]
        [DisplayName("Enter your Email")]
        public string Email { get; set; }
    }
}