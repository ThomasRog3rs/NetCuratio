using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Mail;
using System.Web;

namespace NetCuratio.Helpers
{
    public static class Validation
    {
        public static bool IsValidEmail(string emailAddress)
        {
            if (string.IsNullOrEmpty(emailAddress))
            {
                return false;
            }
            try
            {
                MailAddress m = new MailAddress(emailAddress);

                return true;
            }
            catch (FormatException)
            {
                return false;
            }
        }
    }
}