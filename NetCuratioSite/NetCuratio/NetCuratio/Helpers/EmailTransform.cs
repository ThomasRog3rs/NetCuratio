using NetCuratio.Models;
using NetCuratio_CommonLayer.Objects;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace NetCuratio.Helpers
{
    public class EmailTransform
    {
        public EmailModel TranformContactMessage(ContactViewModel contact)
        {
            var email = new EmailModel();

            email.From = "netcuratio@gmail.com";
            email.To.Add("matthewajc@outlook.com");
            email.To.Add("thomasrogerswebdev@gmail.com");
            email.To.Add("tom.rogers@netcuratio.com");


            email.Subject = contact.Subject;

            email.Body = "<h1>Net Curatio Contact Message</h1><br/>";
            email.Body += $"<p>{contact.Message}</p><br/>";
            email.Body += $"<p>From: {contact.SendersName}</p><br/>";
            email.Body += $"<p>Sender e-mail: {contact.SendersEmail}</p><br/>";

            return email;
        }

        public EmailModel TransformRegisterInterest(RegisterInterestViewModel contact)
        {
            var email = new EmailModel();

            email.From = "netcuratio@gmail.com";
            email.To.Add("matthewajc@outlook.com");
            email.To.Add("thomasrogerswebdev@gmail.com");
            email.To.Add("tom.rogers@netcuratio.com");

            email.Subject = $"Customer registed for {contact.SelectedPackage} Plan";

            email.Body = $"<h1>Net Curatio Customer Registed - {contact.SelectedPackage} Plan</h1><br/>";
            email.Body += $"<p>Package registed for: {contact.SelectedPackage} ({contact.PackageDetails.Price}/month)</p><br/>";
            email.Body += $"<p>From: {contact.Name}</p><br/>";
            email.Body += $"<p>Sender Email: {contact.Email}</p><br/>";
            email.Body += $"<p>Sender Phone: {contact.PhoneNumber}</p><br/>";
            email.Body += $"<p>Website customer needs: {contact.WebsiteType}</p><br/>";


            return email;
        }

        public EmailModel TransformEmailSignUp(EmailSignUpModel model)
        {
            var email = new EmailModel();

            email.From = "netcuratio@gmail.com";
            email.To.Add("matthewajc@outlook.com");
            email.To.Add("thomasrogerswebdev@gmail.com");
            email.To.Add("tom.rogers@netcuratio.com");

            email.Subject = "Customer signed up to mailing list.";

            email.Body += $"<p>Sender e-mail: {model.Email}</p><br/>";

            return email;
        }
    }
}